<!doctype html>
<?php
 define('SITE_KEY', '6LcCMuIUAAAAAEviuEodUbse5sChj2f6KDwoxlNf');
 define('SECRET_KEY', '6LcCMuIUAAAAAKyD_KW1mE9FMQdDTSO0_oT1QPAu');

 if (isset($_POST['submit'])){
     $username = $_POST['username'];
     $secretKey = ['6LcCMuIUAAAAAKyD_KW1mE9FMQdDTSO0_oT1QPAu'];
     $responseKey = $_POST['g-recaptcha-response'];
     $userIP = $_SERVER['REMOTE_ADDR'];

     $url = "";
     $response = file_get_contents($url);
     echo $response;
 }
?>

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

{{--    <meta name="viewport" content="width=device-width, initial-scale=1">v4.1.3--}}
{{--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
{{--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--}}

    <style>
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
            color: #ffffff;
            background-color: #f27420;
        }
        .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link{
            color: #f27420;
        }
        .genric-btn.primary{
            background-color: #010b1d;
        }
    </style>

    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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




{{--    <div class="form">--}}

{{--        <ul class="tab-group">--}}
{{--            <li class="tab genric-btn primary circle active"><a href="#signup">Sign Up</a></li>--}}
{{--            <li class="tab genric-btn primary circle "><a href="#login">Log In</a></li>--}}
{{--        </ul>--}}
{{--    <ul class="nav nav-tabs">--}}
{{--        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>--}}
{{--            <li class=""><a data-toggle="tab"  href="#signupw">Sign Up</a></li>--}}
{{--            <li class="tab genric-btn primary circle "><a href="#loginw">Log In</a></li>--}}
{{--    </ul>--}}
    <div class="container">
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
       <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Registar</a>
    </div>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <br><br>
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
                                                    &nbsp; &nbsp;
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
                                        <br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card">


                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <br><br>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right"></label>

                                                <div class="g-recaptcha col-md-6" data-sitekey="<?php echo SITE_KEY; ?>"></div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="genric-btn primary circle">
                                                        {{ __('Registar') }}
                                                    </button>
                                                </div>
                                            </div>
                                            <br>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>

            </div>
        </div>
    </div>



{{--


        </div><!-- tab-content -->
    </div>
{{--    </div> <!-- /form -->--}}




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

        $('.form').find('input, textarea').on('keyup blur focus', function (e) {

            var $this = $(this),
                label = $this.prev('label');

            if (e.type === 'keyup') {
                if ($this.val() === '') {
                    label.removeClass('active highlight');
                } else {
                    label.addClass('active highlight');
                }
            } else if (e.type === 'blur') {
                if( $this.val() === '' ) {
                    label.removeClass('active highlight');
                } else {
                    label.removeClass('highlight');
                }
            } else if (e.type === 'focus') {

                if( $this.val() === '' ) {
                    label.removeClass('highlight');
                }
                else if( $this.val() !== '' ) {
                    label.addClass('highlight');
                }
            }

        });

        $('.tab a').on('click', function (e) {

            e.preventDefault();

            $(this).parent().addClass('active');
            $(this).parent().siblings().removeClass('active');

            target = $(this).attr('href');

            $('.tab-content > div').not(target).hide();

            $(target).fadeIn(600);

        });




    </script>
</body>
</html>
