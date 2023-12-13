<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="unit-heads-table">
            <thead>
            <tr>
                <th>UNIT NAME</th>
                <th>UNIT HEAD</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unitHeads as $unitHead)
                <tr>
                    <td>{{$unitHead->unit?$unitHead->unit->name:'no unit'}}</td>
                    <td>{{$unitHead->user?$unitHead->user->name:'no name '}}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['unit-heads.destroy', $unitHead->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('unit-heads.show', [$unitHead->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('unit-heads.edit', [$unitHead->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $unitHeads])
        </div>
    </div>
</div>
