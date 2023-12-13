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
                                <li class="breadcrumb-item active" aria-current="page"><span> {{ __('Applications') }}</span>
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
                                            {!! Form::open([
                                                'route' => 'users.store',
                                                'class' => 'needs-validation was-validated',
                                                'action' => 'javascript:void(0);',
                                            ]) !!}
                                            @include('applications.fields')
                                            {!! Form::submit('Save', ['class' => 'float-right btn btn-primary mt-3']) !!}
                                            <a class="float-right btn btn-default mr-3 mt-3"
                                                href="{{ route('users.index') }}" type="submit">Cancel</a>
                                            {!! Form::close() !!}
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {!! Form::open([
                                                'route' => 'users.store',
                                                'class' => 'needs-validation was-validated',
                                                'action' => 'javascript:void(0);',
                                            ]) !!}
                                            @include('applications.fields')
                                            {!! Form::submit('Save', ['class' => 'float-right btn btn-primary mt-3']) !!}
                                            <a class="float-right btn btn-default mr-3 mt-3"
                                                href="{{ route('users.index') }}" type="submit">Cancel</a>
                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card col-md-10 widget box box-shadow mb-4  form-dredging">
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
                                            {!! Form::open([
                                                'route' => 'users.store',
                                                'class' => 'needs-validation was-validated',
                                                'action' => 'javascript:void(0);',
                                            ]) !!}
                                            @include('applications.fields')
                                            {!! Form::submit('Save', ['class' => 'float-right btn btn-primary mt-3']) !!}
                                            <a class="float-right btn btn-default mr-3 mt-3"
                                                href="{{ route('users.index') }}" type="submit">Cancel</a>
                                            {!! Form::close() !!}
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            {!! Form::open([
                                                'route' => 'users.store',
                                                'class' => 'needs-validation was-validated',
                                                'action' => 'javascript:void(0);',
                                            ]) !!}
                                            @include('applications.fields')
                                            {!! Form::submit('Save', ['class' => 'float-right btn btn-primary mt-3']) !!}
                                            <a class="float-right btn btn-default mr-3 mt-3"
                                                href="{{ route('users.index') }}" type="submit">Cancel</a>
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

                // Show the default form for all options except 'dredging-access-charge'
                formRightOfWay.style.display = selectedOption !== 'dredging-access-charge' ? 'block' :
                    'none';

                // Show the second form only for 'dredging-access-charge' option
                formDredging.style.display = selectedOption === 'dredging-access-charge' ? 'block' : 'none';
            });
        });
    </script>
@endpush
