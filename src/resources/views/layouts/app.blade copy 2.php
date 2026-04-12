<!DOCTYPE html>
<html class="wide wow-animation" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  @include('layouts.partials.head')
  <body>
    @include('layouts.partials.preloader')
    <div class="page">
      @include('layouts.partials.navbar')
      
      <main>
        {{ $slot }}
      </main>

      @include('layouts.partials.footer')
    </div>
    @include('layouts.partials.scripts')
  </body>
</html>
</html>