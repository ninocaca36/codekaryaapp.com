<!-- Penawaran Harga -->
<section class="section section-lg text-center novi-bg novi-bg-img" id="pricing-section">
    <div class="container">
        <h3 class="wow-outer text-center"><span class="wow slideInDown">Penawaran Harga Paket Website</span></h3>
        <p class="wow-outer"><span class="wow slideInUp" style="max-width: 800px; display: inline-block; color: #666;">Solusi investasi digital cerdas untuk percepatan bisnis Anda di era modern.</span></p>
        
        <div class="row row-30 justify-content-center pricing-wrapper wow-outer" style="margin-top: 50px;">
            <!-- Paket UMKM -->
            <div class="col-sm-6 col-md-4 wow slideInLeft">
                <article class="pricing-card">
                    <div class="pricing-card-header header-starter">
                        <div class="plan-icon"><span class="mdi mdi-rocket-launch-outline"></span></div>
                        <h4 class="plan-title">UMKM</h4>
                        <div class="plan-price">
                            <span class="currency">Rp</span>999k<span class="period">/sekali</span>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <ul class="plan-features">
                            <li><span class="mdi mdi-check-circle"></span> 1 Halaman Beranda</li>
                            <li><span class="mdi mdi-check-circle"></span> Domain (.com/.id)</li>
                            <li><span class="mdi mdi-check-circle"></span> Cloud Hosting 500MB</li>
                            <li><span class="mdi mdi-check-circle"></span> Mobile Responsif</li>
                            <li><span class="mdi mdi-check-circle"></span> WhatsApp Chat</li>
                            <li class="disabled"><span class="mdi mdi-close-circle"></span> Prioritas Maintenance</li>
                        </ul>
                        <div class="plan-footer">
                            <a class="button button-block button-primary-outline button-winona" href="#">Pilih Starter</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Paket Bisnis -->
            <div class="col-sm-6 col-md-4 wow slideInUp" data-wow-delay=".05s">
                <article class="pricing-card featured">
                    <div class="featured-badge">TERPOPULER</div>
                    <div class="pricing-card-header header-business">
                        <div class="plan-icon"><span class="mdi mdi-office-building"></span></div>
                        <h4 class="plan-title">BISNIS</h4>
                        <div class="plan-price">
                            <span class="currency">Rp</span>2.499k<span class="period">/sekali</span>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <ul class="plan-features">
                            <li><span class="mdi mdi-check-circle"></span> Hingga 5 Halaman</li>
                            <li><span class="mdi mdi-check-circle"></span> Domain (.com/.id)</li>
                            <li><span class="mdi mdi-check-circle"></span> Cloud Hosting 2GB</li>
                            <li><span class="mdi mdi-check-circle"></span> Sertifikat SSL Aman</li>
                            <li><span class="mdi mdi-check-circle"></span> Email Profesional</li>
                            <li><span class="mdi mdi-check-circle"></span> Maintenance 3 Bulan</li>
                        </ul>
                        <div class="plan-footer">
                            <a class="button button-block button-primary button-winona" href="#">Pilih Bisnis</a>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Paket Perusahaan -->
            <div class="col-sm-6 col-md-4 wow slideInRight" data-wow-delay=".1s">
                <article class="pricing-card">
                    <div class="pricing-card-header header-enterprise">
                        <div class="plan-icon"><span class="mdi mdi-crown-outline"></span></div>
                        <h4 class="plan-title">CORPORATE</h4>
                        <div class="plan-price">
                            <span class="price-label">NEGOSIASI</span>
                        </div>
                    </div>
                    <div class="pricing-card-body">
                        <ul class="plan-features">
                            <li><span class="mdi mdi-check-circle"></span> Unlimited Halaman</li>
                            <li><span class="mdi mdi-check-circle"></span> High Spec Hosting</li>
                            <li><span class="mdi mdi-check-circle"></span> Desain Eksklusif</li>
                            <li><span class="mdi mdi-check-circle"></span> SEO On-Page Full</li>
                            <li><span class="mdi mdi-check-circle"></span> Full Maintenance</li>
                            <li><span class="mdi mdi-check-circle"></span> Prioritas Support</li>
                        </ul>
                        <div class="plan-footer">
                            <a class="button button-block button-primary-outline button-winona" href="#">Pilih Premium</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>

        <!-- Maintenance & Hosting Info -->
        <div class="wow-outer" style="margin-top: 80px;">
            <div class="info-banner-modern wow slideInUp">
                <div class="row row-20 align-items-center">
                    <div class="col-lg-8 text-lg-left">
                        <h4 class="text-white">Layanan Maintenance & Hosting</h4>
                        <p class="text-white-80">Jaminan uptime 99.9% dengan dukungan teknis berkelanjutan. Website Anda aman, cepat, dan selalu terupdate tanpa repot.</p>
                    </div>
                    <div class="col-lg-4">
                        <div class="info-badges">
                            <span class="info-pill">Daily Backup</span>
                            <span class="info-pill">Security Patch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #pricing-section {
        background-color: #fcfdfe;
        position: relative;
        overflow: hidden;
    }
    .pricing-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0,0,0,0.03);
        position: relative;
        overflow: hidden;
    }
    .pricing-card:hover {
        transform: translateY(-15px) scale(1.02) rotate(0.5deg);
        box-shadow: 0 20px 50px rgba(109, 40, 217, 0.15);
        border-color: rgba(109, 40, 217, 0.2);
    }
    .pricing-card.featured {
        transform: scale(1.05);
        border: 2px solid #6d28d9;
        box-shadow: 0 15px 40px rgba(109, 40, 217, 0.1);
        z-index: 5;
    }
    .pricing-card.featured:hover {
        transform: scale(1.08) translateY(-15px);
    }
    .pricing-card-header {
        padding: 40px 20px;
        color: white;
        position: relative;
    }
    .header-starter { background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%); }
    .header-business { background: linear-gradient(135deg, #8b5cf6 0%, #6d28d9 100%); }
    .header-enterprise { background: linear-gradient(135deg, #4b5563 0%, #1f2937 100%); }
    
    .plan-icon { font-size: 40px; margin-bottom: 10px; opacity: 0.9; }
    .plan-title { font-weight: 800; letter-spacing: 2px; margin-bottom: 15px; }
    .plan-price { font-size: 36px; font-weight: 900; }
    .plan-price .currency { font-size: 18px; vertical-align: top; margin-right: 2px; }
    .plan-price .period { font-size: 14px; opacity: 0.8; font-weight: 400; }

    .pricing-card-body { padding: 40px 30px; flex-grow: 1; display: flex; flex-direction: column; }
    .plan-features { list-style: none; padding: 0; margin: 0 0 30px 0; text-align: left; flex-grow: 1; }
    .plan-features li { padding: 10px 0; font-size: 15px; color: #4b5563; display: flex; align-items: center; }
    .plan-features li .mdi { margin-right: 12px; font-size: 18px; }
    .plan-features li .mdi-check-circle { color: #10b981; }
    .plan-features li .mdi-close-circle { color: #d1d5db; }
    .plan-features li.disabled { color: #9ca3af; }

    .featured-badge {
        position: absolute;
        top: 20px;
        right: -35px;
        background: #fbbf24;
        color: #1e1b4b;
        padding: 5px 40px;
        transform: rotate(45deg);
        font-size: 10px;
        font-weight: 800;
        z-index: 10;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }
    
    .info-banner-modern {
        background: linear-gradient(90deg, #1e1b4b 0%, #312e81 100%);
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(30, 27, 75, 0.2);
    }
    .text-white-80 { color: rgba(255,255,255,0.8); }
    .info-pill {
        display: inline-block;
        background: rgba(255,255,255,0.1);
        border: 1px solid rgba(255,255,255,0.2);
        color: white;
        padding: 8px 20px;
        border-radius: 50px;
        font-weight: 600;
        margin: 5px;
        backdrop-filter: blur(5px);
    }
    .button-block { width: 100%; display: block; }
</style>
