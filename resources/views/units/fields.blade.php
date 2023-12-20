<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_name', 'Name:') !!}
    {!! Form::text('unit_name', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department :') !!}
    {!! Form::select('department_id', $department, null, ['class' => 'form-control custom-select']) !!}
</div>











