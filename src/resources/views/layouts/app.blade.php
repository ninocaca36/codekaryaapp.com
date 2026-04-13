<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    @include('layouts.partials.backend.head')
</head>

<body class="nk-body ui-rounder npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('layouts.partials.backend.sidebar')
            <!-- sidebar @e -->
            
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('layouts.partials.backend.header')
                <!-- main header @e -->
                
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                {{ $slot }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                
                <!-- footer @s -->
                @include('layouts.partials.backend.footer')
                <!-- footer @e -->
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