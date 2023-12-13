<div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
    <div class="widget-content widget-content-area br-6">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="table-header">{{ __('Roles') }}</h4>
                <div class="table-responsive mb-4">
                    <table id="user-profiles-table" id="dropdown-dt" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Guard Name</th>
                                <th colspan="3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>{{ $role->guard_name }}</td>
                                    <td style="width: 120px">
                                        {!! Form::open(['route' => ['roles.destroy', $role->id], 'method' => 'delete']) !!}
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="las la-cog"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                style="will-change: transform;">
                                                <a class="dropdown-item"
                                                    href="{{ route('roles.edit', [$role->id]) }}">{{ __('Edit') }}</a>
                                                {!! Form::button('Delete', [
                                                    'type' => 'submit',
                                                    'class' => 'dropdown-item',
                                                    'onclick' => "return confirm('Are you sure?')",
                                                ]) !!}
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
                        @include('adminlte-templates::common.paginate', ['records' => $roles])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
