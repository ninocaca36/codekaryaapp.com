<x-frontend-layout>
    @section('title', 'Home')

    @section('header-extra')
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
    @endsection

    <!-- Our Services-->
    <section class="section section-lg text-center novi-bg novi-bg-img">
        <div class="container">
            <h3 class="wow-outer"><span class="wow slideInUp">Our Services</span></h3>
            <p class="wow-outer"><span class="text-width-1 wow slideInDown">We provide a variety of marketing and promotion services to enable you and your business with innovative tools and strategies and attract more customers.</span></p>
            <div class="row row-50 row-xxl-70 offset-top-2">
                <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
                    <article class="box-light wow slideInLeft">
                        <div class="box-light-icon novi-icon fl-bigmug-line-flag53"></div>
                        <h4 class="box-light-title">Branding</h4>
                        <p>Whether you’re looking to launch a brand or you just need help clarifying your message, we can help you.</p>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
                    <article class="box-light wow slideInLeft" data-wow-delay=".05s">
                        <div class="box-light-icon novi-icon fl-bigmug-line-equalization3"></div>
                        <h4 class="box-light-title">Strategy</h4>
                        <p>Our experts can help you develop your marketing strategy and integrate it into your advertising campaign.</p>
                    </article>
                </div>
                <!-- ... other services ... -->
            </div>
        </div>
    </section>

    <!-- A Few Words About Us-->
    <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50 justify-content-center justify-content-lg-between">
                <div class="col-md-10 col-lg-6 col-xl-5">
                    <h3 class="wow-outer"><span class="wow slideInDown">A Few Words About Us</span></h3>
                    <p class="wow-outer"><span class="wow slideInDown" data-wow-delay=".05s">We are a team of talented marketers who happen to love creating smart ideas for those who will have us. We use our creative potential to provide the smartest ideas.</span></p>
                    <div class="wow-outer button-outer"><a class="button button-lg button-primary button-winona wow slideInDown" data-wow-delay=".1s" href="#">Learn more</a></div>
                </div>
                <div class="col-md-10 col-lg-6 wow-outer"><img class="img-responsive wow slideInRight" src="{{ asset('frontend/images/large-features-2-570x368.jpg') }}" alt="" width="570" height="368"/>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>