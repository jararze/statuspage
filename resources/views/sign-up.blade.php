<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: RedAlert Incident Management :: Sign Up</title>
    <!-- Favicon-->
    <link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/authentication.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/color_skins.css')}}">
</head>

<body class="theme-orange">
<div class="authentication">
    <div class="card">
        <div class="body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header slideDown">
                        <div class="logo"><img src="assets/images/logo.png" alt="RedAlert"></div>
                        <h1>RedAlert Admin</h1>
                        <ul class="list-unstyled l-social">
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a></li>
                            <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <form class="col-lg-12" id="sign_in" method="POST" action="/store">
                    @csrf
                    <h5 class="title">Register a new membership</h5>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="text" class="form-control" name="name">
                            <label class="form-label">Name Surname</label>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="email" class="form-control" name="email">
                            <label class="form-label">Email Address</label>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password">
                            <label class="form-label">Password</label>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input type="password" class="form-control" name="password_confirmation">
                            <label class="form-label">Confirm Password</label>
                        </div>
                    </div>
                    <div>
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink" name="accept">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of
                                usage</a>.</label>
                    </div>
                    <div class="col-lg-12">
                        {{--                    <a href="javascript:void(0);" class="btn btn-raised btn-primary waves-effect">SIGN UP</a>--}}
                        <button type="submit" class="btn btn-raised btn-primary waves-effect">SIGN UP</button>
                    </div>
                </form>
                <div class="col-lg-12 m-t-20">
                    <a href="/login">You already have a membership?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
</body>
</html>
