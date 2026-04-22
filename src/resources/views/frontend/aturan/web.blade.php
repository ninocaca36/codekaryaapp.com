<x-frontend-layout>
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Panduan Proyek</h6>
                    <h1 class="breadcrumbs-custom-title">Alur Pembuatan Website</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('frontend.aturan.index') }}">Aturan</a></li>
                    <li class="active">Alur Web</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Overview-->
    <section class="section section-sm novi-bg novi-bg-img bg-default">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-md-10 col-lg-8 text-center">
                    <h3>Standar Pengembangan Aplikasi Web</h3>
                    <p>Codekarya menerapkan standar pengembangan yang terstruktur untuk memastikan setiap aplikasi web atau website yang dibangun memiliki kualitas tinggi, performa optimal, dan keamanan yang terjamin. Berikut adalah tahapan profesional yang kami gunakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Roadmap-->
    <section class="section section-lg bg-gray-100 novi-bg novi-bg-img">
        <div class="container">
            <div class="row row-50">
                <!-- Step 1 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-search74"></div>
                        <h4 class="box-minimal-title">1. Analisis Kebutuhan</h4>
                        <p class="box-minimal-text">Identifikasi tujuan, target audiens, dan fitur utama seperti sistem otentikasi, dashboard, dan notifikasi untuk memastikan solusi yang tepat sasaran.</p>
                    </article>
                </div>
                <!-- Step 2 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft" data-wow-delay=".1s">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-graph-bar"></div>
                        <h4 class="box-minimal-title">2. Perancangan Sistem</h4>
                        <p class="box-minimal-text">Penyusunan alur sistem (Workflow) dan desain basis data (ERD) yang efisien untuk mendukung skalabilitas aplikasi di masa depan.</p>
                    </article>
                </div>
                <!-- Step 3 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft" data-wow-delay=".2s">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-drawing12"></div>
                        <h4 class="box-minimal-title">3. Desain UI/UX</h4>
                        <p class="box-minimal-text">Transformasi konsep ke dalam tampilan visual menggunakan tools seperti Figma, fokus pada kemudahan penggunaan dan estetika modern.</p>
                    </article>
                </div>
                <!-- Step 4 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-cogwheel"></div>
                        <h4 class="box-minimal-title">4. Pemilihan Teknologi</h4>
                        <p class="box-minimal-text">Menggunakan framework terkini seperti Laravel atau CI4, dipadukan dengan MySQL dan teknologi frontend modern untuk stabilitas maksimal.</p>
                    </article>
                </div>
                <!-- Step 5 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft" data-wow-delay=".1s">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-code5"></div>
                        <h4 class="box-minimal-title">5. Development</h4>
                        <p class="box-minimal-text">Proses pengkodean profesional yang mencakup integrasi backend logika, manajemen database, dan tampilan responsif.</p>
                    </article>
                </div>
                <!-- Step 6 -->
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <article class="box-minimal wow slideInLeft" data-wow-delay=".2s">
                        <div class="box-minimal-icon novi-icon fl-bigmug-line-chat55"></div>
                        <h4 class="box-minimal-title">6. Fitur & Pengujian</h4>
                        <p class="box-minimal-text">Implementasi fitur tambahan seperti notifikasi real-time dan pengujian menyeluruh (Testing) untuk memastikan bebas dari bug.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Summary & Deployment -->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50 align-items-center">
                <div class="col-lg-6">
                    <h3>Rilis & Pemeliharaan</h3>
                    <p>Setelah pengujian selesai, aplikasi dideploy ke infrastruktur VPS/Hosting menggunakan teknologi Git dan Docker. Kami juga menyediakan layanan pemeliharaan untuk memastikan aplikasi tetap berjalan optimal.</p>
                    <ul class="list-marked">
                        <li>Optimasi Kecepatan Server</li>
                        <li>Backup Database Berkala</li>
                        <li>Pembaruan Keamanan Reguler</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="box-cta-light">
                        <h4 class="text-primary">Ringkasan Alur:</h4>
                        <p class="font-weight-bold">Analisis &rarr; Desain &rarr; Database &rarr; UI &rarr; Coding &rarr; Testing &rarr; Deploy &rarr; Maintenance</p>
                        <a class="button button-primary button-winona" href="{{ url('/contacts') }}">Konsultasi Proyek</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>