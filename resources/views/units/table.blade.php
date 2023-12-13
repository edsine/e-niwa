<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="units-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Department </th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($units as $unit)
                <tr>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->department?$unit->department->name:'no unit' }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['units.destroy', $unit->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('units.show', [$unit->id]) }}"
                               class='btn btn-success btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>

                            <a href="{{ route('units.edit', [$unit->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $units])
        </div>
    </div>
</div>
