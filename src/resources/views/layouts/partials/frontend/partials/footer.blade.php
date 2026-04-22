<!-- Page Footer-->
<footer class="section footer-linked bg-gray-700 novi-bg novi-bg-img" data-preset='{"title":"Footer Linked","category":"footers","id":"footer-linked"}'>
  <div class="footer-linked-main">
    <div class="container">
      <div class="row row-50 justify-content-lg-between">
        <!-- Quick Links -->
        <div class="col-sm-6 col-lg-3">
          <h4 class="text-uppercase font-weight-bold">Quick Links</h4>
          <hr class="offset-right-1">
          <ul class="list list-xs">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ route('frontend.blog.index') }}">Blog</a></li>
            <li><a href="{{ route('frontend.tentang-kami.index') }}">Tentang Kami</a></li>
            <li><a href="{{ route('frontend.aturan.index') }}">Aturan & Ketentuan</a></li>
            <li><a href="{{ url('/contacts') }}">Hubungi Kami</a></li>
          </ul>
        </div>

        <!-- Codekarya Office -->
        <div class="col-sm-6 col-lg-3">
          <h4 class="text-uppercase font-weight-bold">Virtual Office</h4>
          <hr>
          <ul class="list-sm">
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-map-marker text-primary"></span>
              <a class="link-default" href="#">Bekasi, Jawa Barat<br> Indonesia 10158</a>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-phone text-primary"></span>
              <a class="link-default" href="tel:+6288973208501">+62 889-7320-8501</a>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-email text-primary"></span>
              <a class="link-default" href="mailto:codekaryaapp@gmail.com">codekaryaapp@gmail.com</a>
            </li>
          </ul>
        </div>

        <!-- Co-Partner: PT. Maharani Selaras -->
        <div class="col-sm-6 col-lg-3">
          <h4 class="text-uppercase font-weight-bold">Co-Partner</h4>
          <hr>
          <p class="font-weight-bold text-white mb-1">PT. Maharani Selaras</p>
          <ul class="list-sm">
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-map-marker text-primary"></span>
              <a class="link-default" href="#" style="font-size: 0.85rem;">Jl. Manunggal Pratama No. 8, Jakarta Timur 13620</a>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-phone text-primary"></span>
              <ul class="list-0" style="font-size: 0.85rem;">
                <li><a class="link-default" href="tel:02121381721">021-21381721</a></li>
                <li><a class="link-default" href="tel:02122857178">021-22857178</a></li>
              </ul>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-clock text-primary"></span>
              <span class="link-default" style="font-size: 0.85rem;">Mon – Fri, 09.00 - 17.00</span>
            </li>
          </ul>
        </div>

        <!-- Partner: Arhen -->
        <div class="col-sm-6 col-lg-3">
          <h4 class="text-uppercase font-weight-bold">Partner</h4>
          <hr>
          <p class="font-weight-bold text-white mb-1">Arhen Inovasi Solusi</p>
          <ul class="list-sm">
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-map-marker text-primary"></span>
              <a class="link-default" href="#" style="font-size: 0.85rem;">Bellezza Office Tower, Jakarta Selatan 12210</a>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-phone text-primary"></span>
              <a class="link-default" href="tel:+6285128055093" style="font-size: 0.85rem;">+62 851-2805-5093</a>
            </li>
            <li class="object-inline">
              <span class="icon icon-md mdi mdi-email text-primary"></span>
              <a class="link-default" href="mailto:sales@arhen.co.id" style="font-size: 0.85rem;">sales@arhen.co.id</a>
            </li>
          </ul>
        </div>
      </div>

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
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(101,118,255,0.15); display: flex; align-items: center; justify-content: center;"><span style="font-size: 1rem;">👁️</span></div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">{{ number_format($footerTotalVisits) }}</div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">Total Kunjungan</div>
              </div>
            </div>
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(15,172,129,0.15); display: flex; align-items: center; justify-content: center;"><span style="font-size: 1rem;">📅</span></div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">{{ number_format($footerTodayVisits) }}</div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">Hari Ini</div>
              </div>
            </div>
            <div class="d-flex align-items-center gap-2">
              <div style="width: 38px; height: 38px; border-radius: 50%; background: rgba(255,190,55,0.15); display: flex; align-items: center; justify-content: center;"><span style="font-size: 1rem;">🌐</span></div>
              <div>
                <div style="font-size: 1.2rem; font-weight: 700; color: #fff; line-height: 1;">{{ number_format($footerUniqueVisitors) }}</div>
                <div style="font-size: 0.72rem; color: rgba(255,255,255,0.45);">IP Unik</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-linked-aside">
    <div class="container text-center">
      <p class="rights"><span>&copy;&nbsp;<span class="copyright-year"></span><span>&nbsp;</span><span>Codekarya APP</span><span>. All Rights Reserved. &nbsp;</span><a href="{{ url('/privacy-policy') }}">Privacy Policy</a></span></p>
    </div>
  </div>
</footer>