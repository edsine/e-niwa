@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_4.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}
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
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{ __('Dashboards') }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    <span>{{ __('Dredging Activities') }}</span></li>
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
                    <a href="javascript: void(0);" data-original-title="{{ __('Reload Data') }}" data-placement="bottom"
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
                        <a class="dropdown-item" data-value="Filter 1" href="javascript:void(0);">{{ __('Filter 1') }}</a>
                        <a class="dropdown-item" data-value="Filter 2" href="javascript:void(0);">{{ __('Filter 2') }}</a>
                        <a class="dropdown-item" data-value="Filter 3" href="javascript:void(0);">{{ __('Filter 3') }}</a>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  Navbar Ends / Breadcrumb Area  -->
    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- 4 AREAS -->
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-4">
                                <div
                                    class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-info text-center">
                                    <i class="las la-globe font-35"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"> {{ __('250') }}</h3>
                                    <p class="text-muted mb-1 text-truncate"> {{ __('Pending') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-uppercase"> {{ __('Pending Dredging Activities') }} <span class="float-right">
                                    {{ __('1010') }}</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                    aria-valuemax="100" style="width: 24.75%">
                                    <span class="sr-only"> {{ __('25% Complete') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-4">
                                <div
                                    class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-secondary text-center">
                                    <i class="las la-certificate font-35"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"> {{ __('250') }}</h3>
                                    <p class="text-muted mb-1 text-truncate"> {{ __('On Going') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-uppercase"> {{ __('On Going Dredging Activities') }} <span
                                    class="float-right">{{ __('1010') }}</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 24.75%">
                                    <span class="sr-only"> {{ __('25% Complete') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-4">
                                <div
                                    class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-success text-center">
                                    <i class="lar la-handshake font-35"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"> {{ __('500') }}</h3>
                                    <p class="text-muted mb-1 text-truncate"> {{ __('Completed') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-uppercase"> {{ __('Completed Dredging Activities') }} <span
                                    class="float-right"> {{ __('1010') }}</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 49.5%">
                                    <span class="sr-only"> {{ __('50% Complete') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-4">
                                <div
                                    class="avatar-md d-flex align-items-center justify-content-center rounded-circle bg-light-danger text-center">
                                    <i class="lar la-thumbs-down font-35"></i>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="text-right">
                                    <h3 class="text-dark my-1"> {{ __('10') }}</h3>
                                    <p class="text-muted mb-1 text-truncate"> {{ __('Abandoned') }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <h6 class="text-uppercase"> {{ __('Abandoned Dredging Activities') }} <span
                                    class="float-right"> {{ __('1010') }}</span></h6>
                            <div class="progress progress-sm m-0">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 0.99%">
                                    <span class="sr-only"> {{ __('15% Complete') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4 AREAS -->
            <!-- Dredging Volume -->
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Dredging Volume') }}</h5>
                        <ul class="tabs tab-pills">
                            <li>
                                <div class="dropdown  custom-dropdown-icon">
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>
                                            {{ __('Options') }}</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                        <a class="dropdown-item" data-value="monthly" href="javascript:void(0);">
                                            {{ __('Monthly') }}</a>
                                        <a class="dropdown-item" data-value="quarterly" href="javascript:void(0);">
                                            {{ __('Quarterly') }}</a>
                                        <a class="dropdown-item" data-value="half-yearly" href="javascript:void(0);">
                                            {{ __('Half Yearly') }}</a>
                                        <a class="dropdown-item" data-value="yearly" href="javascript:void(0);">
                                            {{ __('Yearly') }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="visitAndSales"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- VISIT AND SALES ENDS-->
            <!-- STATISTICS -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one gradient-purple-bliss">
                    <div class="widget-heading">
                        <h5 class="text-white light"> {{ __('Statistics') }}</h5>
                    </div>
                    <div class="widget-content">
                        <div class="p-2 text-center">
                            <a class="text-white font-medium-1 pointer"> {{ __('Month') }}</a>
                            <a class="btn bg-light-primary text-primary stronger mx-3 px-3"> {{ __('Week') }}</a>
                            <a class="text-white font-medium-1 pointer"> {{ __('Day') }}</a>
                        </div>
                        <div class="mt-3 text-center">
                            <div class="font-35 d-block">
                                <span class="text-white"> {{ __('1m') }}</span>
                                <i class="las la-arrow-down text-danger"></i>
                            </div>
                            <span class="font-15 text-white"> {{ __('This Week -30%') }}</span>
                        </div>
                        <div id="statistics" class=""></div>
                    </div>
                </div>
            </div>
            <!-- STATISTICS ENDS-->
            <!-- ONGOING TASK -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-three add-project">
                    <div class="widget-heading mb-0">
                        <h5> {{ __('Ongoing Task') }}</h5>
                        <span class="w-numeric-title"> {{ __('Team Alpha') }}</span>
                    </div>
                    <div class="widget-content">
                        <ul class="task-lists m-0 p-0 mt-4">
                            <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="{{ asset('assets/img/profile-1.jpg') }}"
                                        alt="story-img" class="rounded-circle avatar-sm"></div>
                                <div class="media-support-info ml-3">
                                    <h6 class="mb-0"> {{ __('Task 1') }}</h6>
                                    <p class="mb-0 font-size-12"> {{ __('Nov 24, 2023') }}</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="{{ asset('assets/img/profile-2.jpg') }}"
                                        alt="story-img" class="rounded-circle avatar-sm"></div>
                                <div class="media-support-info ml-3">
                                    <h6 class="mb-0"> {{ __('Task 2') }}</h6>
                                    <p class="mb-0 font-size-12">{{ __('Nov 25, 2023') }}</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="{{ asset('assets/img/profile-3.jpg') }}"
                                        alt="story-img" class="rounded-circle avatar-sm"></div>
                                <div class="media-support-info ml-3">
                                    <h6 class="mb-0"> {{ __('Task 3') }}</h6>
                                    <p class="mb-0 font-size-12"> {{ __('Nov 27, 2023') }}</p>
                                </div>
                            </li>
                            <li class="d-flex mb-4 align-items-center">
                                <div class="user-img img-fluid"><img src="{{ asset('assets/img/profile-4.jpg') }}"
                                        alt="story-img" class="rounded-circle avatar-sm"></div>
                                <div class="media-support-info ml-3">
                                    <h6 class="mb-0"> {{ __('Task 4') }}</h6>
                                    <p class="mb-0 font-size-12"> {{ __('Nov 30, 2023') }}</p>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="user-img img-fluid"><img src="{{ asset('assets/img/profile-5.jpg') }}"
                                        alt="story-img" class="rounded-circle avatar-sm"></div>
                                <div class="media-support-info ml-3">
                                    <h6 class="mb-0"> {{ __('Task 5') }}</h6>
                                    <p class="mb-0 font-size-12"> {{ __('Dec 1, 2023') }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ONGOING TASK ENDS-->
            <!-- AMOUNT -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-six bg-light-danger p-4 mb-4 mt-4">
                    <div class="d-flex align-items-center">
                        <div class="col-md-9 p-0">
                            <p class="text-danger"> {{ __('Volume Due') }}</p>
                            <h2 class="text-danger"> {{ __('1.5M') }} </h2>
                            <h6 class="text-danger mb-0"> {{ __('Area Alpha') }}</h6>
                            <p class="text-danger mb-0"> {{ __('Dredging for Friday') }} </p>
                        </div>
                        <div class="col-md-3 chart-icon text-right p-0">
                            <i class="las la-coins font-45 text-danger"></i>
                        </div>
                    </div>
                </div>
                <div class="widget widget-six bg-light-success p-4">
                    <div class="d-flex align-items-center">
                        <div class="col-md-9 p-0">
                            <p class="text-success-teal"> {{ __('Volume Completed') }}</p>
                            <h2 class="text-success-teal"> {{ __('3M') }} </h2>
                            <h6 class="text-success-teal mb-0"> {{ __('Area Alpha') }} </h6>
                            <p class="text-success-teal mb-0"> {{ __('Dredging for Friday') }} </p>
                        </div>
                        <div class="col-md-3 chart-icon text-right p-0">
                            <i class="las la-handshake font-45 text-success-teal"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AMOUNT ENDS-->
            <!-- SCHEDULE -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-three">
                    <div class="widget-heading mb-0">
                        <h5> {{ __('Schedule') }}</h5>
                        <span class="w-numeric-title"> {{ __('Todays Schedule') }}</span>
                    </div>
                    <div class="widget-content">
                        <ul class="schedule-lists m-0 p-0 mt-4">
                            <li class="d-flex justify-content-between mb-4 align-items-center">
                                <div class="media-support-info">
                                    <h6 class="mb-2"> {{ __('Task 1') }}</h6>
                                    <p class="mb-0"><span class="badge badge-primary"> {{ __('11:45 am') }}</span>
                                        {{ __('Area Alpha 1') }}</p>
                                </div>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="bs-tooltip" title=""
                                        data-original-title="Jeremy Lawson">
                                        <img src="{{ asset('assets/img/profile-4.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Dino Morea">
                                        <img src="{{ asset('assets/img/profile-5.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Anna Ivanovic">
                                        <img src="{{ asset('assets/img/profile-6.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between mb-4 align-items-center">
                                <div class="media-support-info">
                                    <h6 class="mb-2"> {{ __('Task 2') }}</h6>
                                    <p class="mb-0"><span class="badge badge-info"> {{ __('10:30 am') }}</span>
                                        {{ __('Area Alpha 2') }}</p>
                                </div>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="bs-tooltip" title=""
                                        data-original-title="Shin Chan">
                                        <img src="{{ asset('assets/img/profile-5.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Nobi Kopilu">
                                        <img src="{{ asset('assets/img/profile-8.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Shimi Williams">
                                        <img src="{{ asset('assets/img/profile-10.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between mb-4 align-items-center">
                                <div class="media-support-info">
                                    <h6 class="mb-2"> {{ __('Task 3') }}</h6>
                                    <p class="mb-0"><span class="badge badge-warning text-white">
                                            {{ __('02:00 pm') }}</span> {{ __('Area Alpha 1') }}</p>
                                </div>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="bs-tooltip" title=""
                                        data-original-title="Ding Dong">
                                        <img src="{{ asset('assets/img/profile-11.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="King Lomi">
                                        <img src="{{ asset('assets/img/profile-12.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Rafa Matic">
                                        <img src="{{ asset('assets/img/profile-13.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                </div>
                            </li>
                            <li class="d-flex justify-content-between mb-4 align-items-center">
                                <div class="media-support-info">
                                    <h6 class="mb-2"> {{ __('Task 4') }}</h6>
                                    <p class="mb-0"><span class="badge badge-success"> {{ __('03:30 am') }}</span>
                                        {{ __('Area Alpha 2') }}</p>
                                </div>
                                <div class="d-flex">
                                    <a href="javascript:void(0);" class="bs-tooltip" title=""
                                        data-original-title="Joe Jonas">
                                        <img src="{{ asset('assets/img/profile-14.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Viku Hami">
                                        <img src="{{ asset('assets/img/profile-15.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                    <a href="javascript:void(0);" class="bs-tooltip ml-m-12" title=""
                                        data-original-title="Novac Federer">
                                        <img src="{{ asset('assets/img/profile-16.jpg') }}"
                                            class="avatar-sm rounded-circle border-width-2px border-solid border-light"
                                            alt="avatar">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--SCHEDULE ENDS-->
            <div class="col-xl-6 col-lg-12 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-three">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Timeline') }}</h5>
                    </div>
                    <div class="widget-content">
                        <div class="">
                            <ol class="activity-feed">
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <span class="date"> {{ __('Jan 22') }}</span>
                                        <span class="activity-text"> {{ __('Milestone one') }}</span>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <span class="date">{{ __('Mar 23') }}</span>
                                        <span class="activity-text"> {{ __('Milestone two') }}
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <span class="date">{{ __('Aug 18') }}</span>
                                        <span class="activity-text">
                                            {{ __('Milestone three') }}</span>
                                    </div>
                                </li>
                                <li class="feed-item">
                                    <div class="feed-item-list">
                                        <span class="date">{{ __('Nov 30') }}</span>
                                        <span class="date"> {{ __('Milestone four') }}</span>
                                    </div>
                                </li>
                            </ol>
                            <div class="text-center">
                                <a href="#" class="btn btn-sm btn-outline-primary"> {{ __('Load More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget dashboard-table">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Volume Targets') }}</h5>
                    </div>
                    <div class="widget-content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="th-content"> {{ __('Area') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Progress') }}</div>
                                        </th>
                                        <th>
                                            <div class="th-content"> {{ __('Volume') }}</div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-center">
                                                <img src="{{ url('assets/img/profile-6.jpg') }}"
                                                    class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                    alt="avatar">
                                                <p class="mb-0"> {{ __('Area Alpha') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress br-30">
                                                <div class="progress-bar br-30 bg-warning" role="progressbar"
                                                    style="width: 29.56%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-warning"> {{ __('29.56%') }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-center">
                                                <img src="{{ url('assets/img/profile-5.jpg') }}"
                                                    class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                    alt="avatar">
                                                <p class="mb-0"> {{ __('Area Beta') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress br-30">
                                                <div class="progress-bar br-30 bg-success-teal" role="progressbar"
                                                    style="width: 92.89%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-success-teal"> {{ __('92.89%') }}</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-center">
                                                <img src="{{ url('assets/img/profile-3.jpg') }}"
                                                    class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                    alt="avatar">
                                                <p class="mb-0"> {{ __('Area Zeta') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress br-30">
                                                <div class="progress-bar br-30 bg-info" role="progressbar"
                                                    style="width: 65.01%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-info"> {{ __('62.01%') }}</span></td>
                                    </tr>
                                    <tr class="border-bottom border-light">
                                        <td>
                                            <div class="d-flex align-center">
                                                <img src="{{ url('assets/img/profile-13.jpg') }}"
                                                    class="avatar-sm rounded-circle border-width-2px border-solid border-light mr-3"
                                                    alt="avatar">
                                                <p class="mb-0"> {{ __('Area Omega') }}</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="progress br-30">
                                                <div class="progress-bar br-30 bg-danger" role="progressbar"
                                                    style="width: 15.28%" aria-valuenow="25" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td><span class="text-danger"> {{ __('15.28%') }}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <p class="font-13 text-center mt-4 mb-1 text-muted">
                                <a class="text-primary" href="javascript:void(0);"> {{ __('Click here') }}</a>
                                {{ __('to see the full dredging area list') }}
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
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('plugins/flatpickr/flatpickr.js') !!}
    {!! Html::script('assets/js/dashboard/dashboard_4.js') !!}
@endpush

@push('custom-scripts')
@endpush
