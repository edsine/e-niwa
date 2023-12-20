@section('content')
    @extends('layout.master')

    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/apex/apexcharts.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashboard_1.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/elements/tooltip.css') }}">
    @endpush


@section('content')
    <!--  Navbar Starts / Breadcrumb Area  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
                <i class="las la-bars"></i>
            </a>
            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);"> {{ __('Dashboard') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span> {{ __('Users') }}</span>
                                    <li class="breadcrumb-item active" aria-current="page"><span> {{ __('Edit') }}</span>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <h6>Create User</h6>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->

    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="layout-top-spacing mb-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container col-md-12 p-0">
                        <div class="row layout-top-spacing date-table-container">
                            @include('flash::message')

                            <div class="card col-md-10 widget box box-shadow mb-4">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Form Validation</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'class' => 'needs-validation was-validated']) !!}
                                                @include('users.edit_fields')
                                                {!! Form::submit('Save', ['class' => 'float-right btn btn-primary mt-3']) !!}
                                                <a class="float-right btn btn-default mr-3 mt-3" href="{{ route('users.index') }}" type="submit">Cancel</a>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Body Ends -->
@endsection

@push('plugin-scripts')
    <script src="{{ asset('assets/js/loader.js') }}"></script>
    <script src="{{ asset('plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('plugins/flatpickr/flatpickr.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_1.js') }}"></script>
@endpush
