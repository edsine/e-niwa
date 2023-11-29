<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="user-profiles-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Other Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Street</th>
                <th>State</th>
                <th>Lga</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($userProfiles as $userProfile)
                <tr>
                    <td>{{ $userProfile->user_id }}</td>
                    <td>{{ $userProfile->first_name }}</td>
                    <td>{{ $userProfile->last_name }}</td>
                    <td>{{ $userProfile->other_name }}</td>
                    <td>{{ $userProfile->email }}</td>
                    <td>{{ $userProfile->phone_number }}</td>
                    <td>{{ $userProfile->street }}</td>
                    <td>{{ $userProfile->state }}</td>
                    <td>{{ $userProfile->lga }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['userProfiles.destroy', $userProfile->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('userProfiles.show', [$userProfile->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('userProfiles.edit', [$userProfile->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $userProfiles])
        </div>
    </div>
</div>
