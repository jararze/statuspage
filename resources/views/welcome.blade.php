<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>RedAlert</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

    <!-- Core Style Sheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <!-- Responsive Style Sheets -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <!-- Revolution Style Sheets -->
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css') }}">

</head>
<body>

<!--== Loader Start ==-->
<div id="loader-overlay">
    <div class="loader">
        <img src="{{ asset('assets/images/loader.svg') }}" width="80" alt="">
    </div>
</div>
<!--== Loader End ==-->

<!--== Wrapper Start ==-->
<div class="wrapper">

    <!--== Header Start ==-->
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav on no-full no-border">

        <!--== End Top Search ==-->
        <div class="container">

            <!--== Start Header Navigation ==-->
            <div class="navbar-header">
{{--                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="tr-icon ion-android-menu"></i> </button>--}}
{{--                <div class="logo"> <a href="index.html"> <img class="logo logo-display" src="assets/images/logo-white.png" alt=""> <img class="logo logo-scrolled" src="assets/images/logo-black.png" alt=""> </a> </div>--}}
            </div>
            <!--== End Header Navigation ==-->

        </div>


    </nav>
    <!--== Header End ==-->

    <!--== Hero Slider Start ==-->
    <section class="remove-padding relative view-height-100vh white-bg" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 display-table view-height-100vh">
                    <div class="v-align-middle text-left hero-text">
                        <div class="white-color">
                            <h2 class="font-400 cardo-font">Welcome to RedAlert</h2>
                            <h1 class="font-800">Advancing Incident Management With <span class="text-bottom-line">Smart</span> <span class="text-bottom-line">Strategy</span></h1>
                            <a class="btn btn-lg btn-light btn-rounded mt-20" href="/login">Login</a>
                            <a class="btn btn-lg btn-light btn-rounded mt-20" href="/register">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <video autoplay="" muted="" loop="" controls="" class="html5-video">
            <source src="assets/videos/IM.mp4" type="video/mp4">
            <source src="assets/videos/explore.webm" type="video/webm">
        </video>
    </section>
    <!--== Hero Slider End ==-->

    <!--== Go to Top  ==-->
    <a href="javascript:" id="return-to-top"><i class="icofont icofont-arrow-up"></i></a>
    <!--== Go to Top End ==-->

</div>
<!--== Wrapper End ==-->

<!--== Javascript Plugins ==-->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<script src="{{ asset('assets/js/master.js') }}"></script>

<!-- Revolution js Files -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('revolution/js/revolution.extension.video.min.js') }}"></script>
<!--== Javascript Plugins End ==-->

</body>
</html>
