<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $userProfile->user_id }}</p>
</div>

<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{{ $userProfile->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $userProfile->last_name }}</p>
</div>

<!-- Other Name Field -->
<div class="col-sm-12">
    {!! Form::label('other_name', 'Other Name:') !!}
    <p>{{ $userProfile->other_name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $userProfile->email }}</p>
</div>

<!-- Phone Number Field -->
<div class="col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{{ $userProfile->phone_number }}</p>
</div>

<!-- Street Field -->
<div class="col-sm-12">
    {!! Form::label('street', 'Street:') !!}
    <p>{{ $userProfile->street }}</p>
</div>

<!-- State Field -->
<div class="col-sm-12">
    {!! Form::label('state', 'State:') !!}
    <p>{{ $userProfile->state }}</p>
</div>

<!-- Lga Field -->
<div class="col-sm-12">
    {!! Form::label('lga', 'Lga:') !!}
    <p>{{ $userProfile->lga }}</p>
</div>

