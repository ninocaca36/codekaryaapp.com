<div class="nk-header nk-header-fixed nk-header-fluid is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger d-xl-none ms-n1">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand d-xl-none">
                <a href="{{ url('/') }}" class="logo-link">
                    <img class="logo-light logo-img" src="{{ asset('src/assets/images/logo.png') }}" srcset="{{ asset('src/assets/images/logo2x.png') }} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{ asset('src/assets/images/logo-dark.png') }}" srcset="{{ asset('src/assets/images/logo-dark2x.png') }} 2x" alt="logo-dark">
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-search ms-3 ms-xl-0 d-none d-md-flex">
                <em class="icon ni ni-search"></em>
                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search anything">
            </div><!-- .nk-header-news -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-primary">
                                <em class="icon ni ni-signout"></em>
                                <span>Login</span>
                            </a>
                        </li>
                    @endguest

                    @auth
                    <li class="nav-item">
                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em class="icon ni ni-globe"></em></a>
                    </li>
                    <li class="dropdown chats-dropdown hide-mb-xs">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-na"><em class="icon ni ni-comments"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Recent Chats</span>
                                <a href="#">Setting</a>
                            </div>
                            <div class="dropdown-body">
                                <ul class="chat-list">
                                    <li class="chat-item">
                                        <a class="chat-link" href="#">
                                            <div class="chat-media user-avatar">
                                                <span>IH</span>
                                                <span class="status dot dot-lg dot-gray"></span>
                                            </div>
                                            <div class="chat-info">
                                                <div class="chat-from">
                                                    <div class="name">Iliash Hossain</div>
                                                    <span class="time">Now</span>
                                                </div>
                                                <div class="chat-context">
                                                    <div class="text">You: Please confrim if you got my last messages.</div>
                                                    <div class="status delivered">
                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li><!-- .chat-item -->
                                </ul><!-- .chat-list -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown notification-dropdown">
                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="#">Mark All as Read</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">
                                    <div class="nk-notification-item dropdown-inner">
                                        <div class="nk-notification-icon">
                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                        </div>
                                        <div class="nk-notification-content">
                                            <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                            <div class="nk-notification-time">2 hrs ago</div>
                                        </div>
                                    </div>
                                </div><!-- .nk-notification -->
                            </div><!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <em class="icon ni ni-user-alt"></em>
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    @if(auth()->user()->email_verified_at)
                                        <div class="user-status user-status-verified text-success">Verified</div>
                                    @else
                                        <div class="user-status user-status-unverified text-danger">Unverified</div>
                                    @endif
                                    <div class="user-name dropdown-indicator">{{ auth()->user()->name ?? 'Guest' }}</div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span>{{ auth()->check() ? substr(auth()->user()->name, 0, 2) : 'G' }}</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text">{{ auth()->user()->name ?? 'Guest' }}</span>
                                        <span class="sub-text">{{ auth()->user()->email ?? '' }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="{{ url('/dashboard') }}"><em class="icon ni ni-dashboard"></em><span>Dashboard</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                    <li><a href="#"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                <em class="icon ni ni-signout"></em><span>Sign out</span>
                                            </a>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endauth
                </ul>
            </div>
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>

@if(session('success'))
    <script>
        window.addEventListener('load', function() {
            NioApp.Toast('{{ session('success') }}', 'success', {position: 'top-right'});
        });
    </script>
@endif

@if(session('error'))
    <script>
        window.addEventListener('load', function() {
            NioApp.Toast('{{ session('error') }}', 'error', {position: 'top-right'});
        });
    </script>
@endif

@if(session('info'))
    <script>
        window.addEventListener('load', function() {
            NioApp.Toast('{{ session('info') }}', 'info', {position: 'top-right'});
        });
    </script>
@endif
