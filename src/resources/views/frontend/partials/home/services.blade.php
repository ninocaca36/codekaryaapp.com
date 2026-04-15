<!-- Our Services-->
<section class="section section-lg novi-bg novi-bg-img" style="background-color: #f8f9fa;">
    <div class="container">
      <div class="row row-50 align-items-center">
        <!-- Image Column -->
        <div class="col-lg-6 wow-outer">
          <div class="box-image-wrapper wow slideInLeft" style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
            <img src="{{ asset('frontend/images/services-1-570x368.jpg') }}" alt="Layanan Kami" class="img-fluid" style="width: 100%; transition: transform 0.5s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <div style="position: absolute; bottom: 20px; right: 20px; background: rgba(255,255,255,0.95); padding: 15px 25px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.15);">
              <h5 class="mb-0 text-primary" style="font-weight: 700; font-size: 1.25rem;">Solusi Digital</h5>
              <p class="mb-0" style="font-size: 0.9rem; font-weight: 500;">Terbaik untuk UMKM</p>
            </div>
          </div>
        </div>
        
        <!-- Text & Services Column -->
        <div class="col-lg-6">
          <h3 class="wow-outer text-center text-lg-start mb-3"><span class="wow slideInUp" style="font-weight: 700;">Layanan <span class="text-primary">Unggulan</span> Kami</span></h3>
          <p class="wow-outer text-center text-lg-start mb-5"><span class="wow slideInDown">Kami menyediakan solusi pembuatan website UMKM berbasis Laravel yang handal, dari tahap pembangunan (build) hingga pemeliharaan (maintenance) rutin dengan tampilan premium.</span></p>
          
          <div class="row row-30">
            @foreach($services as $index => $service)
            <div class="col-sm-6 wow-outer">
              <!-- Box Light-->
              <article class="box-light wow slideInRight h-100 p-4" data-wow-delay="{{ ($index % 4) * 0.1 }}s" style="background: #ffffff; border-radius: 15px; border: 1px solid rgba(0,0,0,0.05); box-shadow: 0 5px 15px rgba(0,0,0,0.03); transition: all 0.3s ease;" onmouseover="this.style.boxShadow='0 10px 25px rgba(0,123,255,0.15)'; this.style.transform='translateY(-5px)';" onmouseout="this.style.boxShadow='0 5px 15px rgba(0,0,0,0.03)'; this.style.transform='translateY(0)';">
                <div class="d-flex align-items-center mb-3 text-start">
                  <div class="box-light-icon novi-icon {{ $service->icon_class }} text-primary" style="font-size: 1.8rem; background: rgba(0, 123, 255, 0.08); width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border-radius: 50%; margin-right: 15px; flex-shrink: 0;"></div>
                  <h5 class="box-light-title mb-0 text-start" style="font-size: 1.1rem; font-weight: 600; line-height: 1.3;">{{ $service->title }}</h5>
                </div>
                <p class="text-start" style="font-size: 0.95rem; line-height: 1.6; color: #6c757d; margin-bottom: 0;">{{ $service->description }}</p>
              </article>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</section>
