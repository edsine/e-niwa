<!-- Unit Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('unit_id', 'Select Unit:') !!}
    {!! Form::select('unit_id', $unit, null, ['class' => 'form-control form-select']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'Select Unit Head:') !!}
    {!! Form::select('user_id',$user->pluck('name','id'), null, ['class' => 'form-control form-select']) !!}
</div>