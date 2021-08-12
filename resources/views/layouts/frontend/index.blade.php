
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
                            <div class="language-selection">
                                <select class="nice-select" name="language">
                                    <option value="en">English</option>
                                </select>
                            </div>
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
                                        <li class="menu-item menu-item-has-children">
                                            <a href="index.html" class="nav-link active">Demos</a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Homepage Sass</a></li>
                                                <li><a href="index-2.html">Homepage SEO</a></li>
                                                <li><a href="index-3.html">Homepage App</a></li>
                                                <li><a href="index-4.html" class="nav-link active">Homepage Chatbot</a></li>
                                                <li><a href="index-5.html">Homepage Consultant</a></li>
                                                <li><a href="index-6.html">Homepage Fintech</a></li>
                                            </ul>
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
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Donald L. Juarez"><a href="#"><img src="{{asset('assets/img/hero/user-1.jpg')}}" alt="user one"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Evan A. Ethridge"><a href="#"><img src="{{asset('assets/img/hero/user-2.jpg')}}" alt="user two"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Marcus L. Duncan"><a href="#"><img src="{{asset('assets/img/hero/user-3.jpg')}}" alt="user three"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Donald T. Lewis"><a href="#"><img src="{{asset('assets/img/hero/user-4.jpg')}}" alt="user four"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Marcus L. Duncan"><a href="#"><img src="{{asset('assets/img/hero/user-5.jpg')}}" alt="user five"></a></li>
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Evan A. Ethridge"><a href="#"><img src="{{asset('assets/img/hero/user-6.jpg')}}" alt="user six"></a></li>
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
                                    <h5 class="iconic-box-title">Audio & Video Call</h5>
                                    <p class="iconic-box-content">
                                        Sed perspiciatis unde omnis este error voluptate accusant doloremque systems.
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
                                    <img src="{{asset('assets/img/feature/flaticon-share.png')}}" alt="share">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Screen Sharing</h5>
                                    <p class="iconic-box-content">
                                        Quis autem vel eum iuresc reprehe nderit ea voluptatey velit esse quam nihile
                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href="#"><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="iconic-box-icon">
                                    <img src="{{asset('assets/img/feature/flaticon-chatting.png')}}" alt="chatting">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Chat & Message</h5>
                                    <p class="iconic-box-content">
                                        On the other hand dennce with righteous indig nations dislike men beguiled
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
                                    <p class="iconic-box-content">
                                        Sed perspiciatis unde omnis este error voluptate accusant doloremque systems.
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
                        <h2>Response Chat Videos <span>Anywhere</span> Location</h2>
                        <div class="section-title-description">
                            <p class="mb-13">On the other hand denounce with righteous indignation and dislike men who are beguiled and demoralized by the charms pleasure moment so blindede.</p>
                            <p>Beguiled and demoralized by charms pleasu moment blinded desire that they cannot foresee.</p>
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
    </section> <!-- /.collaboration-area -->
    <!--====== End Collaboration Area ======-->
    <!--====== Start Design Feature Area ======-->
    <section class="design-feature-area overflow-hidden bg-alice-blue pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 order-2 order-lg-1">
                    <div class="section-title section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Easy Chatting UI</span>
                        </div>
                        <h2>Remote Connection <span>With Teams</span></h2>
                        <div class="section-title-description">
                            <p>But I must explain to you how all this mistaken denouncing pleasure and praising pain was born give you a complete account.</p>
                        </div>
                        <div class="section-list-style list-style-v2">
                            <ul>
                                <li>Easy To Collaborate With User</li>
                                <li>Manage Team & Users Flow</li>
                                <li>Upgrade UI Design</li>
                            </ul>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="about.html" class="filled-btn bg-purple button-radius">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2">
                    <div class="app-preview-image text-center text-lg-right content-left-spacer oval-gradient">
                        <div class="app-feature-preview-main animate-float-bob-y wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/connect-with-team-1.jpg')}}" alt="connect team one">
                        </div>
                        <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <img src="{{asset('assets/img/app/connect-with-team-2.jpg')}}" alt="connect team two">
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.design-feature-area -->
    <!--====== End Design Feature Area ======-->
    <!--====== Start Our Services Area ======-->
    <section class="our-services pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-120 section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">What We Do</span>
                        </div>
                        <h2>We Offer Smart Chat Solutions <br class="d-none d-md-block">For <span>Better Collaboration</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-feature-box single-feature-box-v2 single-feature-box-v2-color-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="feature-box-icon">
                                    <i class="flaticon-video-player"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h4>Video Meeting</h4>
                                    <p>Quis autem veleum reprende voluptate veesse quam molestic onseq velillum dolorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-feature-box single-feature-box-v2 single-feature-box-v2-color-2 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="feature-box-icon">
                                    <i class="flaticon-volume"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h4>Enhanced Audio</h4>
                                    <p>Sed ut perspiciatis undeonis natus error sit voluacc santium doloremque laudantium</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-feature-box single-feature-box-v2 single-feature-box-v2-color-3 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="feature-box-icon">
                                    <i class="flaticon-live-chat"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h4>Live Streaming</h4>
                                    <p>But I must explain to you how all this mistaken ideden uncing pleasure and praising</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-feature-box single-feature-box-v2 single-feature-box-v2-color-4 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="feature-box-icon">
                                    <i class="flaticon-microphone"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h4>Call Recording</h4>
                                    <p>On the other hand denounce with righteous indignation and dislike men beguiled</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.our-services -->
    <!--====== End Our Services Area ======-->
    <!--====== Start Collaboration Area ======-->
    <section class="collaboration-area collaboration-area-v2 pt-148 pb-108 border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="app-preview-image text-center text-lg-left content-right-spacer oval-gradient animate-float-bob-x wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{asset('assets/img/app/promote-app-preview.png')}}" alt="promote your app">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Explore Features</span>
                        </div>
                        <h2>Promote Your App <span>With Landing</span> Pages</h2>
                        <div class="section-title-description">
                            <p class="mb-15">On the other hand, we denounce with righteous indignation and dislike men who are beguiled and demoralized the charms of pleasure.</p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus blanditiis praesentium volupta</p>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="about.html" class="filled-btn bg-mandy button-radius">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.collaboration-area -->
    <!--====== End Collaboration Area ======-->
    <!--====== Start Testimonial Area ======-->
    <section class="testimonial-area pt-120 pb-100 bg-dark-black">
        <div class="container">
            <div class="section-title text-center mb-100 section-title-white section-title-white-v2">
                <div class="section-heading-tag">
                    <span class="single-heading-tag bordered-tag text-white">Our Testimonials</span>
                </div>
                <h2>What Our Clients Say <br class="d-none d-md-block"> About <span>Chat App</span></h2>
            </div>
            <div class="testimonial-slider">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="single-testimonial mt-80 single-testimonial-v3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-1.png')}}" alt="testimonial brand one">
                                    </div>
                                </div>
                                <p class="author-comments">Sed perspicia unde omnis natuscis error sit volupt accusa doloremquey laudantium totam rem aperiam ses eaque quae denouncing</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-1.png')}}" alt="testimonial author">
                                <h6>Michael W. Kirwan <span>CEO & founder</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v3 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-2.png')}}" alt="testimonial brand two">
                                    </div>
                                </div>
                                <p class="author-comments">Nam libero tempore cum sole nobis eligendi cumque impedite</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-2.png')}}" alt="testimonial author">
                                <h6>Thomas S. Farrell <span>Web Developer</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-testimonial mt-40 single-testimonial-v3 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-3.png')}}" alt="testimonial brand three">
                                    </div>
                                </div>
                                <p class="author-comments">At vero eos et accusamus et iustoy dignissimos ducimus quies blanditiis praesentium voluptatum.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-3.png')}}" alt="testimonial author">
                                <h6>Eugene S. Smith <span>Senior Manager</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v3 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-4.png')}}" alt="testimonial brand four">
                                    </div>
                                </div>
                                <p class="author-comments">Ut enim ad minima veniam nostrum exercitationem corporis laboriosamc aliquid exea commodi conse</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-4.png')}}" alt="testimonial author">
                                <h6>John E. Bozeman <span>App Designer</span></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="single-testimonial single-testimonial-v3 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-5.png')}}" alt="testimonial brand five">
                                    </div>
                                </div>
                                <p class="author-comments">On the other hand we denounceeys with righteous indignate</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-5.png')}}" alt="testimonial author">
                                <h6>Ronald A. Kawakami <span>Web Developer</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v3 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="single-testimonial-body">
                                <div class="author-rating">
                                    <ul class="rating-review">
                                        <li>
                                            <div class="all-rating star-5">
                                                <div class="main-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="blank-rating">
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="testimonial-brand">
                                        <img src="{{asset('assets/img/testimonial/testimonial-brand-6.png')}}" alt="testimonial brand six">
                                    </div>
                                </div>
                                <p class="author-comments">Quis autem vel eumr eprehenderit quinea voluptate velit esse quanihile molestiae consequatur vel illum qui dolorem eum fugiat quo.</p>
                            </div>
                            <div class="testimonial-author">
                                <img src="{{asset('assets/img/testimonial/testimonial-author-small-6.png')}}" alt="testimonial author">
                                <h6>Daniel M. Moreno<span>CEO & founder</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.testimonial-slider -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonial-area -->
    <!--====== End Testimonial Area ======-->
    <!--====== Start Blog & News Area ======-->
    <section class="blog-and-news-area pt-120 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb-120 section-title-mirage">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">News & Blog</span>
                        </div>
                        <h2>Get Our Every Single <br class="d-none d-md-block"> <span>Update & Tips</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item blog-post-item-v2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/blog-thumbnail-3.jpg')}}" alt="blog thumbnail one">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 August 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Data Visualization Improve Mobile Experience.</a></h4>
                            <div class="post-author">
                                <a href="#" class="post-author-thumb"><img src="{{asset('assets/img/blog/post-author-1.jpg')}}" alt="post author one"></a>
                                <a href="#" class="post-author-name">Edward K. Brown</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item blog-post-item-v2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/blog-thumbnail-4.jpg')}}" alt="blog thumbnail two">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 August 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Should You Do Whe Web Design Trend Too</a></h4>
                            <div class="post-author">
                                <a href="#" class="post-author-thumb"><img src="{{asset('assets/img/blog/post-author-2.jpg')}}" alt="post author two"></a>
                                <a href="#" class="post-author-name">Willie B. Coates</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-post-item blog-post-item-v2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/blog-thumbnail-5.jpg')}}" alt="blog thumbnail three">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 August 2021</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Make Honest Design Work For Digital Business</a></h4>
                            <div class="post-author">
                                <a href="#" class="post-author-thumb"><img src="{{asset('assets/img/blog/post-author-3.jpg')}}" alt="post author three"></a>
                                <a href="#" class="post-author-name">Donald D. Lawrence</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.blog-and-news-area -->
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
