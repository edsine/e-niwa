<nav id="sidebar">
    <ul class="list-unstyled menu-categories" id="accordionExample">
        {{-- <li class="menu">
            <a href="#dashboard" data-active="{{ is_active_route(['dashboard/*']) }}" data-toggle="collapse"
                aria-expanded="{{ is_active_route(['dashboard/*']) }}" class="dropdown-toggle">
                <div class="">
                    <i class="las la-home"></i>
                    <span>{{ __('Dashboards') }}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="submenu list-unstyled collapse {{ show_class(['dashboard/*']) }}" id="dashboard"
                data-parent="#accordionExample">
                <li class=" {{ active_class(['dashboards/documentation-reports']) }}">
                    <a data-active="{{ is_active_route(['dashboards/documentation-reports']) }}"
                        href="{{ url('/dashboards/documentation-reports') }}"> {{ __('D & R Dashboard') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/environment-monitoring']) }}">
                    <a data-active="{{ is_active_route(['dashboards/environment-monitoring']) }}"
                        href="{{ url('/dashboards/environment-monitoring') }}"> {{ __('Environment Monitoring') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/equipment-monitoring']) }}">
                    <a data-active="{{ is_active_route(['dashboards/equipment-monitoring']) }}"
                        href="{{ url('/dashboards/equipment-monitoring') }}"> {{ __('Equipment Monitoring') }} </a>
                <li class=" {{ active_class(['dashboards/map']) }}">
                    <a data-active="{{ is_active_route(['dashboards/map']) }}" href="{{ url('/dashboards/map') }}">
                        {{ __('Map Dashboard') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/dredging-activities']) }}">
                    <a data-active="{{ is_active_route(['dashboards/dredging-activities']) }}"
                        href="{{ url('/dashboards/dredging-activities') }}"> {{ __('Dredging Activities') }} </a>
                </li>
            </ul>
        </li>

        <li class="menu">
            <a href="#dashboard" data-active="{{ is_active_route(['dashboard/*']) }}" data-toggle="collapse"
                aria-expanded="{{ is_active_route(['dashboard/*']) }}" class="dropdown-toggle">
                <div class="">
                    <i class="las la-home"></i>
                    <span>{{ __('Dashboards') }}</span>
                </div>
                <div>
                    <i class="las la-angle-right sidemenu-right-icon"></i>
                </div>
            </a>
            <ul class="submenu list-unstyled collapse {{ show_class(['dashboard/*']) }}" id="dashboard"
                data-parent="#accordionExample">
                <li class=" {{ active_class(['dashboards/documentation-reports']) }}">
                    <a data-active="{{ is_active_route(['dashboards/documentation-reports']) }}"
                        href="{{ url('/dashboards/documentation-reports') }}"> {{ __('D & R Dashboard') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/environment-monitoring']) }}">
                    <a data-active="{{ is_active_route(['dashboards/environment-monitoring']) }}"
                        href="{{ url('/dashboards/environment-monitoring') }}"> {{ __('Environment Monitoring') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/equipment-monitoring']) }}">
                    <a data-active="{{ is_active_route(['dashboards/equipment-monitoring']) }}"
                        href="{{ url('/dashboards/equipment-monitoring') }}"> {{ __('Equipment Monitoring') }} </a>
                <li class=" {{ active_class(['dashboards/map']) }}">
                    <a data-active="{{ is_active_route(['dashboards/map']) }}" href="{{ url('/dashboards/map') }}">
                        {{ __('Map Dashboard') }} </a>
                </li>
                <li class=" {{ active_class(['dashboards/dredging-activities']) }}">
                    <a data-active="{{ is_active_route(['dashboards/dredging-activities']) }}"
                        href="{{ url('/dashboards/dredging-activities') }}"> {{ __('Dredging Activities') }} </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="nav-item">
            <a href="{{ route('applications.index') }}"
                class="nav-link {{ Request::is('applications*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Applications</p>
            </a>
        </li> --}}
    </ul>
</nav>
