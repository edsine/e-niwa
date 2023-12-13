<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'HOD NAME:') !!}
    {!! Form::select('user_id',$user, null, ['class' => 'form-control form-select', 'required']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department  :') !!}
    {!! Form::select('department_id',$department,null,  ['class' => 'form-control form-select', 'required']) !!}
</div>