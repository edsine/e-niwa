<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $departmenthead->user_id }}</p>
</div>

<!-- Department Id Field -->
<div class="col-sm-12">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $departmenthead->department_id }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $departmenthead->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $departmenthead->updated_at }}</p>
</div>

