<div class="nk-sidebar" data-content="sidebarMenu">
    <!-- Sidebar Bar (Narrow) -->
    <div class="nk-sidebar-bar">
        @include('layouts.partials.backend.sidebar.brand')

        <div class="nk-sidebar-element">
            <div class="nk-sidebar-body">
                <div class="nk-sidebar-content" data-simplebar>
                    @include('layouts.partials.backend.sidebar.apps')
                </div>
                @include('layouts.partials.backend.sidebar.profile')
            </div>
        </div>
    </div>
    <!-- Sidebar Main (Wide) -->
    <div class="nk-sidebar-main is-light">
        @include('layouts.partials.backend.sidebar.menu')
    </div>
</div>