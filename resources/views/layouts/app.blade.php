<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Incident management app, for monitoring all your incidents.">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
        <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
        <link rel="stylesheet" href="{{ asset('/assets/css/color_skins.css') }}">
    </head>
    <body class="theme-black">
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
                <p>Please wait...</p>
                <div class="m-t-30"><img src="{{ asset('assets/images/logo.svg') }}" width="48" height="48" alt="RedAlert"></div>
            </div>
        </div>
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navBar')
            @include('layouts.sideBar')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @yield('content')
        </div>
        {{--<!-- Jquery Core Js -->--}}
        <script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
        <script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
        <script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
    </body>
</html>





{{--@yield('content')--}}

