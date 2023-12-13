<header class="header navbar navbar-expand-sm">
    <ul class="navbar-item theme-brand flex-row  text-center">
        <li class="nav-item theme-logo">
            <a href="{{ url('/') }}">
                <img src="{{ url('assets/img/niwa_logo_main-no_bg.png') }}" class="navbar-logo" alt="logo">
            </a>
        </li>
        <li class="nav-item theme-text">
            <a href="{{ url('/') }}" class="nav-link"> E-NIWA </a>
        </li>
    </ul>
    <ul class="navbar-item flex-row ml-md-0 ml-auto">
        <li class="nav-item align-self-center search-animated">
            <i class="las la-search toggle-search"></i>
            <form class="form-inline search-full form-inline search" action="{{ url('/pages/search-result') }}" role="search">
                <div class="search-bar">
                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder=" {{__('Search here')}}">
                </div>
            </form>
        </li>

    </ul>
    <ul class="navbar-item flex-row ml-md-auto">
        <li class="nav-item dropdown  fullscreen-dropdown">
            <a class="nav-link night-light-mode"  href="javascript:void(0);">
                <i class="las la-moon"id="darkModeIcon"></i>
            </a>
        </li>
        <li class="nav-item dropdown fullscreen-dropdown d-none d-lg-flex">
            <a class="nav-link full-screen-mode" href="javascript:void(0);">
                <i class="las la-compress" id="fullScreenIcon"></i>
            </a>
        </li>
        <li class="nav-item dropdown message-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-envelope"></i>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="messageDropdown">
                <div class="nav-drop is-notification-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-black font-12 strong">{{ __('3 new mails') }}</span>
                            <a class="text-muted font-12" href="#">
                                {{ __('Mark all read') }}
                            </a>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            {{-- <a class="account-item">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ asset('assets/img/profile-11.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Jennifer Queen</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{__('Permission Required')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item marked-read">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-10.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Lara Smith</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{('Invoice needed')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item marked-read">
                                <div class="media">
                                    <div class="user-img">
                                        <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-9.jpg') }}" alt="profile">
                                    </div>
                                    <div class="media-body">
                                        <div class="">
                                            <h6 class="text-primary font-13 mb-0 strong">Victoria Williamson</h6>
                                            <p class="m-0 mt-1 font-10 text-muted">{{ __('Account need to be synced') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a> --}}
                            <hr class="account-divider">
                            <div class="text-center">
                                <a class="text-primary strong font-13" href="{{ url('/apps/email/inbox') }}">{{ __('View All') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown notification-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle position-relative" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="las la-bell"></i>
                <div class="blink">
                    <div class="circle"></div>
                </div>
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="notificationDropdown">
                <div class="nav-drop is-notification-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-black font-12 strong">{{ __('1 Notifications') }}</span>
                            <a class="text-muted font-12" href="#">
                                {{ __('Clear All') }}
                            </a>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a class="account-item" href="{{ url('/apps/ecommerce/orders') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-box font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('2 New Projects Created') }}</h6>
                                        <p class="m-0 mt-1 font-10 text-muted"> {{__('10 sec ago')}}</p>
                                    </div>
                                </div>
                            </a>

                            <hr class="account-divider">
                            <div class="text-center">
                                <a class="text-primary strong font-13" href="{{ url('/pages/notifications') }}"> {{__('View All')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown user-profile-dropdown">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <img src="{{ url('assets/img/profile-6.jpg') }}" alt="avatar">
            </a>
            <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                <div class="nav-drop is-account-dropdown" >
                    <div class="inner">
                        <div class="nav-drop-header">
                            <span class="text-primary font-15">{{ __('Welcome') }} Admin !</span>
                        </div>
                        <div class="nav-drop-body account-items pb-0">
                            <a id="profile-link"  class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <div class="media-left">
                                        <div class="image">
                                            <img class="rounded-circle avatar-xs" src="{{ url('assets/img/profile-6.jpg') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">Super Admin</h6>
                                        <small>Superadmin@eniwa.gov.ng</small>
                                    </div>
                                    <div class="media-right">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/profile') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-user font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong"> {{ __('My Account') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/pages/timeline') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-briefcase font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('My Activity') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item settings">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-cog font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('Settings') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <a class="account-item" href="{{ url('/authentications/style3/locked') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-lock font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong">{{ __('Lock Screen') }}</h6>
                                    </div>
                                </div>
                            </a>
                            <hr class="account-divider">
                            <a class="account-item" href="{{ url('/authentications/style1/login') }}">
                                <div class="media align-center">
                                    <div class="icon-wrap">
                                        <i class="las la-sign-out-alt font-20"></i>
                                    </div>
                                    <div class="media-content ml-3">
                                        <h6 class="font-13 mb-0 strong " href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</h6>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
    {{-- <ul class="navbar-item flex-row">
        <li class="nav-item dropdown header-setting">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle rightbarCollapse" data-placement="bottom">
                <i class="las la-sliders-h"></i>
            </a>
        </li>
    </ul> --}}
</header>
