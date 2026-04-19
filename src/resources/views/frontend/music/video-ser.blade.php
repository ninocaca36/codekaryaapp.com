<x-frontend-layout>
    <!-- Breadcrumbs -->
    <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Karya</h6>
              <h1 class="breadcrumbs-custom-title">Video Ser</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Video Ser</li>
            </ul>
          </div>
        </div>
      </section>

    <!-- Video Feed -->
    <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50 justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <h3 class="text-center">Jelajahi Inspirasi Lewat <span class="text-primary font-weight-bold">Video Pendek</span></h3>
                    <p class="text-center">Kumpulan karya kreatif terbaik dari komunitas Codekarya. Tonton, bagikan, dan dukung kreator favoritmu.</p>
                </div>
            </div>
            
            <div class="row row-30 mt-5">
                @foreach($videos as $video)
                <div class="col-md-6 col-lg-4 wow-outer">
                    <article class="post-classic wow slideInLeft">
                        <div class="post-classic-media">
                            <video controls class="w-100 rounded" style="background: #000; height: 350px; object-fit: cover;">
                                <source src="{{ $video['url'] }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>
                        </div>
                        <div class="post-classic-content mt-3">
                            <h5 class="post-classic-title">{{ $video['title'] }}</h5>
                            <div class="post-classic-time">
                                <span class="icon mdi mdi-account"></span> {{ $video['author'] }}
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>

            <div class="text-center mt-5">
                <p>Ingin karya Anda tampil di sini? <a href="{{ route('login') }}" class="text-primary">Gabung menjadi member sekarang!</a></p>
            </div>
        </div>
    </section>
</x-frontend-layout>
