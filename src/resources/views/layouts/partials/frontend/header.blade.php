<header class="section page-header page-header-navbar bg-gray-700">
  <!-- RD Navbar-->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar rd-navbar-minimal rd-navbar-minimal-wide" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
      <div class="rd-navbar-main-outer">
        <div class="rd-navbar-main">
          <!-- RD Navbar Panel-->
          <div class="rd-navbar-panel"> 
            <!-- RD Navbar Toggle-->
            <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
            <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo-inverse-161x34.png') }}" alt="" width="161" height="34" srcset="{{ asset('frontend/images/logo-inverse-322x67.png') }} 2x"/></a>
          </div>
          <div class="rd-navbar-main-element">
            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
              <ul class="rd-navbar-nav">
                <li class="rd-nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="rd-nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Services</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Blog</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pricing</a></li>
                <li class="rd-nav-item"><a class="rd-nav-link" href="#">Contacts</a></li>
                
                @guest
                  <li class="rd-nav-item">
                    <a class="btn-auth" href="{{ route('login') }}">Login</a>
                  </li>
                @else
                  <li class="rd-nav-item">
                    <div class="auth-dropdown">
                      <a class="rd-nav-link profile-toggle" href="#">{{ auth()->user()->name }} <span class="icon fa-angle-down"></span></a>
                      <div class="auth-dropdown-content">
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <a href="#">Profile</a>
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form-frontend').submit();">Logout</a>
                        <form id="logout-form-frontend" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </div>
                    </div>
                  </li>
                @endguest
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
  @yield('header-extra')
</header>
