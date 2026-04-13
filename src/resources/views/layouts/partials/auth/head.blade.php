<base href="../../../">
<meta charset="utf-8">
<meta name="author" content="Softnio">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Codekarya Digital Solution Login">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Fav Icon  -->
<link rel="shortcut icon" href="{{ asset('frontend/images/favicon.png') }}">

<!-- Page Title  -->
<title>@yield('title', 'Login') | Codekarya Digital Solution</title>

<!-- StyleSheets  -->
<link rel="stylesheet" href="{{ asset('src/assets/css/dashlite.css?ver=3.2.3') }}">
<link id="skin-default" rel="stylesheet" href="{{ asset('src/assets/css/theme.css?ver=3.2.3') }}">

<style>
    .pg-auth {
        background-image: url("{{ asset('frontend/images/login-bg.png') }}");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .nk-auth-body {
        background: transparent !important;
        box-shadow: none !important;
        padding: 20px;
    }
    /* Warna teks agar kontras dengan background gelap */
    .nk-block-title, .form-label, .form-note-s2, .nk-auth-footer, p, span, .overline-title {
        color: #ffffff !important;
    }
    .form-control {
        background: rgba(255, 255, 255, 0.1) !important;
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: #ffffff !important;
    }
    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.6) !important;
    }
    .link-primary {
        color: #00e5ff !important; /* Warna cyan terang agar menonjol */
    }
    .brand-logo img {
        max-height: 120px !important;
        width: auto !important;
    }
    .brand-logo {
        padding-bottom: 50px !important;
    }
</style>
