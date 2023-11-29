<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $application->user_id }}</p>
</div>

<!-- Area Office Field -->
<div class="col-sm-12">
    {!! Form::label('area_office', 'Area Office:') !!}
    <p>{{ $application->area_office }}</p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $application->company_name }}</p>
</div>

<!-- Business Nature Field -->
<div class="col-sm-12">
    {!! Form::label('business_nature', 'Business Nature:') !!}
    <p>{{ $application->business_nature }}</p>
</div>

<!-- Application Status Field -->
<div class="col-sm-12">
    {!! Form::label('application_status', 'Application Status:') !!}
    <p>{{ $application->application_status }}</p>
</div>

