<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="table-header">{{ __('Users') }}</h4>
                <div class="table-responsive mb-4">
                    <table id="user-profiles-table" id="dropdown-dt" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td></td>
                                    <td style="width: 120px">
                                        {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                style="will-change: transform;">
                                                <a class="dropdown-item" href="{{ route('users.edit', [$user->id]) }}" >{{ __('Edit') }}</a>
                                                <a class="dropdown-item" href="{{ route('users.show', [$user->id]) }}">{{ __('Show Details') }}</a>                                                
                                                {!! Form::button('Delete', ['type' => 'submit', 'class' => 'dropdown-item', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                            </div>
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
                        @include('adminlte-templates::common.paginate', ['records' => $users])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
