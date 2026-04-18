<!-- RD Navbar-->
<div class="rd-navbar-wrap">
  <nav class="rd-navbar rd-navbar-minimal rd-navbar-minimal-wide" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-fixed" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
    <div class="rd-navbar-main-outer">
      <div class="rd-navbar-main">
        <!-- RD Navbar Panel-->
        <div class="rd-navbar-panel"> 
          <!-- RD Navbar Toggle-->
          <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span></button>
          <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/images/logo-inverse-codekarya.png') }}" alt="Codekarya" width="161" height="34" style="mix-blend-mode: screen;"/></a>
        </div>
        <div class="rd-navbar-main-element">
          <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
            <ul class="rd-navbar-nav">
              <li class="rd-nav-item {{ Request::is('/') ? 'active' : '' }}"><a class="rd-nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">Karya</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Musik</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Film</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Podcast</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Video Pendek</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Semua Karya Digital</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('frontend.music.index') }}">Karya Video Ser</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('frontend.music.karaoke') }}">Ruang Karaoke</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ route('frontend.podcast.index') }}">Podcast</a></li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">Jasa Aplikasi</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Web Development</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Mobile App Development</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Sistem Informasi</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Landing Page</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Maintenance & Support</a></li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">About</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Tentang Kami</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Aturan Main & Membership</a></li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Visi & Misi</a></li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Kontak</a>
              </li>
              @guest
                  <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('login') }}">Login</a></li>
                  @if (Route::has('register'))
                      <li class="rd-nav-item"><a class="rd-nav-link" href="{{ route('register') }}">Register</a></li>
                  @endif
              @else
                  <li class="rd-nav-item"><a class="rd-nav-link" href="#">{{ auth()->user()->name }}</a>
                    <ul class="rd-menu rd-navbar-dropdown">
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="{{ url('/dashboard') }}">Dashboard</a></li>
                      <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="#">Profile</a></li>
                      <li class="rd-dropdown-item">
                        <a class="rd-dropdown-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form-frontend').submit();">Logout</a>
                        <form id="logout-form-frontend" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                        </form>
                      </li>
                    </ul>
                  </li>
              @endguest
            </ul>
          </div>
          <!-- RD Navbar Search-->
          <div class="rd-navbar-search" id="rd-navbar-search-1">
            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-2" data-rd-navbar-toggle="#rd-navbar-search-1"><span></span></button>
            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live-1" method="GET">
              <div class="form-wrap">
                <label class="form-label" for="rd-navbar-search-form-input-1">Search...</label>
                <input class="form-input rd-navbar-search-form-input" id="rd-navbar-search-form-input-1" type="text" name="s" autocomplete="off">
                <div class="rd-search-results-live" id="rd-search-results-live-1"></div>
              </div>
              <button class="rd-search-form-submit fa-search" type="submit"></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>
