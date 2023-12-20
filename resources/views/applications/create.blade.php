@section('content')
    @extends('layout.master')

    @push('plugin-styles')
        <link rel="stylesheet" href="{{ asset('assets/css/loader.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/apex/apexcharts.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/dashboard/dashboard_1.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/flatpickr/flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/flatpickr/custom-flatpickr.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/elements/tooltip.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?ver=3.2.2') }}">
        <link rel="stylesheet" href="{{ asset('assets/frontend/css/dashlite.css?ver=3.2.2') }}">
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
                                <li class="breadcrumb-item active" aria-current="page"><span>
                                        {{ __('Applications') }}</span>
                                <li class="breadcrumb-item active" aria-current="page"><span> {{ __('Create') }}</span>
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
                        <form class="nk-stepper stepper-init is-alter myFormClass" method="POST"
                            action="{{ route('client_registration') }}" id="stepper-survey-v2">
                            @csrf
                            <div class="row layout-top-spacing date-table-container">
                                @include('flash::message')


                                <div class="card col-md-10 widget box box-shadow mb-4">
                                    <div class="widget-content widget-content-area">
                                        <div class="form-group row">
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <label class="form-label" for="application_type">What are you applying
                                                    for.?</label>
                                                <div class="form-group">
                                                    <select class="form-control" id="application_type"
                                                        name="application_type" data-placeholder="click to select" required>
                                                        <option value=""></option>
                                                        @foreach (payment_services() as $key => $service)
                                                            @if ($key == 'niwa-act-tariff-dues')
                                                                @continue
                                                            @endif
                                                            <option value="{{ $key }}">{{ $service }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card col-md-10 widget box box-shadow mb-4  form-right-of-way">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>All Major Options Form</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-progress stepper-progress mb-4">
                                                    <div class="stepper-progress-count mb-2"></div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar stepper-progress-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">REGISTRATION FORM</h5>
                                                            <p>BOAT SKIPPERS TRAINING FOR ALL POWER BOAT AND RIB MASTER</p>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="lastname">
                                                                        Last Name
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="lname" name="lname"
                                                                            placeholder="Last Name" required>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="middlename">
                                                                        Middle Name
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="midname" name="midname"
                                                                            placeholder="midname" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="firstname">
                                                                        First Name
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="firstname" name="firstname"
                                                                            placeholder="firstname" required>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="email">
                                                                        Email
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="email" class="form-control"
                                                                            id="email" name="email"
                                                                            placeholder="Email" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Permanent Physical Mailing Address</h5>
                                                        </div>
                                                        <div class="row g-4">


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="streetno">
                                                                        Street and Number
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="streetno" name="streetno"
                                                                            placeholder="Street Number" required>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="city">
                                                                        City
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="city" name="city"
                                                                            placeholder="City" required>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="lga">
                                                                        LGA
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="lga" name="lga"
                                                                            placeholder="Local Government Area" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="state">
                                                                        State
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="state" name="state"
                                                                            placeholder="State" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="country">
                                                                        Country
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="country" name="country"
                                                                            placeholder="Country" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phoneno">
                                                                        Phone No.
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="phoneno" name="phoneno"
                                                                            placeholder="Phone Number" required>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            {{-- <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="middlename">
                                                                        Phone No.
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="email" name="email"
                                                                            placeholder="state" required>
                                                                    </div>
                                                                </div>
                                                            </div> --}}

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="alternativenumber">
                                                                        Alternative Number
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="alternativenumber" name="alternativenumber"
                                                                            placeholder="Alternative Number" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="dob">
                                                                        Date Of Birth
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="date" class="form-control"
                                                                            id="email" name="dob"
                                                                            placeholder="Month/Day/Year" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="eyecolor">
                                                                        Eye Color
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="eyecolor" name="eyecolor"
                                                                            placeholder="Eye Color" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="citizenship">
                                                                        Citizenship
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="citizenship" name="citizenship"
                                                                            placeholder="Citizenship" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="languages">
                                                                        Languages
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="languages" name="languages"
                                                                            placeholder="Languages" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="facialmarks">
                                                                        Facial /Trbal Marks
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="facialmarks" name="facialmarks"
                                                                            placeholder="Facial/Tribal Marks" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="passportno">
                                                                        Passport No/ National Identification No
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="passportno" name="passportno"
                                                                            placeholder="Passport/NIN" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Boat Driving Experience</h5>
                                                            <p>Basic information about you</p>
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="drivenBefore">
                                                                        Have You driven a Boat Before?
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="drivenBefore" name="drivenBefore"
                                                                            placeholder="Driven A Boat Before" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="howLong">
                                                                        if Yes, How long
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="howLong" name="howLong"
                                                                            placeholder="How long" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="boatType">
                                                                        Type of Boat
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="boatType" name="boatType"
                                                                            placeholder="Type of Boat" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="boatCapacity">
                                                                        Capacity Of Boat
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="boatCapacity" name="boatCapacity"
                                                                            placeholder="Boat capacity" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Membership of Approved Union & Jetties/Boat
                                                                Clubs</h5>
                                                        </div>
                                                        <div class="row g-3">

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="nameofunion">
                                                                        Name of Union /Association
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="nameofunion" name="nameofunion"
                                                                            placeholder="Name of Union /Association" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="jettyname">
                                                                        Name Of Jetty
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="" name=""
                                                                            placeholder="Name of Jetty" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="nameofboatclub">
                                                                        Name Of Boat Club
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="nameofboatclub" name="nameofboatclub"
                                                                            placeholder="Name of boat Club" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="dateSubmitted">
                                                                        Date this document submitted:
                                                                    </label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="dateSubmitted" name="Date Submitted"
                                                                            placeholder="Date this document submitted" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                <li class="step-prev">
                                                    <button class="btn btn-dim btn-primary">Back</button>
                                                </li>
                                                <li class="step-next">
                                                    <button class="btn btn-primary">Continue</button>
                                                </li>
                                                <li class="step-submit">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card col-md-10 widget box box-shadow mb-4 form-dredging">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Dredging Form</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-progress stepper-progress mb-4">
                                                    <div class="stepper-progress-count mb-2"></div>
                                                    <div class="progress progress-md">
                                                        <div class="progress-bar stepper-progress-bar"></div>
                                                    </div>
                                                </div>
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">FOR OFFICE USE ONLY</h5>
                                                            <p>Prelinnary Reqisition Form</p>
                                                        </div>
                                                        <ul class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Email
                                                                        Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </li>
                                                            <li class="col-12">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="sv1-email-address">Date of
                                                                            Site
                                                                            Inspection:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="sv1-email-address"
                                                                                name="sv1-email-address" placeholder=""
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="col-12">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="sv1-email-address">Inspection
                                                                            Officer:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="sv1-email-address"
                                                                                name="sv1-email-address" placeholder=""
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Verification of Applicant's Stated
                                                                Information:</h5>
                                                            <p>Tick as appropriate</p>
                                                        </div>
                                                        <div class="row g-4">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <ul
                                                                            class="custom-control-group flex-column align-start">
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="sv2-time-avilability"
                                                                                        id="sv2-time-avilability-full"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="sv2-time-avilability-full">i</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="sv2-time-avilability"
                                                                                        id="sv2-time-avilability-part"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="sv2-time-avilability-part">i</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="sv2-time-avilability"
                                                                                        id="sv2-time-avilability-freelance"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="sv2-time-avilability-freelance">iii</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">OBSERVATIONS:</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-4">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">i</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">ii</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">iii</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">iv</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">v</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">COMMENTS</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">Date
                                                                        of Site Inspection:</label>
                                                                    <div class="form-control-wrap">
                                                                        <!-- <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required> -->
                                                                        <textarea class="form-control" placeholder="comments"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-last-name">RECOMMENDATIONS</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-last-name" name="sv1-last-name"
                                                                            placeholder="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">JUSTIFICATION OF
                                                                        RECOMMENDATION</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="sv1-email-address"
                                                                            name="sv1-email-address" placeholder=""
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">FEES NOW DUE</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Application
                                                                        Fee:</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">DREDGING/RECLAMATION
                                                                        Fee:</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">PENALTY FOR
                                                                        CONTRAVENTION
                                                                        of No. 13 of 1997 Fee:</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Shore
                                                                        Utilization</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">FEES NOW DUE</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Drilling</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Bridge
                                                                        Crossing</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Pipeline
                                                                        Crossing</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Utility
                                                                        Lines
                                                                        Crossing</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Continuation</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Hydrographic/Seismic
                                                                        Surveys</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Under-water
                                                                        Engineering
                                                                        Works</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Erection of
                                                                        Temporary/Permanent Structures</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Mooring
                                                                        Facilities
                                                                        within
                                                                        the waterways</label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Diversion of
                                                                        Water
                                                                        from
                                                                        Waterways </label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Research
                                                                    </label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="sv1-email-address">Others
                                                                    </label>
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input"
                                                                            name="sv2-time-avilability"
                                                                            id="sv2-time-avilability-freelance" required>
                                                                        <label class="custom-control-label"
                                                                            for="sv2-time-avilability-freelance"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                <li class="step-prev"><button
                                                        class="btn btn-dim btn-primary">Back</button>
                                                </li>
                                                <li class="step-next"><button class="btn btn-primary">Continue</button>
                                                </li>
                                                <li class="step-submit"><button class="btn btn-primary">Submit</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
    <script src="{{ asset('assets/frontend/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js?ver=3.2.2') }}"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const applicationTypeSelect = document.getElementById('application_type');
            const formRightOfWay = document.querySelector('.form-right-of-way');
            const formDredging = document.querySelector('.form-dredging');

            // Initially hide both forms
            formRightOfWay.style.display = 'none';
            formDredging.style.display = 'none';

            applicationTypeSelect.addEventListener('change', function() {
                const selectedOption = applicationTypeSelect.value;

                console.log(selectedOption);
                if (selectedOption == 'dredging-access-charge' || selectedOption ==
                    'dredging-reclamation') {
                    formDredging.style.display = 'block';
                    formRightOfWay.style.display = 'none';
                } else {
                    formDredging.style.display = 'none';
                    formRightOfWay.style.display = 'block';
                }
            });
        });
    </script>
@endpush
