
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
<!-- Modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        
<div class="popupmain" id="popuprequest" style="display: block;">
    <a id="close1" class="closeico" href="javascript:;" title="" data-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></a>

    <div class="mmpopup">
       <div class="imgbx">
          <img src="{{asset('/assets/img/bgdrop.jpg')}}" alt="">
       </div>
       <div class="centercont">
          <h3>See Your Business ScaleUp with <span style="color: red">eDrop<span style="color: gray">Ship</span></span> </h3>
     
          <p>Enhance your clientele through eDropShip’s wide customer base. Find potential customers to expand the market for your products. Minimize the workload through our automated portal that offers </p>
          <ul>
               <li class="first"><i class="far fa-check"></i> Accelerated order management</li>
               <li><i class="far fa-check"></i> Synchronized inventory</li>
               <li class="last"><i class="far fa-check"></i> 100% Secured and automated payments</li>
             <img src="{{asset('/assets/img/phone-icon.png')}}" class="img-fluid d-block mt2" alt="">
             </ul>
          <div class="calldvs">
             <span>Discuss with our Design Expert Today!</span>
             <a href="tel:+447958557597" title="">+447958557597</a>
          </div>
       </div>
       <div class="formpop">
       <img src="{{asset('/assets/img/LOGO-Web.png')}}" alt="">
           @livewire('pop-form')
 
       </div>
    </div>
</div>         
    
    </div>
  </div>
</div>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BNNXY96PEM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BNNXY96PEM');
</script>
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
    <script type="text/javascript">
    $(document).ready(function() {
       
       $('.bd-example-modal-lg').modal('show')

    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

</body>
</html>
