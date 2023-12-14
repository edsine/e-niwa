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
                        <div class="row layout-top-spacing date-table-container">
                            @include('flash::message')

                            <div class="card col-md-10 widget box box-shadow mb-4">
                                <div class="widget-content widget-content-area">
                                    <div class="form-group row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="form-label" for="application_type">What are you applying
                                                for.?</label>
                                            <div class="form-group">
                                                <select class="form-control" id="application_type" name="application_type"
                                                    data-placeholder="click to select" required>
                                                    <option value=""></option>
                                                    <option value="right-of-way">Use of Right of Way
                                                    </option>
                                                    <option value="dredging-access-charge">Dredging
                                                        Access Charge/Reclamation</option>
                                                    <option value="waterway-operators-training">
                                                        Training and Certification of Waterway Operators
                                                    </option>
                                                    <option value="issue-control-licenses">Issue and
                                                        Control Licenses for Inland Navigation, Piers,
                                                        Jetties, Dockyards</option>
                                                    <option value="grant-licenses">Grant Licenses to
                                                        Private Inland Waterway Operators</option>
                                                    <option value="ferry-services">Ferry Services
                                                        within the Inland Waterways System</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="form-label" for="office_close_by">Area Offices Close to
                                                you</label>
                                            <div class="form-group">
                                                <select class="form-control" id="office_close_by" name="office_close_by"
                                                    data-placeholder="click to select" required>
                                                    <option value=""></option>

                                                    <option value="lagos">Lagos (Lagos AO)</option>
                                                    <option value="benue">Benue (Makurdi AO)</option>
                                                    <option value="kebbi">Kebbi (Yelwa AO)</option>
                                                    <option value="adamawa">Adamawa (Yola AO)</option>
                                                    <option value="niger">Niger (Baro Port, Minna AO)
                                                    </option>
                                                    <option value="bayelsa">Bayelsa (Yenagoa AO)
                                                    </option>
                                                    <option value="kano">Kano</option>
                                                    <option value="rivers">Rivers (Port Harcourt AO)
                                                    </option>
                                                    <option value="anambra">Anambra (Onitsha AO/RP)
                                                    </option>
                                                    <option value="ogun">Ogun (Abeokuta AO)</option>
                                                    <option value="cross-river">Cross River (Calabar
                                                        AO)</option>
                                                    <option value="sokoto">Sokoto (Sokoto AO)</option>
                                                    <option value="taraba">Taraba (Jalingo AO)</option>
                                                    <option value="kogi">Kogi (Lokoja AO)</option>
                                                    <option value="delta">Delta (Warri AO)</option>
                                                    <option value="kaduna">Kaduna (Kaduna AO)</option>
                                                    <option value="akwa-ibom">Akwa Ibom (Eket AO)
                                                    </option>
                                                    <option value="imo">Imo (Oguta AO)</option>
                                                    <option value="ondo">Ondo (Igbokoda AO)</option>
                                                </select>
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

                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <form class="nk-stepper stepper-init is-alter myFormClass" method="POST"
                                                action="{{ route('client_registration') }}" id="stepper-survey-v2">
                                                @csrf
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
                                                                <h5 class="title">Class of Applicant ?</h5>
                                                                <p>What is the purpose of your application</p>
                                                            </div>
                                                            <ul class="row g-3">
                                                                <li class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="applicant_class"
                                                                            id="applicant_class-pleasure" value="pleasure"
                                                                            required>
                                                                        <label class="custom-control-label"
                                                                            for="applicant_class-pleasure">
                                                                            <span
                                                                                class="d-flex flex-column text-center py-1 py-sm-2">
                                                                                <span class="icon-wrap xl">
                                                                                    <img class="img"
                                                                                        src="./images/icons/fornt-end-developer.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span
                                                                                    class="lead-text mb-1 mt-3">Pleasure</span>
                                                                                <span class="sub-text">Class A</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="applicant_class"
                                                                            id="applicant_class-domestic" value="domestic"
                                                                            required>
                                                                        <label class="custom-control-label"
                                                                            for="applicant_class-domestic">
                                                                            <span
                                                                                class="d-flex flex-column text-center py-1 py-sm-2">
                                                                                <span class="icon-wrap xl">
                                                                                    <img class="img"
                                                                                        src="./images/icons/ux-designer.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span
                                                                                    class="lead-text mb-1 mt-3">Domestic</span>
                                                                                <span class="sub-text">Class B.</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="applicant_class"
                                                                            id="applicant_class-community"
                                                                            value="community" required>
                                                                        <label class="custom-control-label"
                                                                            for="applicant_class-community">
                                                                            <span
                                                                                class="d-flex flex-column text-center py-1 py-sm-2">
                                                                                <span class="icon-wrap xl">
                                                                                    <img class="img"
                                                                                        src="./images/icons/freelancing-service.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span
                                                                                    class="lead-text mb-1 mt-3">Community</span>
                                                                                <span class="sub-text">Class C</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-6">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="applicant_class"
                                                                            id="applicant_class-commercial"
                                                                            value="commercial" required>
                                                                        <label class="custom-control-label"
                                                                            for="applicant_class-commercial">
                                                                            <span
                                                                                class="d-flex flex-column text-center py-1 py-sm-2">
                                                                                <span class="icon-wrap xl">
                                                                                    <img class="img"
                                                                                        src="./images/icons/freelancing-service.svg"
                                                                                        alt="">
                                                                                </span>
                                                                                <span
                                                                                    class="lead-text mb-1 mt-3">Commercial</span>
                                                                                <span class="sub-text">Class D</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="nk-stepper-step">
                                                            <div class="nk-stepper-step-head mb-4">
                                                                <h5 class="title">what are you applying for.?</h5>

                                                            </div>
                                                            <div class="row g-4">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="application_type">Select</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2"
                                                                                id="application_type"
                                                                                name="application_type"
                                                                                data-placeholder="click to select"
                                                                                required>
                                                                                <option value=""></option>
                                                                                <option value="right-of-way">Use of Right
                                                                                    of Way
                                                                                </option>
                                                                                <option value="dredging-access-charge">
                                                                                    Dredging
                                                                                    Access Charge/Reclamation</option>
                                                                                <option
                                                                                    value="waterway-operators-training">
                                                                                    Training and Certification of Waterway
                                                                                    Operators
                                                                                </option>
                                                                                <option value="issue-control-licenses">
                                                                                    Issue and
                                                                                    Control Licenses for Inland Navigation,
                                                                                    Piers,
                                                                                    Jetties, Dockyards</option>
                                                                                <option value="grant-licenses">Grant
                                                                                    Licenses to
                                                                                    Private Inland Waterway Operators
                                                                                </option>
                                                                                <option value="ferry-services">Ferry
                                                                                    Services
                                                                                    within the Inland Waterways System
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="office_close_by">Area
                                                                            Offices Close to you</label>
                                                                        <div class="form-control-wrap">
                                                                            <select class="form-select js-select2"
                                                                                id="office_close_by"
                                                                                name="office_close_by"
                                                                                data-placeholder="click to select"
                                                                                required>
                                                                                <option value=""></option>

                                                                                <option value="lagos">Lagos (Lagos AO)
                                                                                </option>
                                                                                <option value="benue">Benue (Makurdi AO)
                                                                                </option>
                                                                                <option value="kebbi">Kebbi (Yelwa AO)
                                                                                </option>
                                                                                <option value="adamawa">Adamawa (Yola AO)
                                                                                </option>
                                                                                <option value="niger">Niger (Baro Port,
                                                                                    Minna AO)
                                                                                </option>
                                                                                <option value="bayelsa">Bayelsa (Yenagoa
                                                                                    AO)
                                                                                </option>
                                                                                <option value="kano">Kano</option>
                                                                                <option value="rivers">Rivers (Port
                                                                                    Harcourt AO)
                                                                                </option>
                                                                                <option value="anambra">Anambra (Onitsha
                                                                                    AO/RP)
                                                                                </option>
                                                                                <option value="ogun">Ogun (Abeokuta AO)
                                                                                </option>
                                                                                <option value="cross-river">Cross River
                                                                                    (Calabar
                                                                                    AO)</option>
                                                                                <option value="sokoto">Sokoto (Sokoto AO)
                                                                                </option>
                                                                                <option value="taraba">Taraba (Jalingo AO)
                                                                                </option>
                                                                                <option value="kogi">Kogi (Lokoja AO)
                                                                                </option>
                                                                                <option value="delta">Delta (Warri AO)
                                                                                </option>
                                                                                <option value="kaduna">Kaduna (Kaduna AO)
                                                                                </option>
                                                                                <option value="akwa-ibom">Akwa Ibom (Eket
                                                                                    AO)
                                                                                </option>
                                                                                <option value="imo">Imo (Oguta AO)
                                                                                </option>
                                                                                <option value="ondo">Ondo (Igbokoda AO)
                                                                                </option>
                                                                            </select>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="nk-stepper-step">
                                                            <div class="nk-stepper-step-head mb-4">
                                                                <h5 class="title">Personal Info</h5>
                                                                <p>Basic information about you</p>
                                                            </div>
                                                            <div class="row g-3">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="last_name">Legal
                                                                            Last Name</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="last_name" name="last_name"
                                                                                placeholder="Last name" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="first_name">First
                                                                            of
                                                                            Given Name</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="first_name" name="first_name"
                                                                                placeholder="First name" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="other_name">Middle
                                                                            Name</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="other_name" name="other_name"
                                                                                placeholder="Other name">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="email">Email
                                                                            Address</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="email" name="email"
                                                                                placeholder="Email Address" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="password">Password</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="password" class="form-control"
                                                                                id="password" name="password"
                                                                                placeholder="Password" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="password_confirmation">Confirm
                                                                            Password</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="password" class="form-control"
                                                                                id="password_confirmation"
                                                                                name="password_confirmation"
                                                                                placeholder="Confirm Password" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Upload Your Letter of
                                                                            Intent</label>
                                                                        <span class="form-note mb-2">(Files accepted: .pdf.
                                                                            doc/docx - Max file size: 190k for demo
                                                                            limit)</span>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-file">
                                                                                <input type="file" multiple
                                                                                    class="form-file-input"
                                                                                    id="sv2-file-attachment"
                                                                                    name="letter_of_intent_file"
                                                                                    onchange="previewFile()">
                                                                                <label class="form-file-label"
                                                                                    for="sv2-file-attachment">Choose
                                                                                    files....</label>
                                                                            </div>
                                                                            <div class="preview-circle" id="file-preview">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-stepper-step">
                                                            <div class="nk-stepper-step-head mb-4">
                                                                <h5 class="title">Permanent Physical Mailing Address</h5>
                                                                {{-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> --}}
                                                            </div>



                                                            <div class="row g-3">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="street">Street &
                                                                            Number</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="street" name="street"
                                                                                placeholder="Street no/address" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="city">
                                                                            City</label>
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
                                                                            L.G.A</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="lga" name="lga"
                                                                                placeholder="Local governmaent Area"
                                                                                required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="state">State</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="state" name="state"
                                                                                placeholder="State" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="country">Country</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="country" name="country"
                                                                                placeholder="Country" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="phone_number">Phone
                                                                            No</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="phone_number" name="phone_number"
                                                                                placeholder="Phone number" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="alternate_phone_number">
                                                                            Alternative
                                                                            Phone No</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control"
                                                                                id="alternate_phone_number"
                                                                                name="alternate_phone_number"
                                                                                placeholder="Alternate number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="date_of_birth">Date
                                                                            of
                                                                            birth</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="date" class="form-control"
                                                                                id="date_of_birth" name="date_of_birth"
                                                                                placeholder="Date of Birth">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul
                                                            class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                            <li class="step-prev">
                                                                <button class="btn btn-dim btn-primary">Back</button>
                                                            </li>
                                                            <li class="step-next">
                                                                <button class="btn btn-primary">Continue</button>
                                                            </li>
                                                            <li class="step-submit">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                            </form>
                                        </div>
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
                                        <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-survey-v2">
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
                                                                    <label class="form-label" for="sv1-email-address">Email Address</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </li>
                                                            <li class="col-12">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Date of Site Inspection:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="col-12">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Inspection Officer:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Verification of Applicant's Stated Information:</h5>
                                                            <p>Tick as appropriate</p>
                                                        </div>
                                                        <div class="row g-4">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group flex-column align-start">
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-full" required>
                                                                                    <label class="custom-control-label" for="sv2-time-avilability-full">i</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-part" required>
                                                                                    <label class="custom-control-label" for="sv2-time-avilability-part">i</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-checkbox">
                                                                                    <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                                    <label class="custom-control-label" for="sv2-time-avilability-freelance">iii</label>
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
                                                                    <label class="form-label" for="sv1-email-address">i</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">ii</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">iii</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">iv</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">v</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">iv</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div> -->
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
                                                                        <label class="form-label" for="sv1-email-address">Date of Site Inspection:</label>
                                                                        <div class="form-control-wrap">
                                                                            <!-- <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required> -->
                                                                            <textarea class="form-control" placeholder="comments"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <div class="col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-last-name">RECOMMENDATIONS</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-last-name" name="sv1-last-name" placeholder="" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="sv1-email-address">JUSTIFICATION OF RECOMMENDATION</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Email Address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender </label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-male" value="gender-male" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-female" value="gender-female" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Upload Documents</label>
                                                                    <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" multiple class="form-file-input" id="sv2-file-attachment">
                                                                            <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
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
                                                                        <label class="form-label" for="sv1-email-address">Application Fee:</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">DREDGING/RECLAMATION Fee:</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">PENALTY FOR CONTRAVENTION of No. 13 of 1997  Fee:</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Shore Utilization</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Drilling</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Bridge Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Pipeline Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Utility Lines Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Under-water Engineering Works</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Erection of Temporary/Permanent Structures</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Mooring Facilities within the waterways</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Diversion of Water from Waterways </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Research </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Others </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        
                                                                
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender </label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-male" value="gender-male" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-female" value="gender-female" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Upload Documents</label>
                                                                    <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" multiple class="form-file-input" id="sv2-file-attachment">
                                                                            <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
        
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">FEES NOW DUE</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                           <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Application Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">DREDGING/RECLAMATION Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">PENALTY FOR CONTRAVENTION of No. 13 of 1997  Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Shore Utilization</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Drilling</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Bridge Crossing</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Pipeline Crossing</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Utility Lines Crossing</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        <!-- 
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Under-water Engineering Works</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Erection of Temporary/Permanent Structures</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Mooring Facilities within the waterways</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Diversion of Water from Waterways </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Research </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Others </label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        
                                                                
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender </label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-male" value="gender-male" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-female" value="gender-female" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Upload Documents</label>
                                                                    <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" multiple class="form-file-input" id="sv2-file-attachment">
                                                                            <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
        
        
                                                    
        
                                                    <div class="nk-stepper-step">
                                                        <div class="nk-stepper-step-head mb-4">
                                                            <h5 class="title">Continuation</h5>
                                                            <!-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> -->
                                                        </div>
                                                        <div class="row g-3">
                                                           <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Application Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">DREDGING/RECLAMATION Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">PENALTY FOR CONTRAVENTION of No. 13 of 1997  Fee:</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Shore Utilization</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        
                                                                <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Drilling</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Bridge Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Pipeline Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        
                                                                <!-- <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Utility Lines Crossing</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
        <!-- 
                                                                 <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div>
                                                                    </div>
                                                                </div>  -->
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Hydrographic/Seismic Surveys</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Under-water Engineering Works</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Erection of Temporary/Permanent Structures</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Mooring Facilities within the waterways</label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Diversion of Water from Waterways </label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Research </label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div>
        
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="form-label" for="sv1-email-address">Others </label>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="sv2-time-avilability" id="sv2-time-avilability-freelance" required>
                                                                            <label class="custom-control-label" for="sv2-time-avilability-freelance"></label>
                                                                        </div>
                                                                        {{-- <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="Amount" required>
                                                                        </div>
                                                                            <br>
                                                                        <div class="form-control-wrap">
                                                                            <input type="text" class="form-control" id="sv1-email-address" name="sv1-email-address" placeholder="RECIEPT NO" required>
                                                                        </div> --}}
                                                                    </div>
                                                                </div> 
        
                                                                
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Gender </label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-male" value="gender-male" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-male">Male</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="custom-control custom-radio">
                                                                                    <input type="radio" class="custom-control-input" name="sv2-gender" id="sv2-gender-female" value="gender-female" required>
                                                                                    <label class="custom-control-label" for="sv2-gender-female">Female</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                            
                                                            <!-- <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Upload Documents</label>
                                                                    <span class="form-note mb-2">( Files accepted: .pdf. doc/docx - Max file size: 190k for demo limit )</span>
                                                                    <div class="form-control-wrap">
                                                                        <div class="form-file">
                                                                            <input type="file" multiple class="form-file-input" id="sv2-file-attachment">
                                                                            <label class="form-file-label" for="sv2-file-attachment">Choose files....</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div>
                                                    </div>
        
                                                    
                                                </div>
                                                <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                    <li class="step-prev"><button class="btn btn-dim btn-primary">Back</button></li>
                                                    <li class="step-next"><button class="btn btn-primary">Continue</button></li>
                                                    <li class="step-submit"><button class="btn btn-primary">Submit</button></li>
                                                </ul>
                                            </div>
                                        </form>
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
                // Show the default form for all options except 'right-of-way'
                formRightOfWay.style.display = selectedOption === 'right-of-way' ? 'block' :
                    'none';

                // Show the second form only for 'dredging-access-charge' option
                formDredging.style.display = selectedOption === 'dredging-access-charge' ? 'block' : 'none';
            });
        });
    </script>
@endpush
