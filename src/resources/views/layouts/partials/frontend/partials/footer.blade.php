<!-- Page Footer-->
<footer class="section footer-linked bg-gray-700 novi-bg novi-bg-img" data-preset='{"title":"Footer Linked","category":"footers","id":"footer-linked"}'>
  <div class="footer-linked-main">
    <div class="container">
      <div class="row row-50">
        <div class="col-lg-8">
          <h4>Quick Links</h4>
          <hr class="offset-right-1">
          <div class="row row-20">
            <div class="col-6 col-sm-3">
              <ul class="list list-xs">
                <li><a href="services.html">Services</a></li>
                <li><a href="single-service.html">Single Service</a></li>
                <li><a href="contacts.html">Contacts</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="privacy-policy.html">Terms of Use</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-3">
              <ul class="list list-xs">
                <li><a href="#">Blog</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Single Project</a></li>
                <li><a href="#">Single Job</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-3">
              <ul class="list list-xs">
                <li><a href="#">Careers</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Single Project</a></li>
                <li><a href="#">Our History</a></li>
                <li><a href="#">Single Job</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-3">
              <ul class="list list-xs">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">LinkedIn</a></li>
                <li><a href="#">Pinterest</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-7 col-lg-4">
          <h4>Contact Information</h4>
          <hr>
          <ul class="list-sm">
            <li class="object-inline"><span class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a class="link-default" href="#">10158 bekasi jabar<br> indonesia</a></li>
            <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span>
              <ul class="list-0">
                <li><a class="link-default" href="tel:#">+62 889-7320-8501</a></li>
                <li><a class="link-default" href="tel:#"></a></li>
              </ul>
            </li>
            <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a class="link-default" href="mailto:#">codekaryaapp@gmail.com</a></li>
          </ul>
        </div>
      </div><!-- .row -->

      <!-- Visitor Counter Widget -->
      @php
        use Shetabit\Visitor\Models\Visit;
        $footerTotalVisits   = Visit::count();
        $footerTodayVisits   = Visit::whereDate('created_at', \Carbon\Carbon::today())->count();
        $footerUniqueVisitors = Visit::distinct('ip')->count('ip');
      @endphp
      <div class="row mt-4 pt-4" style="border-top: 1px solid rgba(255,255,255,0.08);">
        <div class="col-12">
          <h6 class="mb-3" style="color: rgba(255,255,255,0.5); font-size: 0.75rem; letter-spacing: 1.5px; text-transform: uppercase;">Statistik Pengunjung</h6>
          <div class="d-flex flex-wrap gap-4">
            <!-- Total Visits -->
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(101,118,255,0.15); display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 1rem;">👁️</span>
              </div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">
                  {{ number_format($footerTotalVisits) }}
                </div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">Total Kunjungan</div>
              </div>
            </div>
            <!-- Today Visits -->
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(15,172,129,0.15); display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 1rem;">📅</span>
              </div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">
                  {{ number_format($footerTodayVisits) }}
                </div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">Hari Ini</div>
              </div>
            </div>
            <!-- Unique Visitors -->
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(255,190,55,0.15); display: flex; align-items: center; justify-content: center;">
                <span style="font-size: 1rem;">🌐</span>
              </div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">
                  {{ number_format($footerUniqueVisitors) }}
                </div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">IP Unik</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /Visitor Counter Widget -->

    </div><!-- .container -->
  </div>
  <div class="footer-linked-aside">
    <div class="container">
      <!-- Rights-->
      <p class="rights"><span>&copy;&nbsp;<span class="copyright-year"></span><span>&nbsp;</span><span>codekaryaapp.com</span><span>. All Rights Reserved. &nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></span></p>
    </div>
  </div>
</footer>