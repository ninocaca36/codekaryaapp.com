<x-auth-layout>
    @section('title', 'Sign In')

    <div class="nk-block nk-block-middle nk-auth-body wide-sm" style="margin: auto; text-align: center;">
        @include('auth.partials.login.login-form')
        
        @include('auth.partials.login.login-footer')
    </div><!-- .nk-block -->
</x-auth-layout>