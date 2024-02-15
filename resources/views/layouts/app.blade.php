<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boa Imagem') }}</title>


    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="{{asset("css/styles.css")}}" /> --}}


    <!-- BEGIN: CSS -->
    <link rel="stylesheet" href="{{asset("css/site/bootstrap.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/animate.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/fontawesome-all.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/boozy-icons.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/lightslider.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/lightcase.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/settings.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/slick.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/aos.css")}}">

    <link rel="stylesheet" href="{{asset("css/site/ignore_for_wp.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/preset.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/theme.css")}}">
    <link rel="stylesheet" href="{{asset("css/site/responsive.css")}}">
    <!-- END: CSS -->

    {{-- @livewireStyles
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>

<body id="magicCursor">
    <!-- Preloader Start -->
    {{-- <div class="preloader-wrap">
        <div class="loader_bar"></div>
        <div id="precent"></div>
    </div> --}}
    <!-- Preloader End -->
    <div class="main myScroller">

        <!-- Page Header -->
        @include('layouts.partials.header')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- Page Footer -->
        @include('layouts.partials.footer')

    </div>
    <!-- BEGIN: Back To Top -->
    <a class="magic-hover" data-radius="50%" data-border-color="#009cff" href="javascript:void(0);" id="backtotop"><i
            class="boozy-long-up-arrow"></i></a>
    <!-- END: Back To Top -->
    <!-- BEGIN: magicMouse -->
    <div id="magic-mouse">
        <div id="ball"></div>
    </div>
    <!-- END: magicMouse -->
    <!-- BEGIN: Right Sidebar -->
    <x-right-sidebar>
    </x-right-sidebar>
    <!-- END: Right Sidebar -->

</body>

<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c23503b397.js" crossorigin="anonymous"></script>



<!-- BEGIN: JS -->
<script src="{{asset("js/site/jquery.js")}}"></script>
<script src="{{asset("js/site/popper.min.js")}}"></script>
<script src="{{asset("js/site/bootstrap.min.js")}}"></script>
<script src="{{asset("js/site/shuffle.min.js")}}"></script>
<script src="{{asset("js/site/owl.carousel.min.js")}}"></script>
<script src="{{asset("js/site/owl.carousel.filter.js")}}"></script>
<script src="{{asset("js/site/jquery.appear.js")}}"></script>
<script src="{{asset("js/site/jquery.nice-select.js")}}"></script>
<script src="{{asset("js/site/lightcase.js")}}"></script>
<script src="{{asset("js/site/lightslider.min.js")}}"></script>
<script src="{{asset("js/site/parallax.js")}}"></script>
<script src="{{asset("js/site/slick.js")}}"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCA_EDGVQleQtHIp2fZ-V56QFRbRL8cXT8"></script>

<script src="{{asset("js/site/jquery.themepunch.tools.min.js")}}"></script>
<script src="{{asset("js/site/jquery.themepunch.revolution.min.js")}}"></script>

<script src="{{asset("js/site/extensions/revolution.extension.auctions.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.carousel.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.kenburn.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.layeranimation.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.migration.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.navigation.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.parallax.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.slideanims.min.js")}}"></script>
<script src="{{asset("js/site/extensions/revolution.extension.video.min.js")}}"></script>

<script src="{{asset("js/site/gsap.min.js")}}"></script>
<script src="{{asset("js/site/ScrollTrigger.min.js")}}"></script>
<script src="{{asset("js/site/TweenMax.min.js")}}"></script>
<script src="{{asset("js/site/aos.js")}}"></script>
<script src="{{asset("js/site/core.js")}}"></script>

<script src="{{asset("js/site/common.js")}}"></script>
<script src="{{asset("js/site/theme.js")}}"></script>
<!-- END: JS -->

</html>
