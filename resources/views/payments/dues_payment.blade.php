@extends('layout.master')

@push('plugin-styles')
    <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/apex/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashboard_1.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/elements/tooltip.css') }}">


    <link rel="stylesheet" href="{{ asset('assets/payments/css/theme.css?ver=3.2.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/payments/css/dashlite.css?ver=3.2.2') }}">
@endpush


@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- content @s
        -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">NIWA Act and Tariff</h2>
                                                <div class="nk-block-des">
                                                    <p><span>The first compulsory payment would be payment for the NIWA Act and
                                                            Tariff, which happens upon registration</span>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="card card-bordered">
                                                    <div class="card-inner-group">
                                                        <div class="card-inner">
                                                            <div class="sp-plan-head-group">
                                                                <div class="sp-plan-head">
                                                                    <h6 class="title">One-Time Payment</h6>
                                                                </div>
                                                                <div class="sp-plan-amount">
                                                                    <span class="sp-plan-status text-warning">Due</span>
                                                                    <span class="amount">N5000.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="sp-plan-payopt">
                                                                <div class="cc-pay">
                                                                    <ul class="cc-pay-method">
                                                                        <li class="cc-pay-btn">
                                                                            <a href="#" onclick="makePayment()"
                                                                                class="btn btn-secondary"><span>Pay
                                                                                    Now</span> <em
                                                                                    class="icon ni ni-arrow-long-right"></em></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-inner">
                                                            <div class="sp-plan-link">
                                                                <a href="#" class="link">
                                                                    <span><em class="icon ni ni-cc-alt"></em>Powered by
                                                                        Remita</span>
                                                                </a>
                                                            </div>
                                                        </div><!-- .card-inner -->
                                                    </div><!-- .card-inner-group -->
                                                </div><!-- .card -->
                                            </div><!-- .col -->
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-block">
                                        <div class="card card-bordered">
                                            <div class="card-inner card-inner-md">
                                                <div class="card-title-group">
                                                    <h6 class="card-title">Payment History</h6>
                                                    <div class="card-action">
                                                        <a href="html/subscription/payments.html" class="link link-sm">Download
                                                            Statement</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-tranx">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th class="tb-tnx-id"><span class="">#</span></th>
                                                        <th class="tb-tnx-info">
                                                            <span class="tb-tnx-desc d-none d-sm-inline-block">
                                                                <span>Bill For</span>
                                                            </span>
                                                            <span class="tb-tnx-date d-md-inline-block d-none">
                                                                <span class="d-md-none">Date</span>
                                                                <span class="d-none d-md-block">
                                                                    <span>Issue Date</span>
                                                                    <span>Due Date</span>
                                                                </span>
                                                            </span>
                                                        </th>
                                                        <th class="tb-tnx-amount">
                                                            <span class="tb-tnx-total">Total</span>
                                                            <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                                                        </th>
                                                    </tr><!-- .tb-tnx-item -->
                                                </thead>
                                                <tbody>
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4947</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscrition</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-05-2019</span>
                                                                <span class="date">10-13-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status">
                                                                <span class="badge badge-dot bg-warning">Due</span>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-tnx-item -->
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4904</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Maintenance Year
                                                                    Subscription</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">06-19-2019</span>
                                                                <span class="date">06-26-2019</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$99.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span
                                                                    class="badge badge-dot bg-success">Paid</span>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-tnx-item -->
                                                    <tr class="tb-tnx-item">
                                                        <td class="tb-tnx-id">
                                                            <a href="#"><span>4829</span></a>
                                                        </td>
                                                        <td class="tb-tnx-info">
                                                            <div class="tb-tnx-desc">
                                                                <span class="title">Enterprize Year Subscrition</span>
                                                            </div>
                                                            <div class="tb-tnx-date">
                                                                <span class="date">10-04-2018</span>
                                                                <span class="date">10-12-2018</span>
                                                            </div>
                                                        </td>
                                                        <td class="tb-tnx-amount">
                                                            <div class="tb-tnx-total">
                                                                <span class="amount">$599.00</span>
                                                            </div>
                                                            <div class="tb-tnx-status"><span
                                                                    class="badge badge-dot bg-success">Paid</span>
                                                            </div>
                                                        </td>
                                                    </tr><!-- .tb-tnx-item -->
                                                </tbody>
                                            </table>
                                        </div><!-- .card -->
                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
        </div>
        <!-- Main Body Ends -->
    @endsection

    @push('plugin-scripts')
        <script src="{{ asset('assets/js/loader.js') }}"></script>
        <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
        <script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
        <script src="{{ asset('assets/js/dashboard/dashboard_1.js') }}"></script>
        <script src="{{ asset('assets/payments/js/bundle.js?ver=3.2.2') }}"></script>
        <script src="{{ asset('assets/payments/js/scripts.js?ver=3.2.2') }}"></script>
    @endpush


    @push('custom-scripts')
        <script type="text/javascript" src="https://login.remita.net/payment/v1/remita-pay-inline.bundle.js"></script>

        <script>
            function generateTransactionId(length = 10) {
                const dateString = Date.now().toString(36);
                const randomness = Math.random().toString(36).substring(2);
                return dateString + randomness;
            }

            function updateProfileAfterPayment(transactionId) {
                $.ajax({
                    url: "{{ route('payments.update_profile_after_payment') }}",
                    method: "POST",
                    data: {
                        transactionId,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.success) {
                            window.location.href = "{{ route('applications.create') }}";
                        } else {
                            alert(response.error);
                            // window.location.href = route : 'transactions.check';
                        }
                    },
                    error: function(error) {
                        console.error(error);
                        alert("An error occurred. Please try again.");
                        // window.location.href = route : 'transactions.check';
                    }
                });
            }

            function makePayment() {
                const transactionId = generateTransactionId(20);

                var handler = RmPaymentEngine.init({
                    key: "QzAwMDAyNzEyNTl8MTEwNjE4NjF8OWZjOWYwNmMyZDk3MDRhYWM3YThiOThlNTNjZTE3ZjYxOTY5NDdmZWE1YzU3NDc0ZjE2ZDZjNTg1YWYxNWY3NWM4ZjMzNzZhNjNhZWZlOWQwNmJhNTFkMjIxYTRiMjYzZDkzNGQ3NTUxNDIxYWNlOGY4ZWEyODY3ZjlhNGUwYTY", // Replace with public key
                    customerId: "{{ $user_profile->email }}", // Replace with customer id
                    transactionId: transactionId, // Replace with transaction id
                    firstName: "{{ $user_profile->first_name }}",
                    lastName: "{{ $user_profile->last_name }}",
                    email: "{{ $user_profile->email }}",
                    amount: 5000,
                    narration: "NIWA Act and Tariff Dues",
                    extendedData: { // Optional field. Details are available in the table
                        customFields: [{
                            name: "rrr",
                            value: "340007777362"
                        }],
                    },
                    onSuccess: function(response) {
                        updateProfileAfterPayment(transactionId)
                        // console.log('callback Successful Response', response);
                    },
                    onError: function(response) {
                        alert('An error occured, Please try again later')
                        console.log('callback Error Response', response);
                    },
                    onClose: function() {
                        console.log("closed");
                    }
                });
                handler.openIframe();
            }
        </script>
    @endpush
