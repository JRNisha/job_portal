<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.devsnews.com/template/biden/biden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Nov 2021 15:56:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Job Board Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.png in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('frontend/assets/css/main.css')}}">

    </head>
    <body>
        <!-- preloader -->
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- preloader end  -->



        <!-- header-start -->
        @include('frontend.fixed.header')

        <!-- header-ends -->

        <!-- sidebar area start -->
        <section class="sidebar__area">
            <div class="sidebar__shape" data-background="{{ url('frontend/assets/img/shape/hexa.png') }}"></div>
            <div class="sidebar__wrapper">
                <div class="sidebar__close">
                    <button class="sidebar__close-btn" id="sidebar__close-btn">
                        <span><i class="fal fa-times"></i></span>
                        <span>close</span>
                    </button>
                </div>
                <div class="sidebar__content">
                    <div class="logo mb-40">
                        <a href="index.html">
                            <img src="{{ url('frontend/assets/img/logo/logo-white.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu d-block"></div>
                    <div class="hedder-button mt-30">
                        <a class="h-btn h-btn-2 mb-15" href="#"><i class="far fa-user-circle"></i> Sign In</a>
                        <a class="h-btn h-btn-green h-btn-white" href="#"><i class="far fa-lock-alt"></i> Log In</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="body-overlay"></div>
        <!-- sidebar area end -->

        <main>

            <!-- hero-area start -->
            <section class="hero-area pos-rel">
                <div class="hero-shape d-none d-lg-block">
                    <span class="circle"></span>
                    <span class="circle circle-yellow"></span>
                    <span class="shape-plus">+</span>
                </div>
                <div class="hero-slider">
                    <div class="single-slider slider-height d-flex align-items-center align-items-xl-end"
                        data-background="{{ url('frontend/assets/img/slider/01.jpg') }}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-9 col-md-11">
                                    <div class="hero-content pos-rel mt-125">
                                        <div class="hero-dot-shape d-none d-lg-block">
                                            <img src="{{url('/frontend/assets/img/shape/dot-shape.png')  }}" alt="">
                                        </div>
                                        <div class="hero-slider-caption">
                                            <h2 data-animation="fadeInUp" data-delay=".7s"><span>2560</span> Thousands Dream
                                            Jobs Available Now</h2>
                                            <div class="job-hero-form">
                                                <form action="#">
                                                    <select>
                                                        <option value="1">Job Categories</option>
                                                        <option value="1">Web Design</option>
                                                        <option value="1">Logo Design</option>
                                                        <option value="1">Banner Design</option>
                                                        <option value="1">WP Developer</option>
                                                        <option value="1">Linux Expert</option>
                                                    </select>
                                                    <div class="job-input">
                                                        <input type="text" placeholder="Locations">
                                                    </div>
                                                    <button>Find Jobs <i class="far fa-arrow-right"></i></button>
                                                </form>
                                            </div>
                                            <div class="hero-profile mt-45">
                                                <h3>Popular Profile</h3>
                                                <a href="about.html"><img src="{{ url('frontend/assets/img/slider/hero-profile-img.png') }}" alt="profile"></a>
                                                <h3>3k+ Jobs Done</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 d-none d-xl-block">
                                    <div class="slider-img">
                                        <img src="{{url('/frontend/assets/img/slider/me.png')  }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
           @include('frontend.pages.home')

            <!-- hero-area end -->



            <!-- footer area start -->
            @include('frontend.fixed.footer')
                <!-- footer area end -->



            <!-- JS here -->
            <script src="{{ url('/frontend/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
            <script src="{{ url('/frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
            <script src="{{ url('/frontend/assets/js/vendor/waypoints.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/popper.min.js') }}"></script>
            <script src="{{ url( '/frontend/assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/owl.carousel.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/isotope.pkgd.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/slick.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/jquery.knob.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/jquery.appear.js') }}"></script>
            <script src="{{ url( '/frontend/assets/js/jquery.meanmenu.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/ajax-form.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/wow.min.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/jquery.counterup.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/jquery.scrollUp.min.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ url ('/frontend/assets/js/nice-select.min.js') }}"></script>
            <script src="{{  url('/frontend/assets/js/main.js') }}"></script>
    </body>

<!-- Mirrored from www.devsnews.com/template/biden/biden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Nov 2021 15:57:04 GMT -->
</html>
