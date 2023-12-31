@extends('layout.master-auth')

@push('plugin-styles')
    {!! Html::style('assets/css/loader.css') !!}
    {!! Html::style('plugins/owl-carousel/owl.carousel.min.css') !!}
    {!! Html::style('plugins/owl-carousel/owl.theme.default.min.css') !!}
    {!! Html::style('assets/css/authentication/auth_1.css') !!}
@endpush

@section('content')
    <!-- Main Body Starts -->
    <div class="forget-one" onload="Captcha();">
        <div class="container-fluid login-one-container">
            <div class="p-30 h-100">
                <div class="row login-one-container h-100">
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 p-0">
                        <div class="login-one-start">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h6 class="mt-2 text-primary text-center font-20">{{ __('Sign Up') }}</h6>
                                <p class="text-center text-muted mt-3 mb-3 font-14">
                                    {{ __('Fill up and create an account') }}</p>
                                <div class="login-one-inputs mt-5">
                                    <input placeholder="{{ __('Email') }}" id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" />
                                    <i class="las la-envelope"></i>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="login-one-inputs mt-3">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                                    <i class="las la-lock"></i>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="login-one-inputs mt-3">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                    <i class="las la-lock"></i>                                    
                                </div>


                                {{-- <div class="capt mt-3">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="captcha">
                                            <h2 type="text" id="mainCaptcha"></h2>
                                        </div>
                                        <a class="text-primary font-25 ml-3 pointer" title="Change Captcha">
                                            <i class="las la-sync-alt" id="refresh" onclick="Captcha();"></i>
                                        </a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <div class="login-one-inputs mr-3">
                                            <input type="text" id="txtInputCaptcha"
                                                placeholder="{{ __('Enter Captcha') }}" />
                                            <i class="las la-robot"></i>
                                        </div>
                                        <input class="btn btn-sm btn-primary" id="Button1" type="button" value="Check"
                                            onclick="ValidCaptcha();" />
                                        <i class="lar la-check-circle captcha-check text-success-teal font-25 "
                                            id="checkMark"></i>
                                    </div>
                                </div> --}}
                                <div class="login-one-inputs mt-5 check">
                                    <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" />
                                    <label class="cbx" for="cbx"><span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg></span><span class="font-13">{{ __('I agree to the') }} <a
                                                class="text-primary" href="pages_privacy_policy.html"
                                                target="_blank">{{ __('terms and policies') }}</a></span></label>
                                </div>
                                <div class="login-one-inputs mt-4">
                                    <button class="ripple-button ripple-button-primary btn-lg btn-login" type="submit">
                                        <div class="ripple-ripple js-ripple">
                                            <span class="ripple-ripple__circle"></span>
                                        </div>
                                        {{ __('Create Account') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 col-md-6 d-none d-md-block p-0">
                        <div class="slider-half">
                            <div class="slide-content">
                                <div class="top-sign-up ">
                                    <div class="about-comp text-white mt-2">{{ __('E-NIWA') }}</div>
                                    <div class="for-sign-up">
                                        <p class="text-white font-12 mt-2 font-weight-300">
                                            {{ __('Already have an account ?') }}</p>
                                        <a href="{{ url('/authentications/style1/login') }}">{{ __('Login') }}</a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <i class="lar la-grin-alt font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{ __('Welcome to ENIWA') }}</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text">
                                            {{ __('ENIWA is the Electronic Register Information System of the National Inland Waterways Authority (NIWA) in Nigeria. It is a platform for vessel e-registration and management.') }}
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="lar la-clock font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{ __('
                                            Simplify Your Vessel Registration with ENIWA') }}</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text">
                                            {{ __('Experience faster processing, reduced paperwork, and enhanced security when you register your vessel with ENIWA. Enjoy improved transparency, accountability, and valuable features like vessel tracking and reporting.') }}
                                        </p>
                                    </div>
                                    <div class="item">
                                        <i class="las la-hand-holding-usd font-45 text-white"></i>
                                        <h2 class="font-30 text-white mt-2">{{ __('') }}Register Your Vessel with ENIWA: Quick & Easy</h2>
                                        <p class="summary-count text-white font-12 mt-2 slide-text">
                                            {{ __('Create an account, fill out the online application, and upload required documents. Its that simple to experience a modern and efficient vessel registration system with ENIWA.') }}
                                        </p>
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
    {!! Html::script('assets/js/loader.js') !!}
    {!! Html::script('assets/js/libs/jquery-3.6.0.min.js') !!}
    {!! Html::script('plugins/owl-carousel/owl.carousel.min.js') !!}
    {!! Html::script('plugins/owl-carousel/owl.carousel.js') !!}
    {!! Html::script('plugins/bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/authentication/auth_1.js') !!}
@endpush

@push('custom-scripts')
@endpush
