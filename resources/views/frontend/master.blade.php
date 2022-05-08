<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Beranda RSIA Karunia Bunda</title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('asset/frontend/plugins/slick/slick-theme.css')}}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('asset/frontend/plugins/fancybox/jquery.fancybox.min.css')}}">

  <!-- Stylesheets -->
  <link href="{{asset('asset/frontend/css/style.css')}}" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="{{asset('asset/frontend/images/favicon.ico')}}" type="image/x-icon">
  <link rel="icon" href="{{asset('asset/frontend/images/favicon.ico')}}" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->



    @include('frontend.tools.header')

    <!--Main Header-->
    @include('frontend.tools.navbar')
    <!--End Main Header -->
    @yield('content')

    <!--footer-main-->
    @include('frontend.tools.footer')
    <!--End footer-main-->

  </div>
  <!--End pagewrapper-->


  <!--Scroll to top-->
  <div class="scroll-to-top scroll-to-target" data-target=".header-top">
    <span class="icon fa fa-angle-up"></span>
  </div>

  <script src="{{asset('asset/frontend/plugins/jquery.js')}}"></script>
  <script src="{{asset('asset/frontend/plugins/bootstrap.min.js')}}"></script>
  <script src="{{asset('asset/frontend/plugins/bootstrap-select.min.js')}}"></script>
  <!-- Slick Slider -->
  <script src="{{asset('asset/frontend/plugins/slick/slick.min.js')}}"></script>
  <!-- FancyBox -->
  <script src="{{asset('asset/frontend/plugins/fancybox/jquery.fancybox.min.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="{{asset('asset/frontend/plugins/google-map/gmap.js')}}"></script>

  <script src="{{asset('asset/frontend/plugins/validate.js')}}"></script>
  <script src="{{asset('asset/frontend/plugins/wow.js')}}"></script>
  <script src="{{asset('asset/frontend/plugins/jquery-ui.js')}}"></script>
  <script src="{{asset('asset/frontend/plugins/timePicker.js')}}"></script>
  <script src="{{asset('asset/frontend/js/script.js')}}"></script>
</body>

</html>
