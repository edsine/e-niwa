<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Area Office Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area_office', 'Area Office:') !!}
    {!! Form::text('area_office', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Company Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('company_name', 'Company Name:') !!}
    {!! Form::text('company_name', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Business Nature Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_nature', 'Business Nature:') !!}
    {!! Form::text('business_nature', null, ['class' => 'form-control', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Application Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('application_status', 'Application Status:') !!}
    {!! Form::number('application_status', null, ['class' => 'form-control', 'required']) !!}
</div>