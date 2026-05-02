<x-frontend-layout>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" style="background-image: url({{ isset($settings['portfolio_header_bg']) ? asset($settings['portfolio_header_bg']) : asset('frontend/images/breadcrumbs-image.jpg') }});" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">{{ $settings['portfolio_header_subtitle'] ?? 'Showcase' }}</h6>
              <h1 class="breadcrumbs-custom-title">{{ $settings['portfolio_header_title'] ?? 'Portofolio' }}</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Portofolio</li>
            </ul>
          </div>
        </div>
      </section>

    <!-- Portofolio Content -->
   <!-- A Few Words About Us-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6 col-xl-5">
              <h3>{{ $settings['portfolio_about_title'] ?? 'Siapa Kami' }}</h3>
              <p>{{ $settings['portfolio_about_content1'] ?? 'Codekarya adalah wadah kreatif bagi para kreator digital untuk membagikan karya terbaik mereka kepada dunia. Kami fokus pada kualitas dan inovasi dalam setiap karya yang kami hasilkan.' }}
              </p>
              <p>{{ $settings['portfolio_about_content2'] ?? 'Dedikasi kami tercermin dalam setiap baris kode, setiap nada musik, dan setiap frame video yang kami buat. Portofolio ini adalah bukti perjalanan kreatif kami.' }}
              </p><a class="button button-lg button-primary button-winona" href="{{ route('frontend.tentang-kami.index') }}">Pelajari lebih lanjut</a>
            </div>
            <div class="col-md-10 col-lg-6"><img class="img-responsive" src="{{ isset($settings['portfolio_about_image']) ? asset($settings['portfolio_about_image']) : asset('frontend/images/services-1-570x368.jpg') }}" alt="" width="570" height="368"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Services-->
      <section class="section section-lg text-center">
        <div class="container">
          <h3>Karya Portofolio</h3>
          <p><span class="text-width-1">Berikut adalah beberapa kategori karya yang telah kami kerjakan dan kami banggakan.</span></p>
          <div class="row row-30 row-xxl-70 offset-top-2">
            @forelse($portfolios as $portfolio)
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="{{ $portfolio->link ?? '#' }}"><img class="thumbnail-light-image" src="{{ asset($portfolio->image) }}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href="{{ $portfolio->link ?? '#' }}">{{ $portfolio->title }}</a></h5>
              </article>
            </div>
            @empty
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="{{ asset('frontend/images/service-thumbnail-1-270x300.jpg') }}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href="#">Analysis & Research</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="{{ asset('frontend/images/service-thumbnail-2-270x300.jpg') }}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href="#">Online Marketing</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="{{ asset('frontend/images/service-thumbnail-3-270x300.jpg') }}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href="#">Email Marketing</a></h5>
              </article>
            </div>
            <div class="col-sm-6 col-lg-3">
              <!-- Thumbnail Light-->
              <article class="thumbnail-light"><a class="thumbnail-light-media" href="#"><img class="thumbnail-light-image" src="{{ asset('frontend/images/service-thumbnail-4-270x300.jpg') }}" alt="" width="270" height="300"/></a>
                <h5 class="thumbnail-light-title"><a href="#">Public Relations</a></h5>
              </article>
            </div>
            @endforelse
          </div>
        </div>
      </section>
      <section class="section section-xl bg-gray-700 bg-image bg-image-1 novi-bg novi-bg-img" style="background-image: url({{ isset($settings['portfolio_cta_bg']) ? asset($settings['portfolio_cta_bg']) : asset('frontend/images/call-to-action-2-1920x584.jpg') }});" data-preset='{"title":"Man CTA","category":"cta","id":"man-cta"}'>
        <div class="container">
          <div class="row justify-content-sm-end row-fix">
            <div class="col-sm-9 col-md-7 col-lg-6">
              <div class="box-2">
                <div class="wow-outer">
                  <div class="wow slideInUp">
                    <h4>{{ $settings['portfolio_cta_title1'] ?? 'Take the First Step to the' }}</h4>
                    <h3 class="font-weight-bold">{{ $settings['portfolio_cta_title2'] ?? 'Success of Your Company' }}</h3>
                  </div>
                </div>
                <div class="wow-outer offset-top-4">
                  <div class="wow slideInDown">
                    <p>{{ $settings['portfolio_cta_text'] ?? 'Eu labore dolor ad eu voluptate nisi pariatur cillum fugiat est amet elit esse amet pariatur est tempor dolore ea dolor ex est ut voluptate deserunt eu est' }}
                    </p><a class="button button-primary button-winona" href="{{ $settings['portfolio_cta_btn_link'] ?? '#' }}">{{ $settings['portfolio_cta_btn_text'] ?? 'Make an Appointment' }}</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg">
        <div class="container">
          <h3 class="text-center">Testimoni</h3>
          <div class="owl-carousel" data-items="1" data-md-items="2" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
            <div class="wow-outer">
              <blockquote class="quote-modern quote-modern-big wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                <div class="quote-modern-text">
                  <p>Saya sangat terkesan dengan kualitas karya yang dihasilkan oleh tim Codekarya. Mereka sangat memahami kebutuhan klien dan memberikan solusi kreatif yang luar biasa.</p>
                </div>
                <div class="quote-modern-meta">
                  <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-3-96x96.jpg') }}" alt="" width="96" height="96"/>
                  </div>
                  <div class="quote-modern-info">
                    <cite class="quote-modern-cite">Albert Webb</cite>
                    <p class="quote-modern-caption">CEO at Majestic</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="wow-outer">
              <blockquote class="quote-modern quote-modern-big wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                <div class="quote-modern-text">
                  <p>Bekerja sama dengan Codekarya adalah pengalaman yang menyenangkan. Hasil karyanya sangat profesional dan melebihi ekspektasi kami.</p>
                </div>
                <div class="quote-modern-meta">
                  <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-1-96x96.jpg') }}" alt="" width="96" height="96"/>
                  </div>
                  <div class="quote-modern-info">
                    <cite class="quote-modern-cite">Kelly McMillan</cite>
                    <p class="quote-modern-caption">Pengusaha Muda</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="wow-outer">
              <blockquote class="quote-modern quote-modern-big wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                <div class="quote-modern-text">
                  <p>Layanan yang diberikan sangat cepat dan berkualitas. Tim sangat responsif terhadap masukan dan detail pekerjaan sangat diperhatikan.</p>
                </div>
                <div class="quote-modern-meta">
                  <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-2-96x96.jpg') }}" alt="" width="96" height="96"/>
                  </div>
                  <div class="quote-modern-info">
                    <cite class="quote-modern-cite">Harold Barnett</cite>
                    <p class="quote-modern-caption">Manajer Regional</p>
                  </div>
                </div>
              </blockquote>
            </div>
            <div class="wow-outer">
              <blockquote class="quote-modern quote-modern-big wow slideInLeft"><img src="{{ asset('frontend/images/quote-35x25.png') }}" alt="" width="35" height="25"/>
                <div class="quote-modern-text">
                  <p>Jika Anda mencari tim yang berdedikasi dan kreatif, Codekarya adalah jawabannya. Mereka benar-benar peduli dengan hasil akhir karya mereka.</p>
                </div>
                <div class="quote-modern-meta">
                  <div class="quote-modern-avatar"><img src="{{ asset('frontend/images/testimonials-person-4-96x96.jpg') }}" alt="" width="96" height="96"/>
                  </div>
                  <div class="quote-modern-info">
                    <cite class="quote-modern-cite">Samantha Lee</cite>
                    <p class="quote-modern-caption">Sales Manager</p>
                  </div>
                </div>
              </blockquote>
            </div>
          </div>
        </div>
      </section>
</x-frontend-layout>
