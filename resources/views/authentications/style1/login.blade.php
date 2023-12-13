<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="E-NIWA">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."> --}}
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | E-NIWA</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?ver=3.2.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/dashlite.css?ver=3.2.2') }}">
</head>

<body class="nk-body npc-default pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                            <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                                <a href="#" class="toggle btn-white btn btn-icon btn-light"
                                    data-target="athPromo"><em class="icon ni ni-info"></em></a>
                            </div>
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-5">
                                    <a href="{{ url('html/index.html') }}" class="logo-link">
                                        <img class="logo-light logo-img logo-img-lg"
                                            src="{{ asset('assets/img/niwa_logo_main.png') }}" alt="logo">
                                        <img class="logo-dark logo-img logo-img-lg"
                                            src="{{ asset('assets/img/niwa_logo_main.png') }}" alt="logo-dark">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Sign-In</h5>
                                        <div class="nk-block-des">
                                            <p>Access the E-NIWA panel using your email and passcode.</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="email-address">Email or Username</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="#">Need
                                                Help?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" name="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus type="text"
                                                placeholder="{{ __('Email') }}"
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                required id="email-address"
                                                placeholder="Enter your email address or username">
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Passcode</label>
                                            <a class="link link-primary link-sm" tabindex="-1" href="{{ route('password.request') }}">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#"
                                                class="form-icon form-icon-right passcode-switch lg"
                                                data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input autocomplete="new-password" class="form-control form-control-lg"
                                                required id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" type="password"
                                                placeholder="{{ __('Password') }}">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div><!-- .form-group -->
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form><!-- form -->
                                <div class="form-note-s2 pt-4"> New on our platform? <a class="link-primary" href="{{ url('/client-registration') }}">Create an account</a>
                                </div>
                            </div><!-- .nk-block -->
                            <div class="nk-block nk-auth-footer">
                                <div class="nk-block-between">
                                    <ul class="nav nav-sm">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Terms & Condition</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Help</a>
                                        </li>
                                        <li class="nav-item dropup">
                                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                                data-bs-toggle="dropdown"
                                                data-offset="0,10"><small>English</small></a>
                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img
                                                                src="{{ asset('assets/frontend/images/flags/english.png') }}">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img
                                                                src="{{ asset('assets/frontend/images/flags/spanish.png') }}">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img
                                                                src="{{ asset('assets/frontend/images/flags/french.png') }}">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img
                                                                src="{{ asset('assets/frontend/images/flags/turkey.png') }}">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul><!-- .nav -->
                                </div>
                                <div class="mt-3">
                                    <p>&copy; 2023 NIWA. All Rights Reserved.</p>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-split-content -->
                        <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right"
                            data-toggle-body="true" data-content="athPromo" data-toggle-screen="lg"
                            data-toggle-overlay="true">
                            <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                                <div class="slider-init" data-slick='{"dots":true, "arrows":false}'>
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round"
                                                    src="{{ asset('assets/images/sliders/nigw.jpeg') }}"
                                                    {{-- srcset="{{ asset('images/slides/promo-a2x.png') }} 2x" --}} alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>E-NIWA</h4>
                                                <p>ENIWA is the Electronic Register Information System of the National Inland Waterways Authority (NIWA) in Nigeria. It is a platform for vessel e-registration and management.</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round"
                                                    src="{{ asset('assets/images/sliders/inl.jpg') }}"
                                                     alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>How to use ENIWA

                                                </h4>
                                                <p>To use ENIWA, simply create an account and register your vessel. You can then access a variety of features, including: Track vessel movements
,View your vessel registration details
</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-feature nk-feature-center">
                                            <div class="nk-feature-img">
                                                <img class="round"
                                                    src="{{ asset('assets/images/sliders/dsh.png') }}"
                                                   alt="">
                                            </div>
                                            <div class="nk-feature-content py-4 p-sm-5">
                                                <h4>ENIWA: The future of vessel registration and management in Nigeria</h4>
                                                <p>ENIWA is a modern and innovative platform that is transforming the way vessel registration and management is done in Nigeria. By providing a fast, efficient, and transparent system,</p>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div><!-- .slider-init -->
                                <div class="slider-dots"></div>
                                <div class="slider-arrows"></div>
                            </div><!-- .slider-wrap -->
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/frontend/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js?ver=3.2.2"') }}"></script>
    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/arg.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/aus.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/bangladesh.png') }}"
                                        alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/canada.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/china.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/french.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/germany.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/iran.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/italy.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/mexico.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/philipine.png') }}"
                                        alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/portugal.png') }}"
                                        alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/s-africa.png') }}"
                                        alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/spanish.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/switzerland.png') }}"
                                        alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/uk.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="{{ asset('assets/frontend/images/flags/english.png') }}" alt=""
                                        class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->

</html>
