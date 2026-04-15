<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('layouts.partials.backend.head')
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        @include('layouts.partials.backend.sidebar')
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                 @include('layouts.partials.backend.main')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    {{ $slot }}
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
   
    <!-- JavaScript -->
    @include('layouts.partials.backend.scripts')
</body>

</html>