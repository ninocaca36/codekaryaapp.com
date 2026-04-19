<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>{{ $title ?? 'About' }} | Codekarya</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico') }}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7COswald:300,400,500">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="{{ asset('frontend/images/ie8-panel/warning_bar_0000_us.jpg') }}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="{{ asset('frontend/js/html5shiv.min.js') }}"></script>
    <![endif]-->
    @stack('styles')
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        @include('layouts.partials.frontend.navbar')
      </header>

      @if(isset($breadcrumbs))
        {{ $breadcrumbs }}
      @else
        <!-- Default Breadcrumbs-->
        <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img">
          <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
              <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">{{ $title ?? 'About' }}</h6>
                <h1 class="breadcrumbs-custom-title">{{ $title ?? 'About' }}</h1>
              </div>
              <ul class="breadcrumbs-custom-path">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="active">{{ $title ?? 'About' }}</li>
              </ul>
            </div>
          </div>
        </section>
      @endif

      <!-- Main Content Slot -->
      {{ $slot }}

      <!-- Page Footer-->
      <footer class="section footer-standard bg-gray-700 novi-bg novi-bg-img">
        <div class="footer-standard-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
                <div class="inset-right-1">
                  <h4>About Us</h4>
                  <p>Codekarya adalah platform kreatif digital terkemuka yang memberdayakan kreator untuk membagikan karya terbaik mereka kepada dunia.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="box-1">
                  <h4>Contact Information</h4>
                  <ul class="list-sm">
                    <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">Jl. Kreatif No. 123, Jakarta, Indonesia</a></li>
                    <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a class="link-default" href="tel:#">021-1234-5678</a></li>
                    <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:info@codekarya.com">info@codekarya.com</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-6 col-md-7 col-lg-4">
                <h4>Newsletter</h4>
                <p>Berlangganan buletin kami untuk mendapatkan berita terbaru dan penawaran spesial.</p>
                <form class="rd-form rd-mailform form-inline" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="#">
                  <div class="form-wrap">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email">
                    <label class="form-label" for="subscribe-form-2-email">E-mail</label>
                  </div>
                  <div class="form-button">
                    <button class="button button-primary button-icon button-icon-only button-winona" type="submit" aria-label="submit"><span class="icon mdi mdi-email-outline"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-standard-aside">
            <a class="brand" href="{{ url('/') }}">
              <img src="{{ asset('frontend/images/logo-inverse-codekarya.png') }}" alt="Codekarya" width="161" height="34" style="mix-blend-mode: screen;"/>
            </a>
            <p class="rights"><span>&copy;&nbsp;<span class="copyright-year"></span><span>&nbsp;</span><span>Codekarya</span><span>. All Rights Reserved. &nbsp;</span><a href="#">Privacy Policy</a></span></p>
          </div>
        </div>
      </footer>
    </div>
    
    <div class="preloader">
      <div class="preloader-logo">
        <img src="{{ asset('frontend/images/logo-inverse-codekarya.png') }}" alt="Codekarya" width="161" height="34" style="mix-blend-mode: screen;"/>
      </div>
      <div class="preloader-body">
        <div id="loadingProgressG">
          <div class="loadingProgressG" id="loadingProgressG_1"></div>
        </div>
      </div>
    </div>
    
    <div class="snackbars" id="form-output-global"></div>
    
    <!-- Javascript-->
    <script src="{{ asset('frontend/js/core.min.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    @stack('scripts')
  </body>
</html>