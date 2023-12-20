<?php

public function generateRemita(Request $request)
    {
        //validation only for ECS payments
        $request->validate([
            'year' => 'required_with:contribution_period',
            'number_of_months' => 'required_if:contribution_period,Monthly|numeric',
            'contribution_period' => 'required_with:year|string',
            'amount' => 'required|numeric',
            'payment_type' => 'required|numeric',
            'employees' => 'required_with:year,contribution_period',
        ]);

        //generate invoice number
        $lastInvoice = Payment::get()->last();
        if ($lastInvoice) {
            $idd = str_replace("NSITF-", "", $lastInvoice['invoice_number']);
            $id = str_pad($idd + 1, 7, 0, STR_PAD_LEFT);
            $lastInvoice = 'NSITF-' . $id;
        } else {
            $lastInvoice = "NSITF-0000001";
        }

        //$serviceTypeId = $request->payment_type ==  1 ? env('ECS_REGISTRATION') : ($request->payment_type == 4 ? env('ECS_CONTRIBUTION') : env('ECS_CERTIFICATE'));
        $serviceTypeId = "4430731";
        $amount = $request->amount;
        $orderId = round(microtime(true) * 1000);
        $apiHash = hash('sha512', env('REMITA_MERCHANT_ID') . $serviceTypeId . $orderId . $amount . env('REMITA_API_KEY'));

        $fields = [
            "serviceTypeId" => $serviceTypeId,
            "amount" => $amount,
            "orderId" => $orderId,
            "payerName" => auth()->user()->company_name,
            "payerEmail" => auth()->user()->company_email,
            "payerPhone" => auth()->user()->company_phone,
            "description" => $request->payment_type ==  1 ? "ECS Registration Fees" : ($request->payment_type == 2 ? "Certificate Processing Fees" : "ECS Payment"),
            "customFields" => [
                [
                    "name" => 'Invoice Number',
                    "value" => $lastInvoice,
                    "type" => "ALL",
                ],
                [
                    "name" => 'ECS Order ID',
                    "value" => auth()->user()->ecs_number,
                    "type" => "ALL",
                ],
                [
                    "name" => 'Payment type',
                    "value" => $request->payment_type,
                    "type" => "ALL",
                ],
            ],
        ];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => env('REMITA_BASE_URL') . '/echannelsvc/merchant/api/paymentinit',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($fields),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: remitaConsumerKey=' . env('REMITA_MERCHANT_ID') . ',remitaConsumerToken=' . $apiHash
            ),
        ));

        $result = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return redirect()->route('home')->with('error', $err);
        }

        $result = substr($result, 7);
        $newLength = strlen($result);
        $result = substr($result, 0, $newLength - 1);
        $data = json_decode($result, true);
        //dd($orderId);
// dd($fields);
// exit();
        if ($data['statuscode'] == "025" && $data['RRR']) {
            //add record to transactions table
            $payment = auth()->user()->payments()->create([
                'payment_type' => $request->payment_type,
                'payment_employee' => $request->employees,
                'rrr' => $data['RRR'],
                'invoice_number' => $lastInvoice,
                'invoice_generated_at' => date('Y-m-d H:i:s'),
                'invoice_duration' => date('Y-m-d', strtotime('+1 year')),
                'payment_status' => 0,
                'amount' => $amount,
                //below for ECS payments
                'contribution_year' => $request->year ?? null,
                'contribution_period' => $request->contribution_period ?? null,
                'contribution_months' => $request->number_of_months ?? null,
                'employees' => $request->employees,
            ]);

            //for certificate request, link payment to certificates
            if ($request->payment_type == 2) {
                auth()->user()->certificates()->where('id', $request->certificate_id)->update(['payment_id' => $payment->id]);
            }

            //redirect to home

            if ($request->payment_type == 1)
                return redirect()->back()->with('success', 'Payment Reference Generated! RRR = ' . $data['RRR']);
            return redirect()->back()->with('success', 'Payment Reference Generated! RRR = ' . $data['RRR']);
        } else {
            return redirect()->back()->with('error', 'Problems encountered in generating RRR');
        }
    }

    public function callbackRemita(Request $request)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://remitademo.net/payment/v1/payment/query/' . $request->tid,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'publicKey: ' . env('REMITA_PUBLIC_KEY'),
                'Content-Type: application/json',
                'TXN_HASH: ' . hash('sha512', $request->tid . env('REMITA_SECRET_KEY'))
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return redirect()->back()->with('error', $err);
        }

        $result = json_decode($response, true);
        if ($result && $result['responseCode'] == "00") {
            //get and update transaction
            $payment = Payment::where('rrr', $request->ref)->first();

            //if already processed
            if ($payment->payment_status == 1) {
                return redirect()->route('payment.index')->with('info', 'Payment already processed!');
            }

            //update payments
            $payment->payment_status = 1;
            $payment->transaction_id = $request->tid;
            $payment->paid_at = $result['responseData'][0]['paymentDate'];
            $payment->save();

            if ($payment->payment_type == 1) {
                //update employer
                //$employer = Employer::where('id', $payment->employer_id)->first();
                $payment->employer->paid_registration = 1;
                $payment->employer->save();
            }

            if ($payment->payment_type == 2) {
                auth()->user()->certificates()->where('payment_id', $payment->id)->update(['payment_status' => 1]);
            }

            //generate invoice pdf
            $pdf = PDF::setOptions(['dpi' => 150, 'defaultFont' => 'DejaVu Sans'])
                //->loadView('emails.payment.status', ['pid' => $payment->id])
                ->loadView('payments.invoice', ['pid' => $payment->id])
                ->setPaper('a4', 'portrait');

            $content = $pdf->download()->getOriginalContent();

            //$pdf->save(Storage::path('/invoices/invoice_' . $payment->id . '.pdf'))->stream('invoice_' . $payment->id . '.pdf');
            Storage::put('public/invoices/invoice_' . $payment->id . '.pdf', $content);

            //send mail with invoice notification
            Mail::to($payment->employer->company_email)->send(new PaymentStatusMail($payment));

            Storage::delete('public/invoices/invoice_' . $payment->id . '.pdf');

            return redirect()->route('payment.index')->with('success', $payment->payment_type == 1 ? 'Registration Payment successful!' : 'ECS Payment successful!');
        } else { //if payment was not successful
            //get and update transaction
            $payment = Payment::where('rrr', $request->ref)->first();

            //if already processed
            if ($payment->payment_status == 1)
                return redirect()->route('payment.index')->with('info', 'Payment already processed!');

            //update payments
            $payment->payment_status = 2;
            $payment->save();

            return redirect()->route('payment.index')->with('info', $result['responseMsg']);
        }
    }
