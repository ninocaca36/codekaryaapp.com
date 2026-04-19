<x-frontend-layout>
    
   <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Tentang Kami</h6>
              <h1 class="breadcrumbs-custom-title">Mengenal Codekarya</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Tentang Kami</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg novi-bg novi-bg-img bg-default">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-6">
              <h3>Inovasi & Dedikasi</h3>
              <h4 class="offset-top-3">Menghubungkan Keahlian ITBU dengan Semangat Komunitas Kreatif Global.</h4>
              <p>Codekarya bukan sekadar platform; ini adalah sebuah misi untuk mengangkat martabat setiap karya digital di Indonesia. Didirikan oleh alumni <strong>Institut Teknologi Budi Utomo (ITBU)</strong>, kami memahami bahwa di balik setiap baris kode dan setiap menit video terdapat kerja keras yang luar biasa. Kami hadir untuk memastikan karya Anda tidak hanya dilihat, tetapi juga dihargai secara profesional.
              </p>
              <p>Kami mengundang para programmer, desainer, dan content creator untuk bergabung dalam ekosistem yang dirancang khusus untuk pertumbuhan, kolaborasi, dan kesuksesan bersama.</p>
              <div class="group group-middle"><a class="button button-primary button-winona" href="#our-history" data-waypoint-to="#our-history">Eksplorasi Perjalanan Kami</a><a class="button button-primary-outline button-winona" href="{{ url('/contacts') }}">Mulai Kolaborasi</a></div>
            </div>
            <div class="col-md-10 col-lg-6 col-xl-5"> <img class="img-responsive" src="{{ asset('frontend/images/large-features-1-470x334.png') }}" alt="" width="470" height="334"/>
            </div>
          </div>
        </div>
      </section>
      <!-- Why Choose Us-->
      <section class="section section-lg bg-default text-center">
        <div class="container">
          <h3 class="wow-outer"><span class="wow slideInUp">Kenapa Memilih Codekarya?</span></h3>
          <p class="wow-outer"><span class="text-width-1 wow slideInDown">Kami membangun ekosistem yang fokus pada kualitas, integritas, dan pertumbuhan karir Anda.</span></p>
          <div class="row row-50 row-xxl-70 offset-top-2">
            <div class="col-sm-6 col-md-4 wow-outer">
              <article class="box-light wow slideInLeft">
                <div class="box-light-icon novi-icon fl-bigmug-line-star-half"></div>
                <h4 class="box-light-title">Kualitas Profesional</h4>
                <p>Kami menerapkan standar tinggi untuk setiap karya yang dipublikasikan, memastikan portofolio Anda tampil elegan dan berkelas.</p>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow-outer">
              <article class="box-light wow slideInLeft" data-wow-delay=".05s">
                <div class="box-light-icon novi-icon fl-bigmug-line-graph-bar"></div>
                <h4 class="box-light-title">Pertumbuhan Karir</h4>
                <p>Dapatkan akses ke jaringan profesional, mentor dari ITBU, dan peluang kolaborasi yang dapat meningkatkan nilai jual Anda.</p>
              </article>
            </div>
            <div class="col-sm-6 col-md-4 wow-outer">
              <article class="box-light wow slideInLeft" data-wow-delay=".1s">
                <div class="box-light-icon novi-icon fl-bigmug-line-group"></div>
                <h4 class="box-light-title">Komunitas Solid</h4>
                <p>Bukan sekadar user, Anda adalah bagian dari keluarga kreator yang saling mendukung dan mengapresiasi setiap pencapaian.</p>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- History-->
      <section class="section section-lg bg-gray-700 novi-bg novi-bg-img" id="our-history">
        <div class="container">
          <!-- Timeline Classic-->
          <article class="timeline-classic">
            <div class="timeline-classic-item">
              <div class="timeline-classic-item-aside"><img class="timeline-classic-item-image" src="{{ asset('frontend/images/timeline-1-390x250.jpg') }}" alt="" width="390" height="250"/>
              </div>
              <div class="timeline-classic-item-divider"></div>
              <div class="timeline-classic-item-main">
                <p class="timeline-classic-item-title">Masa Pendirian</p>
                <p class="thumbnail-classic-item-subtitle">Berawal dari Visi di Institut Teknologi Budi Utomo (ITBU)
                </p>
                <p>Codekarya lahir dari semangat untuk menyatukan para ahli IT dan pembuat konten. Didorong oleh latar belakang pendidikan di ITBU, pendiri ingin menciptakan ekosistem yang menghargai setiap baris kode dan setiap frame konten sebagai karya profesional yang bernilai tinggi.
                </p>
              </div>
            </div>
          </article>
        </div>
      </section>
      <section class="section section-xs bg-primary-darker text-center novi-bg novi-bg-img" data-preset='{"title":"Thin CTA","category":"cta","id":"thin-cta"}'>
        <div class="container">
          <div class="row row-fix justify-content-center">
            <div class="col-sm-10 col-md-12">
              <div class="box-cta-thin">
                <h4 class="wow-outer"><span class="wow slideInRight">Siap untuk Melahirkan <span class="font-weight-bold">Karya Digital</span> Terbaik Anda Bersama Kami?</span></h4>
                <div class="wow-outer button-outer"><a class="button button-primary button-winona wow slideInLeft" href="{{ url('/register') }}">Bergabung Sekarang</a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-frontend-layout>