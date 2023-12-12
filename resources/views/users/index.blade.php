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
                                    {{-- <li class="breadcrumb-item active" aria-current="page"><span> {{ __('') }}</span> --}}
                                </li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <a class="btn btn-primary float-right"
                       href="{{ route('users.create') }}">
                        Add New
                    </a>
                </li>
                <li class="nav-item more-dropdown">
                    <a href="javascript: void(0);" data-original-title="{{ __('Reload Data') }}"data-placement="bottom"
                        class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                        <i class="las la-sync"></i>
                    </a>
                </li>
                <li class="nav-item custom-dropdown-icon">
                    <a href="javascript: void(0);" data-original-title="{{ __('Filter') }}" data-placement="bottom"
                        id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        class="btn btn-primary dash-btn btn-sm ml-2 bs-tooltip">
                        <i class="las la-filter"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                        <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);"> {{ __('Filter 1') }}</a>
                        <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);"> {{ __('Filter 2') }}</a>
                        <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);"> {{ __('Filter 3') }}</a>
                    </div>
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

                            <div class="clearfix"></div>

                            @include('users.table')


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
