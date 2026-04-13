<!-- Our Services-->
<section class="section section-lg text-center novi-bg novi-bg-img">
    <div class="container">
      <h3 class="wow-outer"><span class="wow slideInUp">Layanan Kami</span></h3>
      <p class="wow-outer"><span class="text-width-1 wow slideInDown">Kami menyediakan solusi pembuatan website UMKM berbasis Laravel yang handal, dari tahap pembangunan (build) hingga pemeliharaan (maintenance) rutin.</span></p>
      <div class="row row-50 row-xxl-70 offset-top-2">
        @foreach($services as $index => $service)
        <div class="col-sm-6 col-md-4 col-lg-3 wow-outer">
          <!-- Box Light-->
          <article class="box-light wow slideInLeft" data-wow-delay="{{ ($index % 4) * 0.05 }}s">
            <div class="box-light-icon novi-icon {{ $service->icon_class }}"></div>
            <h4 class="box-light-title">{{ $service->title }}</h4>
            <p>{{ $service->description }}</p>
          </article>
        </div>
        @endforeach
      </div>
    </div>
</section>
