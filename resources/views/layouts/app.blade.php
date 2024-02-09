<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Boa Imagem') }}</title>

        <!-- Fonts -->
        {{-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}
        <link rel="stylesheet" href="{{asset("css/custom.css")}}" />
        <link rel="stylesheet" href="{{asset("css/portfolio.css")}}" />
        <link rel="stylesheet" href="{{asset("css/styles.css")}}" />
        <link rel="stylesheet" href="{{asset("css/animations.css")}}" />
        <link rel="stylesheet" href="{{asset("css/slide.css")}}" />
        <link rel="stylesheet" href="{{asset("css/menu.css")}}" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        @livewireStyles
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div>

            <!-- Page Header -->
            @if (Route::currentRouteName()==='home')
                @include('layouts.partials.header')
            @else
                @include('layouts.partials.headerInternal')
            @endif




            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <!-- Page Footer -->
            @include('layouts.partials.footer')


        </div>

    </body>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c23503b397.js" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    {{-- <script src="{{ asset('js/site/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('js/site/jquery.mousewheel.js') }}"></script> --}}
    <script src="{{ asset('js/site/custom.js') }}"></script>
    <script src="{{ asset('js/site/slide.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    @livewireScripts

</html>
