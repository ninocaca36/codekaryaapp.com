<div class="swiper-wrapper">

    <!-- SLIDE 1 (HERO UTAMA - FOKUS BISNIS) -->
    <div class="swiper-slide swiper-slide_video">
        <div class="vide_bg novi-vide position-relative" 
             data-vide-bg="{{ asset('frontend/video/city') }}" 
             data-vide-options="posterType: jpg">

            <div class="overlay-dark"></div>

            <div class="swiper-slide-caption">
                <div class="container text-center">
                    <div class="swiper-slide-text">

                        <h1 class="hero-title">
                            Jasa Pembuatan Aplikasi & Sistem Informasi
                        </h1>

                        <p class="hero-subtitle">
                            Solusi digital untuk perusahaan, instansi, dan bisnis Anda — cepat, aman, dan custom sesuai kebutuhan.
                        </p>

                        <div class="hero-cta mt-4">
                            <a href="https://wa.me/6281585831793?text=Halo%20Codekarya%2C%20saya%20ingin%20konsultasi%20mengenai%20pembuatan%20aplikasi/sistem%20informasi." target="_blank" class="btn btn-primary btn-lg">
                                Konsultasi Gratis
                            </a>
                            <a href="#portfolio" class="btn btn-outline-light btn-lg">
                                Lihat Portfolio
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SLIDE 2 (LAYANAN TAMBAHAN) -->
    <div class="swiper-slide" data-slide-bg="{{ asset('frontend/images/slider-minimal-slide-2-1920x888.jpg') }}">
        <div class="overlay-dark"></div>
        <div class="swiper-slide-caption">
            <div class="container text-center">
                <div class="swiper-slide-text">

                    <h2 class="hero-title">
                        Pembuatan Command Center Profesional
                    </h2>

                    <p class="hero-subtitle">
                        Solusi komunikasi terintegrasi untuk efisiensi operasional dan layanan pelanggan yang prima.
                    </p>

                    <a href="https://wa.me/6281585831793?text=Halo%20Codekarya%2C%20saya%20tertarik%20dengan%20layanan%20Command%20Center." target="_blank" class="btn btn-primary btn-lg mt-3">
                        Lihat Layanan
                    </a>

                </div>
            </div>
        </div>
    </div>

    <!-- SLIDE 3 (PENGADAAN IT & ATK) -->
    <div class="swiper-slide" data-slide-bg="{{ asset('frontend/images/slider-minimal-slide-3-1920x888.jpg') }}">
        <div class="overlay-dark"></div>
        <div class="swiper-slide-caption">
            <div class="container text-center">
                <div class="swiper-slide-text">

                    <h2 class="hero-title">
                        Pengadaan Barang & Jasa IT dan ATK
                    </h2>

                    <p class="hero-subtitle">
                        Penyediaan perangkat IT dan kebutuhan kantor dengan kualitas terbaik dan harga kompetitif.
                    </p>

                    <a href="https://wa.me/6281585831793?text=Halo%20Codekarya%2C%20saya%20ingin%20bertanya%20mengenai%20pengadaan%20barang/jasa%20IT." target="_blank" class="btn btn-outline-light btn-lg mt-3">
                        Hubungi Kami
                    </a>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- PAGINATION -->
<div class="swiper-pagination-outer container">
    <div class="swiper-pagination swiper-pagination-modern" data-index-bullet="true"></div>
</div>
@push('styles')
<style>
    .swiper-slider-minimal,
    .swiper-slider-minimal .swiper-slide {
        min-height: 600px;
    }

    .swiper-slide {
        background-position: center center !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
    }

    .overlay-dark {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.55);
        z-index: 1;
    }

    .swiper-slide-caption {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 46px;
        font-weight: 700;
        color: #fff;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .hero-subtitle {
        font-size: 20px;
        color: #eee;
        margin-top: 15px;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }

    .hero-cta .btn {
        margin: 5px;
        padding: 12px 25px;
    }
</style>
@endpush