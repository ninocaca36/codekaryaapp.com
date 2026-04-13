<div class="nk-block nk-block-middle nk-auth-body">
    <div class="brand-logo pb-5">
        <a href="{{ url('/') }}" class="logo-link">
            <img class="logo-light logo-img logo-img-lg" src="{{ asset('frontend/images/login.png') }}" alt="logo" style="mix-blend-mode: multiply;">
            <img class="logo-dark logo-img logo-img-lg" src="{{ asset('frontend/images/login.png') }}" alt="logo-dark" style="mix-blend-mode: screen;">
        </a>
    </div>
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h5 class="nk-block-title">Sign-In</h5>
            <div class="nk-block-des">
                <p>Akses panel Codekarya menggunakan email dan kata sandi Anda.</p>
            </div>
        </div>
    </div><!-- .nk-block-head -->

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="form-validate is-alter text-start" autocomplete="off">
        @csrf
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="email">Email</label>
                <a class="link link-primary link-sm" tabindex="-1" href="#">Butuh Bantuan?</a>
            </div>
            <div class="form-control-wrap">
                <input autocomplete="off" type="email" name="email" class="form-control form-control-lg" required id="email" placeholder="Masukkan alamat email Anda" value="{{ old('email') }}">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div><!-- .form-group -->
        <div class="form-group">
            <div class="form-label-group">
                <label class="form-label" for="password">Kata Sandi</label>
                @if (Route::has('password.request'))
                    <a class="link link-primary link-sm" tabindex="-1" href="{{ route('password.request') }}">Lupa Sandi?</a>
                @endif
            </div>
            <div class="form-control-wrap">
                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                </a>
                <input autocomplete="current-password" type="password" name="password" class="form-control form-control-lg" required id="password" placeholder="Masukkan kata sandi Anda">
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div><!-- .form-group -->
        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-primary btn-block">Masuk</button>
        </div>
    </form><!-- form -->

    <div class="form-note-s2 pt-4"> Baru di platform kami? <a href="{{ route('register') }}">Buat akun</a>
    </div>
    <div class="text-center pt-4 pb-3">
        <h6 class="overline-title overline-title-sap"><span>ATAU</span></h6>
    </div>
    <ul class="nav justify-center gx-4">
        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Facebook</a></li>
        <li class="nav-item"><a class="link link-primary fw-normal py-2 px-3" href="#">Google</a></li>
    </ul>
</div><!-- .nk-block -->
