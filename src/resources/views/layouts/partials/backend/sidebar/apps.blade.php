<div class="nk-sidebar-menu">
    <!-- Menu -->
    <ul class="nk-menu apps-menu">
        <li class="nk-menu-item {{ Request::is('dashboard*') || Request::is('users*') || Request::is('services*') ? 'active' : '' }}">
            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
            </a>
        </li>
        <li class="nk-menu-item">
            <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
            </a>
        </li>
        <li class="nk-menu-hr"></li>
        <li class="nk-menu-item">
            <a href="{{ url('/') }}" class="nk-menu-link" title="Go to Website" target="_blank">
                <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
            </a>
        </li>
    </ul>
</div>
