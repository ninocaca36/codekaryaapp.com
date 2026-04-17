<div class="nk-sidebar-inner" data-simplebar>
    <!-- Start: Main Menu Dashboards -->
    <div class="nk-menu-content menu-active" data-content="navDashboards">
        <h5 class="title">Main Menu</h5>
        <ul class="nk-menu">
            <li class="nk-menu-item {{ Request::is('dashboard*') ? 'active' : '' }}">
                <a href="{{ url('/dashboard') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                    <span class="nk-menu-text">Default Dashboard</span>
                </a>
            </li><!-- .nk-menu-item -->

            @hasanyrole('superadmin|admin')
            <!-- User Management -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">User Management</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item has-sub {{ Request::is('users*') ? 'active focus' : '' }}">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                    <span class="nk-menu-text">Users</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item {{ Request::is('users*') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}" class="nk-menu-link"><span class="nk-menu-text">User List</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('roles-permissions.index') }}" class="nk-menu-link"><span class="nk-menu-text">Roles & Permission</span></a>
                    </li>
                </ul><!-- .nk-menu-sub -->
            </li><!-- .nk-menu-item -->

            <!-- Content Management -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Content Management</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item has-sub {{ Request::is('services*') ? 'active focus' : '' }}">
                <a href="#" class="nk-menu-link nk-menu-toggle">
                    <span class="nk-menu-icon"><em class="icon ni ni-grid-alt-fill"></em></span>
                    <span class="nk-menu-text">Services</span>
                </a>
                <ul class="nk-menu-sub">
                    <li class="nk-menu-item {{ Request::is('services*') ? 'active' : '' }}">
                        <a href="{{ route('services.index') }}" class="nk-menu-link"><span class="nk-menu-text">Services List</span></a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="#" class="nk-menu-link"><span class="nk-menu-text">Add New Service</span></a>
                    </li>
                </ul><!-- .nk-menu-sub -->
            </li><!-- .nk-menu-item -->
            <!-- Analytics -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Analytics</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item {{ Request::is('visitors*') ? 'active' : '' }}">
                <a href="{{ route('visitors.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                    <span class="nk-menu-text">Statistik Pengunjung</span>
                </a>
            </li><!-- .nk-menu-item -->

            <!-- Video Tools -->
            <li class="nk-menu-heading">
                <h6 class="overline-title text-primary-alt">Video Tools</h6>
            </li><!-- .nk-menu-heading -->
            <li class="nk-menu-item {{ Request::is('video-tools*') ? 'active' : '' }}">
                <a href="{{ route('video-tools.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-play-fill"></em></span>
                    <span class="nk-menu-text">Video Cutter</span>
                </a>
            </li><!-- .nk-menu-item -->
            <li class="nk-menu-item {{ Request::is('audio-tools*') ? 'active' : '' }}">
                <a href="{{ route('audio-tools.index') }}" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-mic-fill"></em></span>
                    <span class="nk-menu-text">Audio Transcriber</span>
                </a>
            </li><!-- .nk-menu-item -->
            @endhasanyrole
        </ul><!-- .nk-menu -->
    </div>
    <!-- End: Main Menu Dashboards -->

    @hasanyrole('superadmin|admin')
    <!-- Placeholder for other Apps -->
    <div class="nk-menu-content" data-content="navApps">
        <h5 class="title">System Tools</h5>
        <ul class="nk-menu">
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-folder-fill"></em></span>
                    <span class="nk-menu-text">File Manager</span>
                </a>
            </li>
            <li class="nk-menu-item">
                <a href="#" class="nk-menu-link">
                    <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                    <span class="nk-menu-text">Support Tickets</span>
                </a>
            </li>
        </ul>
    </div>
    @endhasanyrole
</div>
