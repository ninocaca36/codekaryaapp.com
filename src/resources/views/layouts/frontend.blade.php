<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
   @include('layouts.partials.frontend.head')
  </head>
  <body>
    <div class="page">
      <!-- Page Header-->
      <section class="section page-header page-header-navbar bg-gray-700" data-preset='{"title":"Header With Slider","category":"headers","reload":true,"id":"header-with-slider"}'>
        <!-- RD Navbar-->
        @include('layouts.partials.frontend.navbar')
        <!-- RD Navbar-->
        @include('layouts.partials.frontend.slider')
      </section>

      {{ $slot }}

      
      <!-- Page Footer-->
      @include('layouts.partials.frontend.footer')
    </div>
    @include('layouts.partials.frontend.preloader')
    <!-- Global Mailform Output-->
   @include('layouts.partials.frontend.scripts')
  </body>
</html>