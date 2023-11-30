@extends('layout.master')

@push('plugin-styles')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}"> --}}
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);"> {{ __('Dashboards') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>
                                        {{ __('Documentation and Reports') }}</span></li>
                            </ol>
                        </nav>
                    </div>
                </li>
            </ul>

            <ul class="navbar-nav d-flex align-center ml-auto right-side-filter">
                <li class="nav-item more-dropdown">
                    <div class="input-group input-group-sm">
                        <input id="rangeCalendarFlatpickr" class="form-control flatpickr flatpickr-input active"
                            type="text" placeholder="{{ __('Select Date') }}">
                        <div class="input-group-append">
                            <span class="input-group-text bg-primary border-primary" id="basic-addon2">
                                <i class="lar la-calendar"></i>
                            </span>
                        </div>
                    </div>
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
        <div class="row layout-top-spacing">
            
            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-primary rounded-circle">
                            <i class="las la-file-alt"></i>
                        </span>
                        <div class="ml-auto">
                            <div class="quick-comparison qcompare-success">
                                <span> {{ __('75%') }}</span>
                                <i class="las la-arrow-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <h3> {{ __('112') }}</h3>
                        <p class="font-17 text-primary mb-0"> {{ __('Reports Available') }}</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-warning rounded-circle">
                            <i class="las la-chart-pie"></i>
                        </span>
                        <div class="ml-auto">
                            <div class="quick-comparison qcompare-danger">
                                <span> {{ __('30%') }}</span>
                                <i class="las la-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <h3> {{ __('Regulatory Status') }}</h3>
                        <p class="font-17 text-warning mb-0"> {{ __('Environmental & Legal') }}</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-secondary rounded-circle">
                            <i class="las la-history"></i>
                        </span>
                        <div class="ml-auto">
                            <div class="quick-comparison qcompare-success">
                                <span> {{ __('90%') }}</span>
                                <i class="las la-arrow-up"></i>
                            </div>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <h3> {{ __('567') }}</h3>
                        <p class="font-17 text-secondary mb-0"> {{ __('Historical Reports') }}</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <a class="widget quick-category">
                    <div class="quick-category-head">
                        <span class="quick-category-icon qc-success-teal rounded-circle">
                            <i class="las la-check-double"></i>
                        </span>
                        <div class="ml-auto">
                            <div class="quick-comparison qcompare-danger">
                                <span> {{ __('95%') }}</span>
                                <i class="las la-arrow-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="quick-category-content">
                        <h3> {{ __('Compliance Achieved') }}</h3>
                        <p class="font-17 text-success-teal mb-0"> {{ __('Regulatory Standards') }}</p>
                    </div>
                </a>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Monthly Reports Overview') }}</h5>
                        <ul class="tabs tab-pills">
                            <li>
                                <div class="dropdown  custom-dropdown-icon">
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span> {{ __('Options') }}</span> <i class="las la-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">
                                            {{ __('Quarterly') }}</a>
                                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);">
                                            {{ __('Half Yearly') }}</a>
                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);">
                                            {{ __('Download Reports') }}</a>
                                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);">
                                            {{ __('Share Reports') }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="monthlyReportsChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-two">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Top Reports by Category') }}</h5> <!-- Updated chart title -->
                    </div>
                    <div class="widget-content">
                        <div id="reportsByCategoryChart" class=""></div>
                        <p class="font-13 text-center mb-10 text-muted">
                            <a class="text-primary" href="javascript:void(0);"> {{ __('Click here') }}</a>
                            {{ __('to see the full list of categories') }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-activity-four">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Reports Summary') }}</h5>
                    </div>
                    <div class="widget-content">
                        <div class="sales-summary-content d-flex mb-3 mt-4">
                            <div class="sales-summary-icon mr-3">
                                <i class="las la-chart-bar sales-primary-icon"></i>
                            </div>
                            <div class="sales-progress flex-grow-1">
                                <span class="font-12"> {{ __('Total Reports') }}</span>
                                <span class="font-12 float-right">{{ __('#8341890') }}</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-gradient-primary" role="progressbar" aria-valuenow="70"
                                        style="width:70%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-summary-content d-flex mb-3">
                            <div class="sales-summary-icon mr-3">
                                <i class="las la-file-invoice-dollar sales-info-icon"></i>
                            </div>
                            <div class="sales-progress flex-grow-1">
                                <span class="font-12">{{ __('Revenue from Reports') }}</span>
                                <span class="font-12 float-right"> {{ __('#4342890') }}</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="50"
                                        style="width:50%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-summary-content d-flex mb-3">
                            <div class="sales-summary-icon mr-3">
                                <i class="las la-file-invoice-dollar sales-warning-icon"></i>
                            </div>
                            <div class="sales-progress flex-grow-1">
                                <span class="font-12"> {{ __('Budget for Reports') }}</span>
                                <span class="font-12 float-right"> {{ __('#3343833') }}</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" aria-valuenow="40"
                                        style="width:40%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sales-summary-content d-flex mb-0">
                            <div class="sales-summary-icon mr-3">
                                <i class="las las la-hand-holding-usd sales-success-icon"></i>
                            </div>
                            <div class="sales-progress flex-grow-1">
                                <span class="font-12"> {{ __('Income from Reports') }}</span>
                                <span class="font-12 float-right"> {{ __('#2345871') }}</span>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="35"
                                        style="width:35%"></div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-block btn-primary mt-4"> {{ __('View Full Report') }}</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widtget d-flex widget-six mb-4">
                    <div class="widget-six-icon-container background-primary center">
                        <i class="las la-file-alt text-white font-25"></i>
                    </div>
                    <div class="p-3 flex-grow-1">
                        <span class="m-2 strong text-primary"> {{ __('Environmental Reports') }}</span>

                        <span class="float-right pt-1 font-12"> {{ __('#283899') }}</span>
                        <p class="ml-2 mt-2 mb-0 font-12 strong"> {{ __('Total 758 documents') }}</p>

                    </div>
                </div>
                <div class="widtget d-flex widget-six mb-4">
                    <div class="widget-six-icon-container background-secondary center">
                        <i class="las la-gavel text-white font-25"></i>
                    </div>
                    <div class="p-3 flex-grow-1">
                        <span class="m-2 strong text-secondary"> {{ __('Legal Compliance') }}</span>

                        <span class="float-right pt-1 font-12"> {{ __('#213841') }}</span>
                        <p class="ml-2 mt-2 mb-0 font-12 strong"> {{ __('Total 68 documents') }}</p>

                    </div>
                </div>
                <div class="widtget d-flex widget-six mb-4">
                    <div class="widget-six-icon-container background-warning center">
                        <i class="las la-file-invoice-dollar text-white font-25"></i>

                    </div>
                    <div class="p-3 flex-grow-1">
                        <span class="m-2 strong text-warning"> {{ __('Financial Statements') }}</span>

                        <span class="float-right pt-1 font-12"> {{ __('#113822') }}</span>
                        <p class="ml-2 mt-2 mb-0 font-12 strong"> {{ __('Total 435 documents') }}</p>

                    </div>
                </div>
                <div class="widtget d-flex widget-six mb-0">
                    <div class="widget-six-icon-container background-success-teal center">
                        <i class="las la-clipboard-check text-white font-25"></i>

                    </div>
                    <div class="p-3 flex-grow-1">
                        <span class="m-2 strong text-success-teal"> {{ __('Research Papers') }}</span>

                        <span class="float-right pt-1 font-12"> {{ __('#23381') }}</span>
                        <p class="ml-2 mt-2 mb-0 font-12 strong"> {{ __('Total 123 documents') }}</p>

                    </div>
                </div>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget dashboard-table">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Top Internal Documents') }}</h5>
                        <div class="dropdown custom-dropdown-icon">
                            <a class="font-17 mr-3 pointer"><i class="las la-sync-alt"></i></a>
                            <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>
                                    {{ __('Options') }}</span> <i class="las la-angle-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown"
                                style="will-change: transform;">
                                <a class="dropdown-item" data-value="Mail" href="javascript:void(0);">
                                    {{ __('Mail') }}</a>
                                <a class="dropdown-item" data-value="Print" href="javascript:void(0);">
                                    {{ __('Print') }}</a>
                                <a class="dropdown-item" data-value="Download" href="javascript:void(0);">
                                    {{ __('Download') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content"> {{ __('Document Name') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Category') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Uploaded By') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Date Uploaded') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Action') }}</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ __('Project E-NIWA Report') }}
                                        </td>
                                        <td> {{ __('Project') }}</td>
                                        <td> {{ __('John Doe') }}</td>
                                        <td> {{ __('2023-10-25') }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="javascript:void(0);" class="bs-tooltip font-20 text-muted"
                                                    title="{{ __('View') }}"><i class="las la-eye"></i></a>
                                                <a href="javascript:void(0);" class="bs-tooltip font-20 text-primary ml-2"
                                                    title="{{ __('Edit') }}"><i class="las la-pen"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="font-13 text-center mt-4 mb-1 text-muted">
                                <a class="text-primary" href="javascript:void(0);">{{ __('Click here') }}</a>
                                {{ __('to see the full list of internal documents') }}
                            </p>
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
    <script src="{{ asset('assets/js/dashboard/r_and_d_dashboard.js') }}"></script>
@endpush


@push('custom-scripts')
@endpush
