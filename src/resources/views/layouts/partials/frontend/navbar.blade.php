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
              <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="services.html">Services</a>
                  </li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-service.html">Single Service</a>
                  </li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="single-blog-post.html">Single Blog Post</a>
                  </li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">Pages</a>
                <ul class="rd-menu rd-navbar-dropdown">
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="404-page.html">404 Page</a>
                  </li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="search-results.html">Search results</a>
                  </li>
                  <li class="rd-dropdown-item"><a class="rd-dropdown-link" href="privacy-policy.html">Privacy policy</a>
                  </li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="#">Elements</a>
                <ul class="rd-menu rd-navbar-megamenu">
                  <li class="rd-megamenu-item">
                    <h6 class="rd-megamenu-title"><a href="#">Elements 1</a></h6>
                    <ul class="rd-megamenu-list">
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="headers.html">Headers</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="footers.html">Footers</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="breadcrumbs.html">Breadcrumbs</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="contact-forms.html">Contact Forms</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="subscribe-forms.html">Subscribe Forms</a></li>
                    </ul>
                  </li>
                  <li class="rd-megamenu-item">
                    <h6 class="rd-megamenu-title"><a href="#">Elements 2</a></h6>
                    <ul class="rd-megamenu-list">
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="calls-to-action.html">Calls to Action</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="screens.html">Screens</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="maps.html">Maps</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="blog-layouts.html">Blog Layouts</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="team.html">Team</a></li>
                    </ul>
                  </li>
                  <li class="rd-megamenu-item">
                    <h6 class="rd-megamenu-title"><a href="#">Elements 3</a></h6>
                    <ul class="rd-megamenu-list">
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="galleries.html">Galleries</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="gallery-albums.html">Gallery Albums</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="testimonials.html">Testimonials</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="pricing.html">Pricing</a></li>
                      <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link" href="blogs.html">Blogs</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">Contacts</a>
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
