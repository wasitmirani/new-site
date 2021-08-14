
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
        <img class="preloader-image" width="60" src="{{asset('assets/img/preloader-logo.png')}}" alt="preloader"/>
    </div> <!-- /.preloader -->
    <!--======= End Preloader =======-->
    <!--====== Start Search From ======-->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form>
                    <div class="form_group">
                        <input type="text" class="form_control" placeholder="Search here...">
                        <button class="search_btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div> <!-- /.modal-content -->
        </div> <!-- /.modal-dialog -->
    </div> <!-- /#search-modal -->
    <!--======= End Search Form =======-->
    <!--====== Start Header Area ======-->
    <header class="header-area header-v4">
        <div class="header-navigation">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Brand Logo -->
                    <div class="col-xl-4 col-md-6 col-8">
                        <div class="site-branding-and-language-selection">
                            <div class="brand-logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/img/logo-red.png')}}" alt="logo">
                                </a>
                            </div>
                            {{-- <div class="language-selection">
                                <select class="nice-select" name="language">
                                    <option value="en">English</option>
                                </select>
                            </div> --}}
                        </div>
                    </div>
                    <!-- Desktop and Mobile Menu -->
                    <div class="col-xl-8 col-md-6 col-4 text-center">
                        <div class="primary-menu d-flex justify-content-end align-items-center">
                            <div class="nav-menu">
                                <!-- Navbar Close Icon -->
                                <div class="navbar-close">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <nav class="main-menu">
                                    <ul>
                                        <li class="menu-item active">
                                            <a href="{{route('home')}}" class="nav-link active">Home</a>
                                        </li>

                                        <li class="menu-item menu-item-has-children">
                                            <a href="services.html" class="nav-link">Services</a>
                                            <ul class="sub-menu">
                                                <li><a href="services.html">Our Services</a></li>
                                                <li><a href="service-details.html">Service Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#" class="nav-link">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="blog-standard.html" class="nav-link">Blog</a>
                                            <ul class="sub-menu">
                                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="contact.html" class="nav-link">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">
                                <ul>
                                    <li class="get-started-wrapper">
                                        <a href="services.html" class="filled-btn bg-mandy button-radius">
                                            Get Started <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="menu-toggle">
                                            <div class="menu-overlay"></div>
                                            <!-- Navbar Toggler -->
                                            <div class="nav-toggle">
                                                <div class="navbar-toggler float-end">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.header-navigation -->
    </header> <!-- /.header-area -->
    <!--====== End Header Area ======-->
    <!--====== Start Hero Area ======-->
    <section class="hero-area hero-v4" style="background-image: url({{asset('assets/img/hero/hero-curve-bg.png')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-particle-effect d-none d-lg-block">
                            <img class="particle-1 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle One">
                            <img class="particle-2 animate-float-bob-y" src="{{asset('assets/img/particle/particle-3.png')}}" alt="particle Two">
                            <img class="particle-3 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Three">
                            <img class="particle-4 animate-float-bob-y" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Four">
                        </div>
                        <div class="section-title section-title-mandy">
                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">See Your Business <span>Scale </span> with   <div class="brand-logo">
                                <a href="index.html">
                                    <img src="{{asset('assets/img/logo-red.png')}}" alt="logo">
                                </a>
                            </div> </h1>
                            <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                <a href="services.html" class="filled-btn bg-mandy button-radius">
                                    Get Free Trial <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="about.html" class="filled-btn bg-purple button-radius">
                                    Learn More <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <ul>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Donald L. Juarez"><a href="#"><img src="{{asset('assets/img/hero/amazon_ico.png')}}" alt="amazon"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Evan A. Ethridge"><a href="#"><img src="{{asset('assets/img/hero/ebay_icon.png')}}" alt="ebay"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Marcus L. Duncan"><a href="#"><img src="{{asset('assets/img/hero/shopify.png')}}" alt="shopify"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Donald T. Lewis"><a href="#"><img src="{{asset('assets/img/hero/bigcommerce.png')}}" alt="bigcommerce"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Marcus L. Duncan"><a href="#"><img src="{{asset('assets/img/hero/wish-logo.png')}}" alt="wish-logo"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Evan A. Ethridge"><a href="#"><img src="{{asset('assets/img/hero/WooCommerce_logo.png')}}" alt="WooCommerce_logo "></a></li>
                                <li class="user-profile sign-up" data-toggle="tooltip" data-placement="top" title="Join Now"><a href="#"><i class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chartboard-image-wrapper">
                        <img src="{{asset('assets/img/hero/chartboard-image-main.png')}}" alt="chartboard image one" class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="chartboard-app-preview">
                            <img src="{{asset('assets/img/hero/chartboard-app-preview-1.jpg')}}" alt="app preview one" class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/hero/chartboard-app-preview-2.jpg')}}" alt="app preview two" class="chartboard-image chartboard-app-preview-2 wow fadeInDown" data-wow-delay="700ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/hero/chartboard-app-preview-3.jpg')}}" alt="app preview three" class="chartboard-image chartboard-app-preview-3 wow fadeInDown" data-wow-delay="300ms" data-wow-duration="1500ms">
                        </div>
                        <img src="{{asset('assets/img/hero/chartboard-image-secondary.png')}}" alt="chartboard image two" class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y" data-wow-delay="900ms" data-wow-duration="1500ms">
                    </div> <!-- /.chart-board-image-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- .container -->
    </section> <!-- /.hero-area -->
    <!--====== End Hero Area ======-->
    <!--====== Start Feature Area ======-->
    <section class="features-area">
        <div class="container">
            <div class="section-internal pt-120 pb-75 border-bottom-purple">
                <div class="section-title mb-126 text-center section-title-mirage">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">How Can Help You</span>
                    </div>
                    <h2>Check Out <span>Exclusive</span> Features</h2>
                </div>
                <div class="icon-boxes-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="iconic-box-icon">
                                    <img src="{{asset('assets/img/feature/flaticon-headphones.png')}}" alt="headphones">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">24/7 Live Support</h5>
                                    <p class="iconic-box-content">

                                        You can reach out to us via live chat, text, or email. Our representatives are available round the clock to address your queries and concerns.
                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="iconic-box-icon">
                                    <img src="{{asset('assets/img/feature/rising.png')}}" alt="share">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Progress Reports</h5>
                                    <p class="iconic-box-content " style="margin-bottom:55px;">
                                        You can check the weekly, monthly, and yearly progress of your
                                        online store on our dashboard system.
                                    </p>
                                    <div class="iconic-box-btn ">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="iconic-box-icon">
                                    <img src="{{asset('assets/img/feature/flaticon-share.png')}}" alt="chatting">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Multi Channel Selling</h5>
                                    <p class="iconic-box-content">
                                    {{
                                        Str::limit(config('app.name').'  supports integration with other online marketplaces like Amazon, Shopify, eBay, Etsy, OnBuy, Fruugo, Wish, GumTree, fb Shops, InstaShop, BigCommerce, WooCommerce, LinnWorks, and so on.', 146, '.....')
                                    }}

                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-4 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="iconic-box-icon">
                                    <img src="{{asset('assets/img/feature/flaticon-satisfaction.png')}}" alt="satisfaction">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Download Apps</h5>
                                    <p class="iconic-box-content" style="margin-bottom:55px;">
                                        Offering smart mobile application for our customers to shop and sell anywhere around the world.
                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.icon-boxes-wrapper -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.features-area -->
    <!--====== End Feature Area ======-->
    <!--====== Start Collaboration Area ======-->
    <!-- /.collaboration-area -->
    <!--====== End Collaboration Area ======-->
     <!--====== Start Our Services Area ======-->

     <section class="our-services our-services-v1 pt-150 pb-100" style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="service-area-internal">
                <div class="section-particle-effect d-none d-lg-block">
                    <img class="particle-1 animate-zoominout" src="assets/img/particle/gradient-ball-shape.png" alt="ball shape">
                    <img class="particle-3 animate-rotate-me" src="assets/img/particle/gradient-curve-shape.png" alt="curve shape">
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-105 text-center section-title-ocean-blue">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">Most popular selling channels</span>
                            </div>
                            <h2>We Offer Channels  <br class="d-none d-md-block">
                                <span>Integrations</span>
                                Across
                            </h2>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.service-area-internal -->
        </div> <!-- /.container -->
        <div class="service-area-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="single-service-box single-service-box-v2 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-thumbnail">
                                <img src="assets/img/services/amazon.png" alt="amazon channels {{config('app.name')}}">
                            </div>
                            <div class="service-box-content">
                                <h5 class="service-box-title">Amazon integration</h5>
                                <div class="service-box-btn">
                                    <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="single-service-box single-service-box-v2 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-thumbnail">
                                <img src="assets/img/services/eBay.png" alt="eBay channels {{config('app.name')}}">
                            </div>
                            <div class="service-box-content">
                                <h5 class="service-box-title">eBay  Integration</h5>
                                <div class="service-box-btn">
                                    <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="single-service-box single-service-box-v2 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-thumbnail">
                                <img src="assets/img/services/shopify.png" alt="shopify channels {{config('app.name')}}">
                            </div>
                            <div class="service-box-content">
                                <h5 class="service-box-title">Shopify Integration</h5>
                                <div class="service-box-btn">
                                    <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-4 col-md-6">
                        <div class="single-service-box single-service-box-v2 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="service-thumbnail">
                                <img src="assets/img/services/bigcommerce.png" alt="BigCommerce tchannels {{config('app.name')}}">
                            </div>
                            <div class="service-box-content">
                                <h5 class="service-box-title">BigCommerce</h5>
                                <div class="service-box-btn">
                                    <a href="service-details.html"><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- /.row -->
            </div> <!-- /.container-fluid -->
        </div> <!-- /.service-area-content -->
    </section>
    <section class="collaboration-area collaboration-area-v1 pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="app-preview-image oval-gradient content-right-spacer">
                        <div class="app-feature-preview-relative animate-float-bob-y wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/live-chat-activity.jpg')}}" alt="chat activity">
                        </div>
                        <div class="app-feature-preview-main wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/live-chat-preview.png')}}" alt="live collaboration">
                        </div>
                        <div class="app-feature-preview-backward animate-float-bob-y wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/live-chat-mobile-view.png')}}" alt="mobile view">
                        </div>
                        <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/live-chat-onboard-clients.jpg')}}" alt="chat onboard">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Collaboration With Chat</span>
                        </div>
                        <h2>See Your Business
                            <span> Scale with</span> <img src="{{asset('assets/img/logo-red.png')}}" alt="logo"></h2>
                        <div class="section-title-description">
                            <p class="mb-13"> We enable you to take control of your business and let it scale by dropshipping. We empower your with all the requisite tools from online store integration, access provision to suppliers, and automated payments, shipping, and orders.</p>
                            <p>{{config('app.name')}} offers an intuitive, automated panel to save your time and energy. It keeps track of your store’s day-to-day operations to help you focus on the bigger stuff.</p>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="services.html" class="filled-btn bg-mandy button-radius">
                                Get Stared Now <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!-- /.our-services -->


    <section class="blog-and-news-area bg-magnolia pt-130 pb-100" style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="assets/img/particle/particle-1.png" alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="assets/img/particle/particle-2.png" alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="assets/img/particle/particle-3.png" alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="assets/img/particle/particle-4.png" alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="assets/img/particle/particle-5.png" alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="assets/img/particle/particle-7.png" alt="particle Seven">
                </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">

                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/amazon_PNG6.png" alt="icon two"></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/eBay_icon2.png" alt="eBay two" style="height: 55px;
                                margin-top: 2px;
                                margin-left: 35px;"></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/shopify_ico.png" alt="eBay two" style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 10px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/OnBuy_Logo.png" alt="eBay two" style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 10px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/Linnworks.png" alt="Linnworks " style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 5px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/bigcommerce.png" alt="bigcommerce" style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 5px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/fruugo.svg" alt="bigcommerce" style="
                                    height: 55px;
                            margin-top: 2px;
                            margin-left: 31px;
                            background-color: rgb(2 140 235);
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="assets/img/services/wish-logo.png" alt="wish" style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 5px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
            <div class="view-more-btn-wrapper text-center mt-20 wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1500ms">
                <a href="services.html" class="filled-btn btn-bordered bg-clear-blue">
                    View All Services <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div> <!-- /.container -->
    </section>
     <!--====== Start Pricing Area ======-->
     <section class="pricing-area pt-130 pb-109">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="pricing-area-content content-right-spacer">
                        <div class="section-title section-title-tuna">
                            <h2>Choose The Best Package For Your <br class="d-none d-lg-block">
                                <span>Applications</span>
                            </h2>
                            <div class="section-title-description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremq ue laudante totam rem aperiam</p>
                            </div>
                        </div>
                        <div class="simple-counter-up">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-counter-up single-counter-up-v2">
                                        <div class="counterup-info">
                                            <h2>
                                                <span class="counter">35</span>
                                                <span class="sign">+</span>
                                            </h2>
                                            <p>Download Apps</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single-counter-up single-counter-up-v2">
                                        <div class="counterup-info">
                                            <h2>
                                                <span class="counter">79</span>
                                                <span class="sign">+</span>
                                            </h2>
                                            <p>Project Complete</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="pricing-table-wrapper">
                        <div class="pricing-table pricing-table-v2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="pricing-plan-title">
                                <div class="pricing-table-icon">
                                    <h5 class="plan-title bg-burning-orange-gradient">Single Team</h5>
                                </div>
                                <div class="pricing-plan-features">
                                    <ul>
                                        <li class="plan-feature">Social Media Marketing</li>
                                        <li class="plan-feature">2.100 Keywords</li>
                                        <li class="plan-feature">One Way Link Building</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-table-foot">
                                <div class="pricing-plan-cost">
                                    <span class="payment-currency">$</span>
                                    <span class="plan-price">29.24</span>
                                    <span class="plan-type"> /monthly</span>
                                </div>
                                <div class="plan-select">
                                    <a href="service-details.html" class="filled-btn bg-rose-bud">Select Plan <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="pricing-table pricing-table-v2 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="pricing-plan-title">
                                <div class="pricing-table-icon">
                                    <h5 class="plan-title bg-ocean-blue-gradient">Professional</h5>
                                </div>
                                <div class="pricing-plan-features">
                                    <ul>
                                        <li class="plan-feature">Social Media Marketing</li>
                                        <li class="plan-feature">2.100 Keywords</li>
                                        <li class="plan-feature">One Way Link Building</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pricing-table-foot">
                                <div class="pricing-plan-cost">
                                    <span class="payment-currency">$</span>
                                    <span class="plan-price">99.27</span>
                                    <span class="plan-type"> /monthly</span>
                                </div>
                                <div class="plan-select">
                                    <a href="service-details.html" class="filled-btn bg-tuna">Select Plan <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.pricing-area -->
    <!--====== End Pricing Area ======-->
  <!--====== Start Collaboration Area ======-->
   <!--====== Start FAQ Area ======-->
   <section class="faq-area bg-magnolia pt-130 pb-130">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                <img class="particle-1 animate-zoom-fade" src="assets/img/particle/particle-1.png" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="assets/img/particle/particle-2.png" alt="particle Two">
                <img class="particle-3 animate-float-bob-x" src="assets/img/particle/particle-3.png" alt="particle Three">
                <img class="particle-4 animate-zoominout" src="assets/img/particle/particle-4.png" alt="particle Four">
                <img class="particle-5 animate-zoominout" src="assets/img/particle/particle-5.png" alt="particle Five">
                <img class="particle-7 animate-float-bob-x" src="assets/img/particle/particle-7.png" alt="particle Seven">
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-content content-right-spacer">
                        <div class="section-title section-title-ocean-blue">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">Our Approch</span>
                            </div>
                            <h2>Grow Your Business With
                                <span>  <div class="brand-logo">
                                    <a href="{{route('home')}}">
                                        <img src="{{asset('assets/img/logo-red.png')}}" alt="logo">
                                    </a>
                                </div></span>
                            </h2>
                        </div>
                        <div class="section-accordion">
                            <div class="accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Choose Work With MintTwist SEO Agency?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            How Long Does It Take to Start Ranking?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can You Guarantee Results?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Do You Only Work Within The UK?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.accordion -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-right-image animate-float-bob-y wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <img src="assets/img/faq/faq-image.png" alt="faq image">
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.faq-area -->
<!--====== End FAQ Area ======-->

