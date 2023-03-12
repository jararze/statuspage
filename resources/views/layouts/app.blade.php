<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title> RedAlert Incident Management Teknicos :: @yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/color_skins.css') }}">
</head>
<body class="theme-black">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <p>Please wait...</p>
        <div class="m-t-30"><img src="{{ asset('assets/images/logo.svg') }}" width="48" height="48" alt="RedAlert">
        </div>
    </div>
</div>


@include('layouts.navBar')


@include('layouts.sideBar')


@yield('content')

<!-- Jquery Core Js -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
