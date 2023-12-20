<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_unit', 'Name:') !!}
    {!! Form::text('department_unit', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control', 'required']) !!}
</div>