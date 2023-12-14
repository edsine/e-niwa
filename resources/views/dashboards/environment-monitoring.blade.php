@extends('layout.master')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/apex/apexcharts.css') !!}
    {!! Html::style('assets/css/dashboard/dashboard_3.css') !!}
    {!! Html::style('plugins/flatpickr/flatpickr.css') !!}
    {!! Html::style('plugins/flatpickr/custom-flatpickr.css') !!}
    {!! Html::style('assets/css/elements/tooltip.css') !!}
    {!! Html::style('https://unpkg.com/leaflet/dist/leaflet.css') !!}
@endpush

@section('content')
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
                                <li class="breadcrumb-item active" aria-current="page"><span>{{ __('Dashboard 3') }}</span>
                                </li>
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

    <!-- Main Body Starts -->
    <div class="layout-px-spacing">
         
        <div class="row layout-top-spacing">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="f-100">
                        <div class="card-box">
                            <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                            <h6 class="mt-0 font-16"> {{ __('Water Quality') }}</h6>
                            <h2 class="text-primary my-3 text-center">
                                <span class="s-counter2 s-counter"> {{ __('710') }}</span>
                            </h2>
                            <p class="text-muted mb-0"> {{ __('Income: $22506') }}
                                <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i> {{ __('10.25%') }}
                                        </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="f-100">
                        <div class="card-box">
                            <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                            <h6 class="mt-0 font-16"> {{ __('Environment Monitoring') }}</h6>
                            <h2 class="text-primary my-3 text-center">
                                <span class="s-counter3 s-counter"> {{ __('510') }}</span>
                            </h2>
                            <p class="text-muted mb-0"> {{ __('This Month: $506') }}
                                <span class="float-right">
                                            <i class="las la-angle-down text-danger mr-1"></i> {{ __('5.00%') }}
                                        </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="f-100">
                        <div class="card-box">
                            <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                            <h6 class="mt-0 font-16"> {{ __('New Users') }}</h6>
                            <h2 class="text-primary my-3 text-center">
                                <span class="s-counter4 s-counter"> {{ __('223') }}</span>K
                            </h2>
                            <p class="text-muted mb-0"> {{ __('Total: 9.4M') }}
                                <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i> {{ __('15.30%') }}
                                        </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 layout-spacing">
                <div class="widget 4-areas">
                    <div class="f-100">
                        <div class="card-box">
                            <i class="las la-info-circle text-muted float-right bs-tooltip" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="More Info"></i>
                            <h6 class="mt-0 font-16"> {{ __('water Ways') }}</h6>
                            <h2 class="text-primary my-3 text-center">
                                <span class="s-counter5 s-counter"> {{ __('302') }}</span>
                            </h2>
                            <p class="text-muted mb-0"> {{ __('Total: 3.2K') }}
                                <span class="float-right">
                                            <i class="las la-angle-up text-success-teal mr-1"></i> {{ __('2.30%') }}
                                        </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div id="map" style="height: 500px;"></div>
            </div>
          
            <!-- REVENUE -->
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Environmental Impact Of Dredging over Time') }}</h5>
                        <ul class="tabs tab-pills">
                            <li>
                                <div class="dropdown  custom-dropdown-icon">
                                    <a class="dropdown-toggle" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span> {{ __('Options') }}</span> <i class="las la-angle-down"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="customDropdown">
                                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);"> {{ __('Quarterly') }}</a>
                                        <a class="dropdown-item" data-value="Settings" href="javascript:void(0);"> {{ __('Half Yearly') }}</a>
                                        <a class="dropdown-item" data-value="Mail" href="javascript:void(0);"> {{ __('Mail') }}</a>
                                        <a class="dropdown-item" data-value="Print" href="javascript:void(0);"> {{ __('Print') }}</a>
                                        <a class="dropdown-item" data-value="Download" href="javascript:void(0);"> {{ __('Download') }}</a>
                                        <a class="dropdown-item" data-value="Share" href="javascript:void(0);"> {{ __('Share') }}</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-content">
                        <div class="tabs tab-content">
                            <div id="content_1" class="tabcontent">
                                <div id="revenue"></div>
                                <div class="row mt-3">
                                    {{-- <div class="col-md-4">
                                        <div class="widget-rounded-circle card-box">
                                            <div class="row">
                                                <div class="col-4 pt-1">
                                                    <div class="avatar-sm rounded-circle bg-primary text-center">
                                                        <i class="las la-chart-line pt-1 font-25"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 pl-0">
                                                    <div class="text-left">
                                                        <h6 class="mt-1 mb-0"><span data-plugin="counterup"> {{ __('58,947') }}</span></h6>
                                                        <p class="text-muted mb-1 text-truncate"> {{ __('Total Sales') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-4">
                                        <div class="widget-rounded-circle card-box">
                                            <div class="row">
                                                <div class="col-4 pt-1">
                                                    <div class="avatar-sm rounded-circle bg-success text-center">
                                                        <i class="las la-file-invoice-dollar pt-1 font-25"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 pl-0">
                                                    <div class="text-left">
                                                        <h6 class="mt-1 mb-0"><span data-plugin="counterup"> {{ __('45,458') }}</span></h6>
                                                        <p class="text-muted mb-1 text-truncate"> {{ __('Total Revenue') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="widget-rounded-circle card-box">
                                            <div class="row">
                                                <div class="col-4 pt-1">
                                                    <div class="avatar-sm rounded-circle bg-danger text-center">
                                                        <i class="las la-bullseye pt-1 font-25"></i>
                                                    </div>
                                                </div>
                                                <div class="col-8 pl-0">
                                                    <div class="text-left">
                                                        <h6 class="mt-1 mb-0"><span data-plugin="counterup"> {{ __('58,000') }}</span></h6>
                                                        <p class="text-muted mb-1 text-truncate"> {{ __('Target Revenue') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- REVENUE ENDS-->
            <!-- TARGET VS ACTUAL -->
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-one">
                    <div class="widget-heading">
                        <h5 class=""> {{ __('Projected vs Actual') }}</h5>
                    </div>
                    <div class="widget-content">
                        <div id="targetvsactual" class=""></div>
                        <div class="row mt-0 text-center">
                           
                            <div class="layout-px-spacing">
                                <div class="row layout-top-spacing">
                                    <!-- Your Map Code -->
                                    <div id="dredgingVolumeChart" style="height: 320px;">
                                    
                                    
                                    </div>

                                    <!-- Bar Chart Container -->
                                    
                                </div>
                            </div>
                            {{-- <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate"> {{ __('Target') }}</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i> {{ __('3.8k') }}</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate"> {{ __('Last week') }}</p>
                                <h4><i class="fe-arrow-up text-success mr-1"></i> {{ __('1.1k') }}</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate"> {{ __('Last Month') }}</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i> {{ __('25k') }}</h4>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- TARGET VS ACTUAL ENDS-->
        </div>
    </div>
@endsection

@push('plugin-scripts')
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('plugins/apex/apexcharts.min.js') !!}
    {!! Html::script('plugins/flatpickr/flatpickr.js') !!}
    {!! Html::script('assets/js/dashboard/environment_monitoring.js') !!}
    {!! Html::script('plugins/counter/jquery.countTo.js') !!}
    {!! Html::script('assets/js/components/custom-counter.js') !!}
    {!! Html::script('https://unpkg.com/leaflet/dist/leaflet.js') !!}
@endpush

@push('custom-scripts')
<script>
    // Initialize the map
    var map = L.map('map').setView([9.0820, 8.6753], 7);  // Approximate center of Nigeria and zoom level 7

    // Add a tile layer (you can choose a different provider)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    // Add markers or other map features as needed

</script>


@endpush
