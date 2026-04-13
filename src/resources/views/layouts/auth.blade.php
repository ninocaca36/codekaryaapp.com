<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="js">

<head>
    @include('layouts.partials.auth.head')
</head>

<body class="nk-body ui-rounder npc-default pg-auth">
    <div class="nk-app-root">
        <div class="nk-main">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials.auth.scripts')
</body>

</html>
