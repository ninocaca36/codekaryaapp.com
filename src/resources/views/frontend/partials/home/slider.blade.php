<!-- Swiper Slider-->
<section class="section page-header page-header-navbar bg-gray-700" data-preset='{"title":"Header With Slider","category":"headers","reload":true,"id":"header-with-slider"}'>
    <div class="swiper-container swiper-slider swiper-slider-minimal" data-loop="true" data-slide-effect="fade" data-autoplay="false" data-simulate-touch="true">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-slide_video">
          <div class="vide_bg novi-vide" data-vide-bg="{{ asset('frontend/video/city') }}" data-vide-options="posterType: jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="swiper-slide-text">
                  <div class="text-large">Dedicated to results</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="{{ asset('frontend/images/slider-minimal-slide-2-1920x888.jpg') }}">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="swiper-slide-text">
                <div class="text-large">Solutions made easy</div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide" data-slide-bg="{{ asset('frontend/images/slider-minimal-slide-3-1920x888.jpg') }}">
          <div class="swiper-slide-caption">
            <div class="container">
              <div class="swiper-slide-text">
                <div class="text-large">The Best on the market</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination-outer container">
        <div class="swiper-pagination swiper-pagination-modern" data-index-bullet="true"></div>
      </div>
    </div>
</section>
