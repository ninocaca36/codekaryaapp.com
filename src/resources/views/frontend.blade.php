 <x-frontend-layout>
      @include('frontend.partials.home.services')
      <!-- A Few Words About Us-->
      <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
       @include('frontend.partials.home.about')
      </section>
      <!-- CTA Thin-->
      <section class="section section-xs bg-primary-darker text-center novi-bg novi-bg-img">
        <div class="container">
          <div class="row row-fix justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Learn the Cost of your <span class="font-weight-bold">Marketing Campaign</span> Right Now!</span></h4><a class="button button-primary button-winona" href="pricing.html">View all pricing</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Katalog Layanan -->
      @include('frontend.partials.home.team')
      <!-- Testimonials-->
    
      <!-- Pricing-->
      @include('frontend.partials.home.pricing')
      <!-- Wide CTA-->
      @include('frontend.partials.home.cta-thin')
      <!-- Latest Blog Posts-->
     @include('frontend.partials.home.blog')
    
</x-frontend-layout>
    
  