<!-- /.our-services-area -->
    <!--====== Start Testimonial Area ======-->
    <section class="testimonial-area border-0 bg-white-lilac pt-122 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="testimonial-content-wrapper">
                        <div class="section-title mb-45">
                            <h2>What Our Clients <br class="d-none d-md-block">Say About Us</h2>
                        </div>
                        <div class="testimonial-slider" id="testimonial-slider-v4">
                            <div class="single-testimonial single-testimonial-v5">
                                <div class="quote-thumbnail">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium totam vellum rem</p>
                                <div class="testimonial-author">
                                    <img src="assets/img/testimonial/testimonial-author-1.png" alt="testimonial author">
                                    <h6>Michael W. Kirwan <span>CEO & Founder</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v5">
                                <div class="quote-thumbnail">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>
                                <div class="testimonial-author">
                                    <img src="assets/img/testimonial/testimonial-author-2.png" alt="testimonial author">
                                    <h6>Ricky L. Simpson <span>Web Designer</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v5">
                                <div class="quote-thumbnail">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>On the other hand denounce with righteous indignation dislike men who are so beguiled and demoralized by charms</p>
                                <div class="testimonial-author">
                                    <img src="assets/img/testimonial/testimonial-author-3.png" alt="testimonial author">
                                    <h6>Harold S. Richardson <span>Saas Developer</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v5">
                                <div class="quote-thumbnail">
                                    <i class="flaticon-right-quote"></i>
                                </div>
                                <p>On the other hand denounce with righteous indignation dislike men who are so beguiled and demoralized by charms</p>
                                <div class="testimonial-author">
                                    <img src="assets/img/testimonial/testimonial-author-1.png" alt="testimonial author">
                                    <h6>Harold S. Richardson <span>Saas Developer</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="square-and-oval-image-wrapper content-left-spacer content-right-spacer">
                        <div class="project-count animate-float-bob-x">
                            <div class="count-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="count-details">
                                <h4 class="counter">23684</h4>
                                <p>Clients Say Us</p>
                            </div>
                        </div>
                        <div class="image-square">
                            <img src="assets/img/testimonial/testimonial-right-thumbnail-1.jpg" alt="testimonial right image one">
                        </div>
                        <div class="image-oval animate-float-bob-y">
                            <img src="assets/img/testimonial/testimonial-right-thumbnail-2.jpg" alt="testimonial right image two">
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonial-area -->
      <!--======= Start Brands Slider =======-->
      <div class="brands-area bg-light-magnolia pt-50 pb-50 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="brands-slider" id="brands-slider-v2">
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-6.png" alt="brand one">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-7.png" alt="brand two">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-8.png" alt="brand three">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-9.png" alt="brand four">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-10.png" alt="brand five">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-11.png" alt="brand six">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-8.png" alt="brand seven">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-7.png" alt="brand eight">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-9.png" alt="brand nine">
                        </div>
                        <div class="brands-item">
                            <img src="assets/img/brand/brand-11.png" alt="brand ten">
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.brands-area -->
    <!--======= End Brands Slider =======-->
      <!--====== Start Contact Area ======-->
      <section class="contact-area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-75">
                        <h2>Need Free Consultation to <br class="d-none d-md-block">Your Next Project</h2>
                    </div>
                </div>
            </div> <!-- /.row -->
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-box-wrapper">
                                <div class="single-contact-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                    <h4>Ready to Work Together For Better Solutions </h4>
                                    <a href="team.html" class="filled-btn btn-bordered bg-royal-blue">
                                        Join with us <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="single-contact-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                                    <h4>Build A Better Career <br class="d-none d-xl-block"> With <span>Landio</span></h4>
                                    <a href="about.html" class="filled-btn btn-bordered bg-royal-blue">
                                        View Our Jobs <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form-area contact-form-area-v2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                        <div class="contact-respond">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="fullName" placeholder="Your Full Name" name="name" required="">
                                    <label for="fullName">Name</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="yourEmail" placeholder="Email Address" name="email" required="">
                                    <label for="emailAddress">Email</label>
                                </div>
                                <div class="input-group">
                                    <div class="subject-dropdown">
                                        <select class="nice-select" name="subject">
                                            <option>Subject You Like</option>
                                            <option value="knowsomething">About Us</option>
                                            <option value="sayhello">Say Hello</option>
                                            <option value="askme">Ask Me</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="input-group form-textarea">
                                    <textarea class="form-control" id="message" placeholder="Write Message" name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="filled-btn">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.contact-area -->
    <!--====== End Contact Area ======-->
     <!--====== Start Blog or News Area ======-->
     <section class="blog-and-news-area bg-magnolia pt-130 pb-100" style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="assets/img/particle/particle-1.png" alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="assets/img/particle/particle-2.png" alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="assets/img/particle/particle-3.png" alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="assets/img/particle/particle-4.png" alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="assets/img/particle/particle-5.png" alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="assets/img/particle/particle-7.png" alt="particle Seven">
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-news-content">
                            <div class="section-title section-title-ocean-blue">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag">Blog & News</span>
                                </div>
                                <h2>Get Every Single
                                    <span>Update</span>
                                    & Tips
                                </h2>
                                <div class="section-title-description">
                                    <p>Sed ut perspiciatis unde omnis iste natus error voluptate accus oloremqu laudantium totam aperiam</p>
                                </div>
                                <div class="section-button-wrapper">
                                    <a href="blog-standard.html" class="filled-btn">
                                        View All News <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <!-- Single Blog Post -->
                            <div class="col-lg-6">
                                <div class="blog-post-item wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="post-thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/blog-thumbnail-1.jpg" alt="blog thumbnail one">
                                        </a>
                                        <div class="post-tag">
                                            <a href="#">SEO</a>
                                        </div>
                                    </div>
                                    <div class="blog-post-entry-content">
                                        <div class="post-meta-wrapper">
                                            <ul>
                                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                                <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Com (05)</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="post-title"><a href="blog-details.html">Data Visualization Improve Mobile Experience.</a></h4>
                                        <div class="post-read-more">
                                            <a href="blog-details.html" class="filled-btn bg-blue-chalk">Read more <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Blog Post -->
                            <div class="col-lg-6">
                                <div class="blog-post-item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="post-thumbnail">
                                        <a href="blog-details.html">
                                            <img src="assets/img/blog/blog-thumbnail-2.jpg" alt="blog thumbnail twp">
                                        </a>
                                        <div class="post-tag bg-purple">
                                            <a href="#">Marketing</a>
                                        </div>
                                    </div>
                                    <div class="blog-post-entry-content">
                                        <div class="post-meta-wrapper">
                                            <ul>
                                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                                <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Com (05)</a></li>
                                            </ul>
                                        </div>
                                        <h4 class="post-title"><a href="blog-details.html">Make Honest Design Work Digital Business Ways.</a></h4>
                                        <div class="post-read-more">
                                            <a href="blog-details.html" class="filled-btn bg-blue-chalk">Read more <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.blog-and-news-area -->
    <!--====== End Blog or News Area ======-->
    <!--====== End Testimonial Area ======-->
        <!--====== Start Call to Action Area ======-->
     <section class="cta-area">
            <div class="container">
                <div class="cta-content-internal">
                    <div class="cta-section-particle d-none d-lg-block">
                        <img class="cta-particle-left" src="assets/img/cta/cta-left-particle-1.png" alt="cta particle 1">
                        <img class="cta-particle-right" src="assets/img/cta/cta-right-particle-1.png" alt="cta particle 2">
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="cta-content">
                                <div class="section-title text-center">
                                    <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                        <span class="single-heading-tag">Download Apps</span>
                                    </div>
                                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Get our apps very easily, we’re <br class="d-none d-md-block"> available on store</h2>
                                    <div class="section-button-wrapper section-dual-button justify-content-center text-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                        <a href="service-details.html" class="filled-btn">
                                            Apple Store <i class="fab fa-apple"></i>
                                        </a>
                                        <a href="service-details.html" class="filled-btn bg-blue-chalk">
                                            Google Play <i class="fab fa-google-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.cta-content-internal -->
            </div> <!-- /.container -->
        </section>  <!-- /.cta-area -->
    <!--====== End Collaboration Area ======-->


    <!--====== Start Blog & News Area ======-->
   <!-- /.blog-and-news-area -->
    <!--====== End Blog & News Area ======-->
    <!--====== Start Subscribe Newsletter Area ======-->
    <section class="subscribe-newsletter-area pt-120 pb-120" style="background-image: url({{asset('assets/img/particle/newsletter-bg.png')}});">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v4">
                    <img class="particle-1 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/gradient-curve-shape-2.png')}}" alt="particle Two">
                    <img class="particle-3 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Three">
                    <img class="particle-4 animate-float-bob-y" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
                </div>
                <div class="row text-center justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="subscribe-newsletter-content">
                            <div class="section-title mb-80 section-title-mirage">
                                <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                    <span class="single-heading-tag">Newsletter Subscribe</span>
                                </div>
                                <h2 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Subscribe Our Newsletter To <br class="d-none d-md-block"> <span>Get More Update</span></h2>
                            </div>
                            <div class="newsletter-form wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                <form>
                                    <div class="form-group">
                                        <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Enter Your Email Address">
                                        <button type="submit" name="submit" value="Go" class="filled-btn bg-mandy button-radius">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                                    </div>
                                </form>
                                <div class="newsletter-notice">
                                    <p>On the other hand, we denounce with righteous</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.subscribe-newsletter-area -->
    <!--====== End Subscribe Newsletter Area ======-->
    <!--====== Start Footer Area ======-->
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
