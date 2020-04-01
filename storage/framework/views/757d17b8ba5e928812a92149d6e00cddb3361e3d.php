<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>POM_Logística</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<link rel="shortcut icon" type="image/x-icon" href="inds/assets/img/favicon.ico">

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

    <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main>

        <?php if(\Session::has('success')): ?>
            <div class="alert alert-success">
                <ul>
                    <li><?php echo \Session::get('success'); ?></li>
                </ul>
            </div>
        <?php endif; ?>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="inds/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8 col-md-8">
                                <div class="hero__caption" data-background="inds/assets/img/hero/hero_color_bg.png">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" ><b>POM</b>_Logística</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                        <a href="industries.blade.php" class="btn hero-btn">Nossos serviços</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="inds/assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-8 col-md-8">
                                <div class="hero__caption" data-background="inds/assets/img/hero/hero_color_bg.png">
                                    <h1 data-animation="fadeInUp" data-delay=".4s" ><b>POM</b>_Logística!</h1>
                                    <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmo.</p>
                                    <!-- Hero-btn -->
                                    <div class="hero__btn" data-animation="fadeInUp" data-delay=".7s">
                                        <a href="industries.blade.php" class="btn hero-btn">Our Services</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Services Area Start -->
        <div class="services-area d-flex justify-content-lg-between">
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="inds/assets/img/icon/services_icon_1.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Automotive Manufacturing</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.blade.php" class="arrow-btn"><img src="inds/assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
            <div class="single-services mb-30">
                <div class="services-icon">
                    <img src="inds/assets/img/icon/services_icon_2.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Heavy industry market</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.blade.php" class="arrow-btn"><img src="inds/assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
            <div class="single-services s-bg mb-30">
                <div class="services-icon">
                    <img src="inds/assets/img/icon/services_icon_3.png" alt="">
                </div>
                <div class="services-caption">
                    <h4>Industry analysis</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                </div>
                <div class="services-btn">
                    <a href="industries.blade.php" class="arrow-btn"><img src="inds/assets/img/icon/arrow_icon.png" alt=""></a>
                </div>
            </div>
        </div>
        <!-- Services Area End -->

        <!-- Safe Industery Start -->
        <div class="safe-industery-area section-padd-top30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md pr-0">
                        <div class="safe-caption pt-10 mb-40">
                            <h2>Safe IndusterySolutions That Saves our Valuable Time and mony!</h2>
                            <p class="safe-pera-one">Logisti Group is a representative logistics operator providing full range of service in the sphere of customs clearance and transportation worldwide for any type of cargo.</p>
                            <p  class="safe-pera-two">Lorem ipsum dolor sit amet, consectetur ipis adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna oris aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                            <p  class="safe-pera-three"> exercitation ullamco laboris nisi ut aliquip ex ea commodo nsequat. Duis aute irure dolor in repr.</p>
                            <!-- btn -->
                            <a href="industries.blade.php" class="btn">Our Services</a>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6 pl-0">
                        <div class="safe-caption-right">
                            <div class="safe-img">
                                <img src="inds/assets/img/safe_industery/safe_industery_1.jpg" alt="">
                            </div>
                            <!-- img TOP caption -->
                            <div class="safe-alert-box">
                                <div class="row">
                                    <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 d-none d-sm-block">

                                        <div class="safe-alert" data-background="inds/assets/img/safe_industery/color_bg.png">
                                            <img src="inds/assets/img/icon/aleart_icon.png" alt="">
                                            <h4>Our Mission</h4>
                                            <p>Quis ipsum suspendisse ultrices gravidae Risus commodo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Safe Industery End -->

        <!-- Gallery Start-->
        <div class="gallery-area">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="inds/assets/img/gallery/gallery_1.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>01.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>01.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
                                    <a href="inds/work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="inds/assets/img/gallery/gallery_2.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>02.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>02.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
                                    <a href="inds/work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="inds/assets/img/gallery/gallery_3.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>03.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>03.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
                                    <a href="inds/work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                        <div class="gallery-box">
                            <div class="single-gallery">
                                <div class="gallery-img">
                                    <img src="inds/assets/img/gallery/gallery_2.png" alt="">
                                </div>
                                <div class="g-caption1">
                                    <span>04.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                </div>
                                <div class="g-caption2">
                                    <span>04.</span>
                                    <h4>Floride Chemicals Factory</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur smo adipiscing elit, sed do eiusmod tempor inciut labore et dolore magna ali.</p>
                                    <a href="inds/work.html" class="read-btn">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery End-->

        <!-- Team Start -->
        <div class="team-area section2-padding30">
            <div class="container">
                <div class="row">
                    <!-- Team Info -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="team-info mb-30 pt-45">
                          <h2>Our Team Best Mambers</h2>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ua. Ut enim ad minim veni.</p>

                          <a href="inds/contact.html" class="btn">Contact Us</a>
                        </div>
                    </div>
                    <!-- single Tem -->
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="inds/assets/img/team/h1__team_1.png" alt="">
                            </div>
                            <div class="team-caption">
                                <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="inds/assets/img/team/h1__team_2.png" alt="">
                            </div>
                            <div class="team-caption">
                                 <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="inds/assets/img/team/h1__team_3.png" alt="">
                            </div>
                            <div class="team-caption">
                                 <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="inds/assets/img/team/h1__team_4.png" alt="">
                            </div>
                            <div class="team-caption">
                                 <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="inds/assets/img/team/h1__team_5.png" alt="">
                            </div>
                            <div class="team-caption">
                                 <span><a href="#">Bruce Roberts</a></span>
                                <p>Team Officer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

        <!-- Testimonial Start -->
        <div class="testimonial-area t-bg testimonial-padding">
            <div class="container ">
               <div class="row d-flex justify-content-center">
                    <div class="col-xl-11 col-lg-11 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="inds/assets/img/icon/testimonial.png" alt="">
                                        <p>Logisti Group is a representative logistics operator providing full range of ser
                                            of customs clearance and transportation worl.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="inds/assets/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial text-center">
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="inds/assets/img/icon/testimonial.png" alt="">
                                        <p>Logisti Group is a representative logistics operator providing full range of ser
                                            of customs clearance and transportation worl.</p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                        <div class="founder-img">
                                            <img src="inds/assets/img/testmonial/Homepage_testi.png" alt="">
                                        </div>
                                       <div class="founder-text">
                                            <span>Jessya Inn</span>
                                            <p>Co Founder</p>
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- David Droga start -->
        <div class="david-droga-area section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="inds/assets/img/david/david_1.png" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>November 24, 2020 </li>
                                    <li> Manufacturing</li>
                                </ul>
                                <h2><a href="inds/single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
                                <a href="inds/single-blog.html" class="d-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <!-- single-david -->
                        <div class="single-david mb-30">
                            <div class="david-img">
                                <img src="inds/assets/img/david/david_2.png" alt="">
                            </div>
                            <div class="david-captoin">
                                <ul class="david-info">
                                    <li>November 24, 2020 </li>
                                    <li> Manufacturing</li>
                                </ul>
                                <h2><a href="inds/single-blog.html">David Droga Still Has Faith Advertising Dorga</a></h2>
                                <a href="inds/single-blog.html" class="d-btn">Read more</a>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- David Droga End -->

        <!-- Want To Work Start -->
        <div class="wantToWork-area w-padding">
            <div class="container">
                <div class="row d-flex align-items-end">
                    <div class="col-xl-6 col-lg-8 col-md-8">
                        <div class="wantToWork-caption">
                            <h2>Want To Work<br> With Us? Hit The Button.</h2>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4">
                       <div class="wantToWork-btn f-right">
                            <a href="#" class="white-btn">Let’s Work Toghter</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->

    </main>

    <?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    </body>
</html>
<?php /**PATH C:\xampp\htdocs\POM_Logistica\resources\views/frontend/index.blade.php ENDPATH**/ ?>
