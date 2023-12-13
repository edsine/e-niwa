<nav id="sidebar">
    <ul class="list-unstyled menu-categories" id="accordionExample">
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
                {{-- <li class=" {{ active_class(['dashboard/dashboard2']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard2']) }}"
                        href="{{ url('/dashboard/dashboard2') }}"> {{ __('Dashboard 2') }} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard3']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard3']) }}"
                        href="{{ url('/dashboard/dashboard3') }}"> {{ __('Dashboard 3') }} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard4']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard4']) }}"
                        href="{{ url('/dashboard/dashboard4') }}"> {{ __('Dashboard 4') }} </a>
                </li>
                <li class=" {{ active_class(['dashboard/dashboard5']) }}">
                    <a data-active="{{ is_active_route(['dashboard/dashboard5']) }}"
                        href="{{ url('/dashboard/dashboard5') }}"> {{ __('Dashboard 5') }} </a>
                </li> --}}
                <li class=" {{ active_class(['dashboards/documentation-reports']) }}">
                    <a data-active="{{ is_active_route(['dashboards/documentation-reports']) }}"
                        href="{{ url('/dashboards/documentation-reports') }}"> {{ __('D & R Dashboard') }} </a>
                </li>
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
            {{-- <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-home"></i>
                <p>Users</p>
            </a> --}}

            <a data-active="{{ is_active_route(['users/*']) }}" href="{{ route('users.index') }}">
                {{ __('Users') }} </a>
        </li>
    </ul>
</nav>
