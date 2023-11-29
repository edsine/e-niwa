




<li class="nav-item">
    <a href="{{ route('userProfiles.index') }}" class="nav-link {{ Request::is('userProfiles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>User Profiles</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('registeredVessels.index') }}" class="nav-link {{ Request::is('registeredVessels*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Registered Vessels</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('payments.index') }}" class="nav-link {{ Request::is('payments*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Payments</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('applications.index') }}" class="nav-link {{ Request::is('applications*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Applications</p>
    </a>
</li>
