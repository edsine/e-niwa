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
                                <li class="breadcrumb-item"><a href="javascript:void(0);"> {{ __('Dashboards') }}</a></li>
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
        <div class="layout-top-spacing mb-2">
            <div class="col-md-12">
                <div class="row">
                    <div class="container p-0">
                        <div class="row layout-top-spacing date-table-container">
                            <!-- BASIC -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Basic') }}</h4>
                                    <div class="table-responsive mb-4">
                                        <table id="basic-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th class="no-content"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Rhona Davidson') }}</td>
                                                    <td>{{ __('Integration Specialist') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('55') }}</td>
                                                    <td>{{ __('2010/10/14') }}</td>
                                                    <td>{{ __('$327,900') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Colleen Hurst') }}</td>
                                                    <td>{{ __('Javascript Developer') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('39') }}</td>
                                                    <td>{{ __('2009/09/15') }}</td>
                                                    <td>{{ __('$205,500') }}</td>
                                                    <td><a href="#" title="{__('Hi')}}Edit"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Sonya Frost') }}</td>
                                                    <td>{{ __('Software Engineer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('23') }}</td>
                                                    <td>{{ __('2008/12/13') }}</td>
                                                    <td>{{ __('$103,600') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Rhona Davidson') }}</td>
                                                    <td>{{ __('Integration Specialist') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('55') }}</td>
                                                    <td>{{ __('2010/10/14') }}</td>
                                                    <td>{{ __('$327,900') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Colleen Hurst') }}</td>
                                                    <td>{{ __('Javascript Developer') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('39') }}</td>
                                                    <td>{{ __('2009/09/15') }}</td>
                                                    <td>{{ __('$205,500') }}</td>
                                                    <td><a href="#" title="{__('Hi')}}Edit"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Sonya Frost') }}</td>
                                                    <td>{{ __('Software Engineer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('23') }}</td>
                                                    <td>{{ __('2008/12/13') }}</td>
                                                    <td>{{ __('$103,600') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Herrod Chandler') }}</td>
                                                    <td>{{ __('Sales Assistant') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('59') }}</td>
                                                    <td>{{ __('2012/08/06') }}</td>
                                                    <td>{{ __('$137,500') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Rhona Davidson') }}</td>
                                                    <td>{{ __('Integration Specialist') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('55') }}</td>
                                                    <td>{{ __('2010/10/14') }}</td>
                                                    <td>{{ __('$327,900') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Colleen Hurst') }}</td>
                                                    <td>{{ __('Javascript Developer') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('39') }}</td>
                                                    <td>{{ __('2009/09/15') }}</td>
                                                    <td>{{ __('$205,500') }}</td>
                                                    <td><a href="#" title="{__('Hi')}}Edit"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Sonya Frost') }}</td>
                                                    <td>{{ __('Software Engineer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('23') }}</td>
                                                    <td>{{ __('2008/12/13') }}</td>
                                                    <td>{{ __('$103,600') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable with a dropdown -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Basic with a dropdown') }}</h4>
                                    <div class="table-responsive mb-4">
                                        <table id="dropdown-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th class="no-content"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Airi Satou') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Brielle Williamson') }}</td>
                                                    <td>{{ __('Integration Specialist') }}</td>
                                                    <td>{{ __('New York') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2012/12/02') }}</td>
                                                    <td>{{ __('$372,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Caesar Vance') }}</td>
                                                    <td>{{ __('Pre-Sales Support') }}</td>
                                                    <td>{{ __('New York') }}</td>
                                                    <td>{{ __('21') }}</td>
                                                    <td>{{ __('2011/12/12') }}</td>
                                                    <td>{{ __('$106,450') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Angelica Ramos') }}</td>
                                                    <td>{{ __('Chief Executive Officer (CEO)') }}</td>
                                                    <td>{{ __('London') }}</td>
                                                    <td>{{ __('47') }}</td>
                                                    <td>{{ __('2009/10/09') }}</td>
                                                    <td>{{ __('$1,200,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Gavin Joyce') }}</td>
                                                    <td>{{ __('Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('42') }}</td>
                                                    <td>{{ __('2010/12/22') }}</td>
                                                    <td>{{ __('$92,575') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Hi') }}Edit</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Hi') }}Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Jennifer Chang') }}</td>
                                                    <td>{{ __('Regional Director') }}</td>
                                                    <td>{{ __('Singapore') }}</td>
                                                    <td>{{ __('28') }}</td>
                                                    <td>{{ __('2010/11/14') }}</td>
                                                    <td>{{ __('$357,650') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Hi') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable go to last page -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Go to last page of the datatable') }}</h4>
                                    <div class="table-responsive mb-4">
                                        <table id="last-page-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th class="no-content"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}63</td>
                                                    <td>v2011/07/25</td>
                                                    <td>v$170,750</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Airi Satou') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Brielle Williamson') }}</td>
                                                    <td>{{ __('Integration Specialist') }}</td>
                                                    <td>{{ __('New York') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2012/12/02') }}</td>
                                                    <td>{{ __('$372,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Caesar Vance') }}</td>
                                                    <td>{{ __('Pre-Sales Support') }}</td>
                                                    <td>{{ __('New York') }}</td>
                                                    <td>v21</td>
                                                    <td>v2011/12/12</td>
                                                    <td>{{ __('$106,450') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Angelica Ramos') }}</td>
                                                    <td>{{ __('Chief Executive Officer (CEO)') }}</td>
                                                    <td>{{ __('London') }}</td>
                                                    <td>{{ __('47') }}</td>
                                                    <td>{{ __('2009/10/09') }}</td>
                                                    <td>{{ __('$1,200,000') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Gavin Joyce') }}</td>
                                                    <td>{{ __('Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('42') }}</td>
                                                    <td>{{ __('2010/12/22') }}</td>
                                                    <td>{{ __('$92,575') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Jennifer Chang') }}</td>
                                                    <td>{{ __('Regional Director') }}</td>
                                                    <td>{{ __('Singapore') }}</td>
                                                    <td>{{ __('28') }}</td>
                                                    <td>{{ __('2010/11/14') }}</td>
                                                    <td>{{ __('$357,650') }}</td>
                                                    <td class="text-center">
                                                        <div class="dropdown custom-dropdown">
                                                            <a class="dropdown-toggle font-20 text-primary" href="#"
                                                                role="button" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false">
                                                                <i class="las la-cog"></i>
                                                            </a>
                                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1"
                                                                style="will-change: transform;">
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Edit') }}</a>
                                                                <a class="dropdown-item"
                                                                    href="javascript:void(0);">{{ __('Delete') }}</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable range search -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Custom filtering - Range Searchs') }}</h4>
                                    <div class="table-responsive mb-4">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Minimum age:') }}</td>
                                                    <td><input type="text" id="min" class="form-control"
                                                            name="min"></td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Maximum age:') }}</td>
                                                    <td><input type="text" id="max" class="form-control"
                                                            name="max"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table id="range-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th class="no-content"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable with export options -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Hi') }}Export Datatable</h4>
                                    <div class="table-responsive mb-4">
                                        <table id="export-dt" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th class="no-content"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                    <td><a href="#" title="{{ __('Edit') }}"
                                                            class="font-20 text-primary"><i class="las la-edit"></i></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable single column searching -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Single column search') }}</h4>
                                    <div class="table-responsive mb-4">
                                        <table id="single-column-search" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('Hi') }}$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Airi Satou') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}33</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Hi') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Datatable show/hide column -->
                            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                                <div class="widget-content widget-content-area br-6">
                                    <h4 class="table-header">{{ __('Toggle Column') }}</h4>
                                    <div class="toggle-list">
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="0">{{ __('Name') }}</a>
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="1">{{ __('Hi') }}</a>
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="2">{{ __('Office') }}</a>
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="3">{{ __('Age') }}</a>
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="4">{{ __('Start date') }}</a>
                                        <a class="btn btn-primary toggle-btn mb-4 mr-2"
                                            data-column="5">{{ __('Salary') }}</a>
                                    </div>
                                    <div class="table-responsive mb-4">
                                        <table id="toggle-column" class="table table-hover" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('Hi') }}$433,060</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Airi Satou') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}33</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Tiger Nixon') }}</td>
                                                    <td>{{ __('System Architect') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('61') }}</td>
                                                    <td>{{ __('2011/04/25') }}</td>
                                                    <td>{{ __('$320,800') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Garrett Winters') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('63') }}</td>
                                                    <td>{{ __('2011/07/25') }}</td>
                                                    <td>{{ __('$170,750') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Ashton Cox') }}</td>
                                                    <td>{{ __('Junior Technical Author') }}</td>
                                                    <td>{{ __('San Francisco') }}</td>
                                                    <td>{{ __('66') }}</td>
                                                    <td>{{ __('2009/01/12') }}</td>
                                                    <td>{{ __('$86,000') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Cedric Kelly') }}</td>
                                                    <td>{{ __('Senior Javascript Developer') }}</td>
                                                    <td>{{ __('Edinburgh') }}</td>
                                                    <td>{{ __('22') }}</td>
                                                    <td>{{ __('2012/03/29') }}</td>
                                                    <td>{{ __('$433,060') }}</td>
                                                </tr>
                                                <tr>
                                                    <td>{{ __('Hi') }}</td>
                                                    <td>{{ __('Accountant') }}</td>
                                                    <td>{{ __('Tokyo') }}</td>
                                                    <td>{{ __('33') }}</td>
                                                    <td>{{ __('2008/11/28') }}</td>
                                                    <td>{{ __('$162,700') }}</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>{{ __('Name') }}</th>
                                                    <th>{{ __('Position') }}</th>
                                                    <th>{{ __('Office') }}</th>
                                                    <th>{{ __('Age') }}</th>
                                                    <th>{{ __('Start date') }}</th>
                                                    <th>{{ __('Salary') }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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

@push('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#basic-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5, 10, 15, 20],
                "pageLength": 5
            });
            $('#dropdown-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5, 10, 15, 20],
                "pageLength": 5
            });
            $('#last-page-dt').DataTable({
                "pagingType": "full_numbers",
                "language": {
                    "paginate": {
                        "first": "<i class='las la-angle-double-left'></i>",
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>",
                        "last": "<i class='las la-angle-double-right'></i>"
                    }
                },
                "lengthMenu": [3, 6, 9, 12],
                "pageLength": 3
            });
            $.fn.dataTable.ext.search.push(
                function(settings, data, dataIndex) {
                    var min = parseInt($('#min').val(), 10);
                    var max = parseInt($('#max').val(), 10);
                    var age = parseFloat(data[3]) || 0; // use data for the age column
                    if ((isNaN(min) && isNaN(max)) ||
                        (isNaN(min) && age <= max) ||
                        (min <= age && isNaN(max)) ||
                        (min <= age && age <= max)) {
                        return true;
                    }
                    return false;
                }
            );
            var table = $('#range-dt').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5, 10, 15, 20],
                "pageLength": 5
            });
            $('#min, #max').keyup(function() {
                table.draw();
            });
            $('#export-dt').DataTable({
                dom: '<"row"<"col-md-6"B><"col-md-6"f> ><""rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>>',
                buttons: {
                    buttons: [{
                            extend: 'copy',
                            className: 'btn btn-primary'
                        },
                        {
                            extend: 'csv',
                            className: 'btn btn-primary'
                        },
                        {
                            extend: 'excel',
                            className: 'btn btn-primary'
                        },
                        {
                            extend: 'pdf',
                            className: 'btn btn-primary'
                        },
                        {
                            extend: 'print',
                            className: 'btn btn-primary'
                        }
                    ]
                },
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [7, 10, 20, 50],
                "pageLength": 7
            });
            // Add text input to the footer
            $('#single-column-search tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder="Search ' + title +
                    '" />');
            });
            // Generate Datatable
            var table = $('#single-column-search').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5, 10, 15, 20],
                "pageLength": 5
            });
            // Search
            table.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
            var table = $('#toggle-column').DataTable({
                "language": {
                    "paginate": {
                        "previous": "<i class='las la-angle-left'></i>",
                        "next": "<i class='las la-angle-right'></i>"
                    }
                },
                "lengthMenu": [5, 10, 15, 20],
                "pageLength": 5
            });
            $('a.toggle-btn').on('click', function(e) {
                e.preventDefault();
                // Get the column API object
                var column = table.column($(this).attr('data-column'));
                // Toggle the visibility
                column.visible(!column.visible());
                $(this).toggleClass("toggle-clicked");
            });
        });
    </script>
@endpush
