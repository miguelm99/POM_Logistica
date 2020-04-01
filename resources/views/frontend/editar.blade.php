<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<link rel="shortcut icon" type="image/x-icon" href="inds/assets/img/favicon.png">
	<!-- Place favicon.ico in the root directory -->


 <!-- CSS here -->
   <link rel="stylesheet" href="inds/assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="inds/assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="inds/assets/css/gijgo.css">
   <link rel="stylesheet" href="inds/assets/css/slicknav.css">
   <link rel="stylesheet" href="inds/assets/css/animate.min.css">
   <link rel="stylesheet" href="inds/assets/css/magnific-popup.css">
   <link rel="stylesheet" href="inds/assets/css/fontawesome-all.min.css">
   <link rel="stylesheet" href="inds/assets/css/themify-icons.css">
   <link rel="stylesheet" href="inds/assets/css/slick.css">
   <link rel="stylesheet" href="inds/assets/css/nice-select.css">
   <link rel="stylesheet" href="inds/assets/css/style.css">
   <link rel="stylesheet" href="inds/assets/css/responsive.css">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="inds/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @include('frontend.header')

    <br><br><br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
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

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Lembrar de mim') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="genric-btn primary circle">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="genric-btn primary-border circle" href="{{ route('password.request') }}">
                                            {{ __('Esqueces-te da password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>



	<!-- End Align Area -->

    @include('frontend.footer')
<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="inds/assets/js/vendor/modernizr-3.5.0.min.js"></script>

		<!-- Jquery, Popper, Bootstrap -->
		<script src="inds/assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="inds/assets/js/popper.min.js"></script>
        <script src="inds/assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="inds/assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="inds/assets/js/owl.carousel.min.js"></script>
        <script src="inds/assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="inds/assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="inds/assets/js/wow.min.js"></script>
		<script src="inds/assets/js/animated.headline.js"></script>
		<script src="inds/assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="inds/assets/js/jquery.scrollUp.min.js"></script>
        <script src="inds/assets/js/jquery.nice-select.min.js"></script>
		<script src="inds/assets/js/jquery.sticky.js"></script>

        <!-- contact js -->
        <script src="inds/assets/js/contact.js"></script>
        <script src="inds/assets/js/jquery.form.js"></script>
        <script src="inds/assets/js/jquery.validate.min.js"></script>
        <script src="inds/assets/js/mail-script.js"></script>
        <script src="inds/assets/js/jquery.ajaxchimp.min.js"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="inds/assets/js/plugins.js"></script>
        <script src="inds/assets/js/main.js"></script>

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
