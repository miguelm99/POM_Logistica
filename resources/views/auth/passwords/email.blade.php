<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reset de password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../inds/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->


    <!-- CSS here -->
    <link rel="stylesheet" href="../inds/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../inds/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../inds/assets/css/gijgo.css">
    <link rel="stylesheet" href="../inds/assets/css/slicknav.css">
    <link rel="stylesheet" href="../inds/assets/css/animate.min.css">
    <link rel="stylesheet" href="../inds/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../inds/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../inds/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../inds/assets/css/slick.css">
    <link rel="stylesheet" href="../inds/assets/css/nice-select.css">
    <link rel="stylesheet" href="../inds/assets/css/style.css">
    <link rel="stylesheet" href="../inds/assets/css/responsive.css">
</head>

<body>

<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="../inds/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<!-- Header Start -->
<div class="header-area">
    <div class="main-header ">
        <div class="header-top top-bg d-none d-lg-block">
            <div class="container">
                <div class="col-xl-12">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="header-info-left">
                            <ul>
                                <li>+880166 253 232</li>
                                <li>info@domain.com </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom  header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-1 col-md-1">
                        <div class="logo">
                            <img src="../inds/assets/img/logo/logo.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-8">
                        <!-- Main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-3">
                        <!-- Header-btn -->
                        <div class="header-btn d-none d-lg-block">
                            <a href="{{URL::to('/')}}" class="get-btn">Voltar a trás</a>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<br><br><br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pedido de Nova Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envia o link de reset password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>



<!-- End Align Area -->

<!-- Footer Start-->
<div class="footer-area footer-bg footer-padding">
    <div class="container">



                    <!-- logo -->
                    <div class="footer-logo">
                        <a href="index.blade.php"><img src="../inds/assets/img/logo/logo2_footer.png" alt=""></a>
                    </div>



    </div>
</div>
<!-- footer-bottom aera -->
<div class="footer-bottom-area footer-bg">
    <div class="container">
        <div class="footer-border">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-xl-10 col-lg-10 ">
                    <div class="footer-copy-right">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2">
                    <div class="footer-social f-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-globe"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="../inds/assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="../inds/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="../inds/assets/js/popper.min.js"></script>
<script src="../inds/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="../inds/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="../inds/assets/js/owl.carousel.min.js"></script>
<script src="../inds/assets/js/slick.min.js"></script>
<!-- Date Picker -->
<script src="../inds/assets/js/gijgo.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="../inds/assets/js/wow.min.js"></script>
<script src="../inds/assets/js/animated.headline.js"></script>
<script src="../inds/assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="../inds/assets/js/jquery.scrollUp.min.js"></script>
<script src="../inds/assets/js/jquery.nice-select.min.js"></script>
<script src="../inds/assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="../inds/assets/js/contact.js"></script>
<script src="../inds/assets/js/jquery.form.js"></script>
<script src="../inds/assets/js/jquery.validate.min.js"></script>
<script src="../inds/assets/js/mail-script.js"></script>
<script src="../inds/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="../inds/assets/js/plugins.js"></script>
<script src="../inds/assets/js/main.js"></script>

<script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        disableDaysOfWeek: [0, 0],
        //     icons: {
        //      rightIcon: '<span class="fa fa-caret-down"></span>'
        //  }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
    var timepicker = $('#timepicker').timepicker({
        format: 'HH.MM'
    });
</script>
</body>
</html>


{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Pedido de Nova Password') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    <form method="POST" action="{{ route('password.email') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Envia o link de reset password') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
