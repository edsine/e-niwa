<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $payment->user_id }}</p>
</div>

<!-- Payment Date Field -->
<div class="col-sm-12">
    {!! Form::label('payment_date', 'Payment Date:') !!}
    <p>{{ $payment->payment_date }}</p>
</div>

<!-- Transaction Reference Field -->
<div class="col-sm-12">
    {!! Form::label('transaction_reference', 'Transaction Reference:') !!}
    <p>{{ $payment->transaction_reference }}</p>
</div>

<!-- Service Field -->
<div class="col-sm-12">
    {!! Form::label('service', 'Service:') !!}
    <p>{{ $payment->service }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $payment->amount }}</p>
</div>

<!-- Payment Status Field -->
<div class="col-sm-12">
    {!! Form::label('payment_status', 'Payment Status:') !!}
    <p>{{ $payment->payment_status }}</p>
</div>

