<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Codekarya">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Register | Codekarya</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('src/assets/css/dashlite.css?ver=3.2.3') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('src/assets/css/theme.css?ver=3.2.3') }}">
    
    <style>
        .nk-split-page {
            min-height: 100vh;
            background-image: url('{{ asset('frontend/images/slider-minimal-slide-2-1920x888.jpg') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .nk-auth-container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 2rem;
            width: 100%;
            max-width: 450px;
        }
        .brand-logo img {
            max-height: 60px;
        }
    </style>
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content">
                    <div class="nk-split-page">
                        <div class="nk-auth-container">
                            <div class="nk-block nk-block-middle nk-auth-body">
                                <div class="brand-logo pb-4 text-center">
                                    <a href="{{ url('/') }}" class="logo-link">
                                        <img src="{{ asset('frontend/images/logo-default-codekarya.png') }}" alt="logo">
                                    </a>
                                </div>
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title">Register Account</h5>
                                        <div class="nk-block-des">
                                            <p>Create a new account at Codekarya</p>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    
                                    <!-- Name -->
                                    <div class="form-group">
                                        <label class="form-label" for="name">Full Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Enter your full name" required autofocus>
                                            @error('name')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email address" required>
                                            @error('email')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" id="password" name="password" placeholder="Create a password" required>
                                            @error('password')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group">
                                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form><!-- form -->
                                
                                <div class="form-note-s2 pt-4 text-center"> 
                                    Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
                                </div>
                            </div><!-- .nk-block -->
                        </div><!-- .nk-auth-container -->
                    </div><!-- .nk-split-page -->
                </div>
            </div>
        </div>
    </div>
    <!-- JavaScript -->
    <script src="{{ asset('src/assets/js/bundle.js?ver=3.2.3') }}"></script>
    <script src="{{ asset('src/assets/js/scripts.js?ver=3.2.3') }}"></script>
</body>
</html>