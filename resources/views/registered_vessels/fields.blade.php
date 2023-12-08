<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Vessel Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vessel_name', 'Vessel Name:') !!}
    {!! Form::text('vessel_name', null, ['class' => 'form-control', 'required', 'maxlength' => 100, 'maxlength' => 100]) !!}
</div>

<!-- Registration Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('registration_date', 'Registration Date:') !!}
    {!! Form::date('registration_date', null, ['class' => 'form-control','id'=>'registration_date']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#registration_date').datepicker()
    </script>
@endpush