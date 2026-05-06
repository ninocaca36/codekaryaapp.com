<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
   @include('layouts.partials.frontend.partials.head')
   @stack('styles')
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
      <section class="section page-header page-header-navbar bg-gray-700" data-preset='{"title":"Header With Slider","category":"headers","reload":true,"id":"header-with-slider"}'>
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          @include('layouts.partials.frontend.partials.navbar')
        </div>
        
        @if(Request::is('/'))
          <div class="swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="false" data-simulate-touch="true">
            @include('layouts.partials.frontend.partials.slider')
          </div>
        @endif
      </section>
      <!-- Our Services-->
      {{ $slot }}
      <!-- Page Footer-->
      <footer class="section footer-linked bg-gray-700 novi-bg novi-bg-img" data-preset='{"title":"Footer Linked","category":"footers","id":"footer-linked"}'>
         @include('layouts.partials.frontend.partials.footer')
      </footer>
    <div class="preloader">
      @include('layouts.partials.frontend.partials.preloader')
    </div>
    <!-- Global Mailform Output-->
    @include('layouts.partials.frontend.partials.chatbot')
    @include('layouts.partials.frontend.partials.scripts')
    @stack('scripts')
  </body>
</html>