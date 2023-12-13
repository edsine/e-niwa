<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="departmentheads-table">
            <thead>
            <tr>
                <th>HOD NAME</th>
                <th>Department </th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($departmentheads as $departmenthead)
                <tr>
                    <td>{{$departmenthead->user?$departmenthead->user->name:''}}</td>
                    <td>{{ $departmenthead->user_id }}</td>
                    <td>{{ $departmenthead->department?$departmenthead->department->name:'' }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['departmentheads.destroy', $departmenthead->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('departmentheads.show', [$departmenthead->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('departmentheads.edit', [$departmenthead->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $departmentheads])
        </div>
    </div>
</div>
