
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} </title>
    <!--====== Bootstrap ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--====== Font Awesome ======-->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome/css/all.min.css')}}">
    <!--====== Flaticon ======-->
    <link rel="stylesheet" href="{{asset('assets/fonts/flaticon/flaticon.css')}}">
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <!--====== Slick Slider ======-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--====== Nice Select  ======-->
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">
    <!--====== Main Stylesheet ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!--====== Responsive Stylesheet ======-->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Place favicon in the root directory -->
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">

    @stack('styles')
    {{--  @livewireStyles  --}}
</head>
<body>
    <!--======= Start Preloader =======-->
    <div class="preloader">
        <img class="preloader-image" width="80" src="{{asset('assets/img/preloader-logo.png')}}" alt="preloader {{config('app.name')}}"/>
    </div> <!-- /.preloader -->
    <!--======= End Preloader =======-->
    <!--====== Start Header Area ======-->
    {{--  @include('layouts.frontend.components.header')  --}}
    <!--====== End Header Area ======-->
    <!--====== Start Hero Area ======-->
      @yield('content')


      @component('layouts.frontend.components.footer')

      @endcomponent

    <!--====== End Footer Area ======-->
    <!--======= Scroll To Top =======-->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top bg-red" style="    margin-bottom: 60px;"><i class="fa fa-angle-up"></i></a>
    @livewireScripts
    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/20591293.js"></script>
  <!-- End of HubSpot Embed Code -->
    <!--====== Optional Javascript ======-->
    <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
    <!--====== Popper JS ======-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!--====== Bootstrap JS ======-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!--====== Slick Slider JS ======-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!--====== Wow JS ======-->
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <!--====== Nice Select ======-->
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <!--====== Counter Up JS ======-->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!--====== Magnific Popup JS ======-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--====== Waypoint JS ======-->
    <script src="{{asset('assets/js/jquery.waypoints.js')}}"></script>
    <!--====== Main Script ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
