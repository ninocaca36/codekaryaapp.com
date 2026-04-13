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

      <!-- Fullwidth Gallery-->
      <section class="section text-center novi-section">
        <!-- Owl Carousel-->
        <div class="owl-carousel owl-carousel-dots-space" data-items="2" data-sm-items="3" data-md-items="4" data-lg-items="5" data-xl-items="6" data-dots="true" data-nav="false" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="false">
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-1.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-1-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-2.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-2-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-3.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-3-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-4.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-4-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-5.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-5-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
          <!-- Thumbnail Thin-->
          <div class="wow-outer"><a class="thumbnail-thin wow slideInLeft" href="{{ asset('frontend/images/gallery-original-6.jpg') }}" data-lightgallery="item">
              <div class="thumbnail-thin-inner"><img class="thumbnail-thin-image" src="{{ asset('frontend/images/galleries-6-320x320.jpg') }}" alt="" width="320" height="320"/>
              </div></a></div>
        </div>
      </section>
      <!-- Page Footer-->
      @include('layouts.partials.frontend.footer')
    </div>
    @include('layouts.partials.frontend.preloader')
    <!-- Global Mailform Output-->
   @include('layouts.partials.frontend.scripts')
  </body>
</html>