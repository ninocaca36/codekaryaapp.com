<x-frontend-layout>
    
   <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark bg-image-dark novi-bg novi-bg-img" data-preset='{"title":"Breadcrumbs Classic","category":"header","reload":false,"id":"breadcrumbs-classic"}'>
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Kontak</h6>
              <h1 class="breadcrumbs-custom-title">Hubungi Kami</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active">Kontak</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- Overview-->
      <section class="section section-lg novi-bg novi-bg-img bg-default text-center">
        <div class="container">
          <div class="row row-50 justify-content-center">
            <div class="col-md-10 col-lg-8">
              <h3>Mari Berdiskusi</h3>
              <h4 class="offset-top-3">Punya pertanyaan atau ide proyek digital? Tim kami siap mendengarkan dan memberikan solusi terbaik untuk Anda.</h4>
              <p>Jangan ragu untuk menghubungi kami melalui saluran komunikasi di bawah ini atau kunjungi kantor mitra strategis kami. Kami berkomitmen untuk memberikan respon cepat dan layanan konsultasi yang profesional.</p>
            </div>
          </div>
        </div>
      </section>

     <section class="section section-sm novi-bg novi-bg-img bg-default">
        <div class="container text-center">
          <div class="layout-bordered">
            <!-- Codekarya Office -->
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-map-marker text-primary"></div>
                <h5 class="font-weight-bold">Codekarya Office</h5>
                <ul class="list-0">
                  <li>Bekasi, Jawa Barat, Indonesia</li>
                  <li><a class="link-default" href="tel:+6288973208501">+62 889-7320-8501</a></li>
                  <li><a class="link-default" href="mailto:codekaryaapp@gmail.com">codekaryaapp@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <!-- Co-Partner -->
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-office text-primary"></div>
                <h5 class="font-weight-bold">PT. Maharani Selaras</h5>
                <ul class="list-0">
                  <li>Jl. Manunggal Pratama No. 8, Jakarta Timur</li>
                  <li><a class="link-default" href="tel:02121381721">021-21381721</a> / <a class="link-default" href="tel:02122857178">22857178</a></li>
                  <li><a class="link-default" href="mailto:pt.maharaniselaras@gmail.com">maharaniselaras@gmail.com</a></li>
                </ul>
              </div>
            </div>
            <!-- Partner -->
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon novi-icon icon-lg mdi mdi-link-variant text-primary"></div>
                <h5 class="font-weight-bold">Arhen Inovasi Solusi</h5>
                <ul class="list-0">
                  <li>Bellezza Office Tower, Jakarta Selatan</li>
                  <li><a class="link-default" href="tel:+6285128055093">+62 851-2805-5093</a></li>
                  <li><a class="link-default" href="mailto:sales@arhen.co.id">sales@arhen.co.id</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-gray-100 novi-bg novi-bg-img" data-preset='{"title":"Contact Form & Map","category":"contacts","reload":true,"id":"contact-form-map"}'>
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row row-fix">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Contact Us</span></h3>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-10 row-fix">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@@Email @@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@@PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Your Message</label>
                          <textarea class="form-input" id="contact-message" name="message" data-constraints="@@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer">
                        <button class="button button-primary button-winona wow slideInRight" type="submit">Send Message</button>
                      </div>
                      <p>or use</p>
                      <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon novi-icon text-primary mdi mdi-facebook-messenger"></span>Messenger</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
            <div class="google-map-container google-map-align" data-zoom="4" data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-icon="images/gmap_marker.svg" data-icon-active="images/gmap_marker_active.svg" data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]">
              <div class="google-map"></div>
              <ul class="google-map-markers">
                <li data-location="9870 St Vincent Place, Glasgow, DC 45 Fr 45." data-description="9870 St Vincent Place, Glasgow"></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
</x-frontend-layout>