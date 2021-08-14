
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
        @include('layouts.frontend.components.header')
    <!--====== End Header Area ======-->
    <!--====== Start Hero Area ======-->
      @yield('content')


    <footer class="footer-area footer-area-v3">
        <div class="container">
            <div class="footer-area-internal border-bottom-purple">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="single-footer-widget footer-text-widget">
                            <h5 class="widget-title">About Landio</h5>
                            <p>Sed ut perspiciatis undmnis iste natus error sit voluptatem accusantium dolore udantiuy totam rem aperiam.</p>
                            <div class="footer-social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="single-footer-widget">
                            <h5 class="widget-title">Resources</h5>
                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="about.html">Saas Development</a></li>
                                    <li><a href="service-details.html">Our Products</a></li>
                                    <li><a href="service.html">User Strategy</a></li>
                                    <li><a href="blog-standard.html">Blogs & Guides</a></li>
                                    <li><a href="contact.html">Premium Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="single-footer-widget">
                            <h5 class="widget-title">Company</h5>
                            <div class="footer-widget-menu">
                                <ul>
                                    <li><a href="about.html">About Landio</a></li>
                                    <li><a href="contact.html">Contact & Support</a></li>
                                    <li><a href="about.html">Success History</a></li>
                                    <li><a href="service.html">Setting & Privacy</a></li>
                                    <li><a href="about.html">Company History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="single-footer-widget follow-on-widget">
                            <h5 class="widget-title">Download</h5>
                            <div class="footer-app-download">
                                <a href="service-details.html" class="filled-btn bg-purple button-radius">
                                    Apple More <i class="fab fa-apple"></i>
                                </a>
                                <a href="service-details.html" class="filled-btn bg-blue-chalk button-radius">
                                    Google Play <i class="fab fa-google-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div><!-- /.footer-area-internal -->
        </div> <!-- /.container -->
        <div class="footer-copyright-area wow fadeInDown" data-wow-delay="0.8s">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-4">
                        <div class="footer-logo">
                            <img src="{{asset('assets/img/logo-red.png')}}" alt="footer logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-8">
                        <div class="footer-copyright">
                            <p>© 2021 <a href="#">Landio.</a> All Rights Reserved</p>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.footer-copyright-area -->
    </footer> <!-- /.footer-area -->
    <!--====== End Footer Area ======-->
    <!--======= Scroll To Top =======-->
    <a href="#" data-target="html" class="scroll-to-target scroll-to-top bg-red"><i class="fa fa-angle-up"></i></a>
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
