<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from www.devsnews.com/template/biden/biden/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Nov 2021 15:56:45 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Job Portal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="{{url('frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.png in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{url('frontend/assets/css/bootstrap.min.css')}}">
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


        <!-- sidebar area end -->





           @yield('content')

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
