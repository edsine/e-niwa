<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $registeredVessels->user_id }}</p>
</div>

<!-- Vessel Name Field -->
<div class="col-sm-12">
    {!! Form::label('vessel_name', 'Vessel Name:') !!}
    <p>{{ $registeredVessels->vessel_name }}</p>
</div>

<!-- Registration Date Field -->
<div class="col-sm-12">
    {!! Form::label('registration_date', 'Registration Date:') !!}
    <p>{{ $registeredVessels->registration_date }}</p>
</div>

