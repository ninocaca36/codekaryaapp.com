<div class="nk-sidebar-profile nk-sidebar-profile-fixed">
    <a href="#" class="toggle" data-target="profileDD">
        <div class="user-avatar">
            <span>{{ substr(Auth::user()->name, 0, 1) }}{{ count(explode(' ', Auth::user()->name)) > 1 ? substr(explode(' ', Auth::user()->name)[1], 0, 1) : '' }}</span>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-md m-1 nk-sidebar-profile-dropdown" data-content="profileDD">
        <div class="dropdown-inner user-card-wrap d-none d-md-block">
            <div class="user-card">
                <div class="user-avatar">
                    <span>{{ substr(Auth::user()->name, 0, 1) }}{{ count(explode(' ', Auth::user()->name)) > 1 ? substr(explode(' ', Auth::user()->name)[1], 0, 1) : '' }}</span>
                </div>
                <div class="user-info">
                    <span class="lead-text">{{ Auth::user()->name }}</span>
                    <span class="sub-text text-soft">{{ Auth::user()->email }}</span>
                </div>
            </div>
        </div>
        <div class="dropdown-inner">
            <ul class="link-list">
                <li><a href="{{ route('profile.edit') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                <li><a href="{{ route('profile.edit') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
            </ul>
        </div>
        <div class="dropdown-inner">
            <ul class="link-list">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <em class="icon ni ni-signout"></em><span>Sign out</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
