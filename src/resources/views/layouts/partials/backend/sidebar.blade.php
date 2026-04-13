<div class="nk-sidebar" data-content="sidebarMenu">
    <div class="nk-sidebar-bar">
        <div class="nk-apps-brand">
            <a href="{{ url('/') }}" class="logo-link">
                <img class="logo-light logo-img" src="{{ asset('frontend/images/logo-inverse-codekarya.png') }}" alt="logo" style="max-height: 40px;">
                <img class="logo-dark logo-img" src="{{ asset('frontend/images/logo-default-codekarya.png') }}" alt="logo-dark" style="max-height: 40px;">
            </a>
        </div>
        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    <div class="nk-sidebar-menu">
                        <!-- Menu -->
                        <ul class="nk-menu apps-menu">
                            <li class="nk-menu-item">
                                <a href="{{ url('/') }}" class="nk-menu-link" title="Go to Website">
                                    <span class="nk-menu-icon"><em class="icon ni ni-globe"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item active">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navDashboards">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="#" class="nk-menu-link nk-menu-switch" data-target="navApps">
                                    <span class="nk-menu-icon"><em class="icon ni ni-menu-circled"></em></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-sidebar-main is-light">
        <div class="nk-sidebar-inner" data-simplebar>
            <div class="nk-menu-content menu-active" data-content="navDashboards">
                <h5 class="title">Dashboards</h5>
                <ul class="nk-menu">
                    <li class="nk-menu-item">
                        <a href="{{ url('/dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Default Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div>
            <!-- Additional menus can be added here -->
        </div>
    </div>
</div>
