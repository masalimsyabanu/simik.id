
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sekolah Islam Maktab Ibnu Khaldu</title>
    <meta name="author" content="Sekolah Islam Maktab Ibnu Khaldu">
    <meta name="description" content="Website Resmi Sekolah Islam Maktab Ibnu Khaldun">
    <meta name="keywords" content="Sekolah Islam, Sekolah Islam Indonesia, Maktab Ibnu Khaldun, Sekolah Islam Maktab Ibnu Khaldu">
    <meta name="robots" content="INDEX,FOLLOW">


    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{asset('logo/logo-simik.jpg')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('logo/logo-simik.jpg')}}" type="image/x-icon">

    @yield('page-styles')

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Jost:wght@400;500&display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="frontend/css/app.min.css"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{asset('frontend/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body>


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here
	******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    <div class="preloader  ">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div><!--==============================
    Mobile Menu
  ============================== -->
    @include('layouts.frontend.menu-wrapper')<!--==============================
    Sidemenu
============================== -->
    @include('layouts.frontend.sidemenu')<!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block  ">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    @include('layouts.frontend.header')


    <!--==============================
        Content Area
    ==============================-->

    @yield('content')

    <!--==============================
			Footer Area
	==============================-->
    @include('layouts.frontend.footer')<!-- Scroll To Top -->
    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('frontend/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('frontend/js/slick.min.js')}}"></script>
    <!-- <script src="frontend/js/app.min.js"></script> -->
    <!-- Layerslider -->
    <script src="{{asset('frontend/js/layerslider.utils.js')}}"></script>
    <script src="{{asset('frontend/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('frontend/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- jquery ui -->
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('frontend/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('frontend/js/main.js')}}"></script>


</body>

</html>
