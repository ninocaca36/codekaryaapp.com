<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    @include('layouts.partials.frontend.head')
</head>
<body>
    <div class="page">
        <!-- Page Header-->
        @include('layouts.partials.frontend.header')

        <!-- Page Content-->
        <main>
            {{ $slot }}
        </main>

        <!-- Page Footer-->
        @include('layouts.partials.frontend.footer')
    </div>

    <!-- Scripts-->
    @include('layouts.partials.frontend.scripts')
</body>
</html>
