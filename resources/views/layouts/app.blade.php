<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Boa Imagem') }}</title>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset("css/custom.css")}}" />
        <link rel="stylesheet" href="{{asset("css/styles.css")}}" />


        <!-- BEGIN: CSS -->
        <link rel="stylesheet" href="css/site/animate.css">
        <link rel="stylesheet" href="css/site/fontawesome-all.css">
        <link rel="stylesheet" href="css/site/boozy-icons.css">
        <link rel="stylesheet" href="css/site/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/site/owl.carousel.min.css">
        <link rel="stylesheet" href="css/site/settings.css">
        <link rel="stylesheet" href="css/site/slick.css">
        <link rel="stylesheet" href="css/site/aos.css">
        <link rel="stylesheet" href="css/site/ignore_for_wp.css">
        <link rel="stylesheet" href="css/site/preset.css">
        <link rel="stylesheet" href="css/site/theme.css">
        <link rel="stylesheet" href="css/site/responsive.css">
        <!-- END: CSS -->

        <!-- swiper css -->
        {{-- <link rel="stylesheet" href="{{asset("css/swiper.min.css")}}"> --}}

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        @livewireStyles
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body id="magicCursor">
        <div class="main myScroller">

            <!-- Page Header -->
            @if (Route::currentRouteName()==='home')
                @include('layouts.partials.header')
            @else
                @include('layouts.partials.header')
            @endif
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            <!-- Page Footer -->
            @include('layouts.partials.footer')

        </div>
        <!-- BEGIN: Back To Top -->
        <a class="magic-hover" data-radius="50%" data-border-color="#009cff" href="javascript:void(0);" id="backtotop"><i class="boozy-long-up-arrow"></i></a>
        <!-- END: Back To Top -->
        <!-- BEGIN: magicMouse -->
        <div id="magic-mouse"><div id="ball"></div></div>
        <!-- END: magicMouse -->
        <!-- BEGIN: Right Sidebar -->
        <x-right-sidebar>
        </x-right-sidebar>
        <!-- END: Right Sidebar -->



    </body>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c23503b397.js" crossorigin="anonymous"></script>



    <!-- BEGIN: JS -->

    <script src="js/site/jquery.js"></script>
    <script src="js/site/shuffle.min.js"></script>
    <script src="js/site/owl.carousel.min.js"></script>
    <script src="js/site/jquery.appear.js"></script>
    <script src="js/site/jquery.themepunch.tools.min.js"></script>
    <script src="js/site/jquery.themepunch.revolution.min.js"></script>
    <script src="js/site/extensions/revolution.extension.auctions.min.js"></script>
    <script src="js/site/extensions/revolution.extension.carousel.min.js"></script>
    <script src="js/site/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/site/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/site/extensions/revolution.extension.migration.min.js"></script>
    <script src="js/site/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/site/extensions/revolution.extension.parallax.min.js"></script>
    <script src="js/site/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/site/extensions/revolution.extension.video.min.js"></script>
    <script src="js/site/gsap.min.js"></script>
    <script src="js/site/ScrollTrigger.min.js"></script>
    <script src="js/site/aos.js"></script>
    <script src="js/site/common.js"></script>
    <script src="js/site/theme.js"></script>
    <!-- END: JS -->
</html>
