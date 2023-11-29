<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="applications-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Area Office</th>
                <th>Company Name</th>
                <th>Business Nature</th>
                <th>Application Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->user_id }}</td>
                    <td>{{ $application->area_office }}</td>
                    <td>{{ $application->company_name }}</td>
                    <td>{{ $application->business_nature }}</td>
                    <td>{{ $application->application_status }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['applications.destroy', $application->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('applications.show', [$application->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('applications.edit', [$application->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $applications])
        </div>
    </div>
</div>
