@extends('layouts.frontend.master')
@section('content')
    <header class="header-area header-v4">
        <div class="header-navigation">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Brand Logo -->
                    <div class="col-xl-4 col-md-6 col-8">
                        <div class="site-branding-and-language-selection">
                            <div class="brand-logo">
                                <a href="{{ route('home') }}">
                                    <img src="{{ asset('assets/img/LOGO-Web.png') }}" alt="logo" width="50%">
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
                                    <div class="cross-wrap"><span class="top"></span><span
                                            class="bottom"></span></div>
                                </div>
                                <nav class="main-menu">
                                    <ul>


                                        <li class="menu-item" >
                                            <a href="mailto:hello@edropship.co.uk"  style="text-transform: lowercase;">
                                                <i class="fas fa-mail-bulk"></i> &nbsp; hello@edropship.co.uk
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="tel:+447958557597" >
                                                <i class="fas fa-phone"></i> &nbsp; +447958557597
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right">
                                <ul>
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
    <section class="hero-area hero-v4" style="background-image: url({{ asset('assets/img/hero/hero-curve-bg.png') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-particle-effect d-none d-lg-block">
                            <img class="particle-1 animate-rotate-me"
                                src="{{ asset('assets/img/particle/particle-2.png') }}" alt="particle One">
                            <img class="particle-2 animate-float-bob-y"
                                src="{{ asset('assets/img/particle/particle-3.png') }}" alt="particle Two">
                            <img class="particle-3 animate-zoominout"
                                src="{{ asset('assets/img/particle/particle-4.png') }}" alt="particle Three">
                            <img class="particle-4 animate-float-bob-y"
                                src="{{ asset('assets/img/particle/particle-5.png') }}" alt="particle Four">
                        </div>
                        <div class="section-title section-title-mandy">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Take Charge of Your
                                Business & Make it Grow with <span><img src="{{ asset('assets/img/logo-red.png') }}"
                                        alt="logo"></span></h2>
                            <p class="mb-10">Manage your business with eDropShip and let it scale by dropshipping.
                                We empower your business with all the requisite tools for online store integration, access
                                provision to suppliers, automated payments, shipping, and order management.</p>
                        </div>
                        <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <ul>
                                @foreach ($channels as $item)
                                    <li class="user-profile" data-toggle="tooltip" data-placement="top"
                                        title="{{ $item->title }} integration">
                                        <a href=""><img src="{{ asset('assets/img/hero/' . $item->icon) }}"
                                                alt="{{ $item->title }}"></a>
                                    </li>
                                    @if ($loop->iteration > 5)
                                    @break
                                @endif
                                @endforeach
                                <li class="user-profile sign-up" data-toggle="tooltip" data-placement="top"
                                    title="More integrations"><a href="{{ route('integrations') }}"><i
                                            class="fas fa-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chartboard-image-wrapper">
                        <img src="{{ asset('assets/img/Start-Growing-Business.png') }}" alt="chartboard image one"
                            class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x"
                            data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="chartboard-app-preview">
                            <div id="countdown" class="chartboard-image chartboard-app-preview-2 wow fadeInDown">
                                <ul>
                                    <li><span id="days"></span><p>days</p></li>
                                    <li><span id="hours"></span><p>Hours</p></li>
                                    <li><span id="minutes"></span><p>Minutes</p></li>
                                    <li><span id="seconds"></span><p>Seconds</p></li>
                                </ul>
                            </div>
                        </div>
                        <img src="{{ asset('assets/img/Streamlined-Operations.png') }}" alt="chartboard image two"
                            class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                    </div> <!-- /.chart-board-image-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- .container -->
    </section>
    <!--====== Start Feature Area ======-->
    <section class="features-area">
        <div class="container">
            <div class="section-internal pt-120 pb-75 border-bottom-purple">
                <div class="section-title mb-126 text-center section-title-mirage">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">How Can Help You</span>
                    </div>
                    <h2>Check Out Our <span>Exclusive</span> Features</h2>
                </div>
                <div class="icon-boxes-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-1 wow fadeInUp text-left"
                                data-wow-delay="0.1s">
                                <div class="iconic-box-icon">
                                    <img src="{{ asset('assets/img/feature/flaticon-headphones.png') }}" alt="headphones">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">24/7 Live Support</h5>
                                    <p class="iconic-box-content">
                                        You can reach out to us via live chat, text, or email. Our representatives are
                                        available round the clock to address your queries and concerns.
                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href=""><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-2 wow fadeInUp text-left"
                                data-wow-delay="0.2s">
                                <div class="iconic-box-icon">
                                    <img src="{{ asset('assets/img/feature/rising.png') }}" alt="share">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Progress Reports</h5>
                                    <p class="iconic-box-content ">
                                        You can check the weekly, monthly, and yearly progress of your online store on our
                                        dashboard system, which is easily manageable and provides functionality.
                                    </p>
                                    <div class="iconic-box-btn ">
                                        <a href=""><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-3 wow fadeInUp text-left"
                                data-wow-delay="0.3s">
                                <div class="iconic-box-icon">
                                    <img src="{{ asset('assets/img/feature/flaticon-share.png') }}" alt="chatting">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Multi Channel Selling</h5>
                                    <p class="iconic-box-content">
                                        {{ Str::limit(config('app.name') . '  supports integration with other online marketplaces like Amazon, Shopify, eBay, Etsy, OnBuy, Fruugo, Wish, GumTree, fb Shops, InstaShop, BigCommerce, WooCommerce, LinnWorks, and so on.', 146, '.....') }}

                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href=""><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-4 wow fadeInUp text-left"
                                data-wow-delay="0.4s">
                                <div class="iconic-box-icon">
                                    <img src="{{ asset('assets/img/feature/flaticon-satisfaction.png') }}"
                                        alt="satisfaction">
                                </div>
                                <div class="iconic-box-body">
                                    <h5 class="iconic-box-title">Download Apps</h5>
                                    <p class="iconic-box-content" style="margin-bottom:80px;">
                                        Offering smart mobile application for our customers to shop and sell anywhere around
                                        the world.
                                    </p>
                                    <div class="iconic-box-btn">
                                        <a href=""><i class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.icon-boxes-wrapper -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.features-area -->


    {{-- @component('frontend.components.channels', ['channels' => $channels])

    @endcomponent --}}
    <section class="collaboration-area collaboration-area-v1 pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="app-preview-image oval-gradient content-right-spacer">
                        <div class="app-feature-preview-relative animate-float-bob-y wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            {{--  <img src="{{ asset('assets/img/4.png') }}" alt="chat activity">  --}}
                        </div>
                        <div class="app-feature-preview-main wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/1.png') }}" alt="live collaboration">
                        </div>
                        <div class="app-feature-preview-backward animate-float-bob-y wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            {{--  <img src="{{ asset('assets/img/app/live-chat-mobile-view.png') }}" alt="mobile view">  --}}
                        </div>
                        <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/5.png') }}" alt="chat onboard">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title section-title-clear-gray">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Business Scale </span>
                        </div>
                        <h3 style="font-size:50px ; line-height:50px">See Your Business
                            <span> Scale with <img src="{{ asset('assets/img/logo-red.png') }}" alt="logo"></span>
                        </h3>
                        <div class="section-title-description">
                            <p class="mb-13">Whether you are a supplier, vendor, or seller, dropship via eDropShip
                                and see your business skyrocket. </p>
                            <p> We enable you to take control of your business and let it scale by dropshipping. We empower
                                your with all the requisite tools from online store integration, access provision to
                                suppliers, and automated payments, shipping, and orders.</p>

                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <section class="blog-and-news-area bg-magnolia pt-130 pb-100"
        style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="{{ asset('assets/img/particle/particle-1.png') }}"
                        alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{ asset('assets/img/particle/particle-2.png') }}"
                        alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="{{ asset('assets/img/particle/particle-3.png') }}"
                        alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="{{ asset('assets/img/particle/particle-4.png') }}"
                        alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="{{ asset('assets/img/particle/particle-5.png') }}"
                        alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="{{ asset('assets/img/particle/particle-7.png') }}"
                        alt="particle Seven">
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-news-content">
                            <div class="section-title section-title-ocean-blue">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag">Inventory Detail </span>
                                </div>
                                <h2>Manage your
                                    <span> Orders & Inventory</span>
                                    Without Fuss
                                </h2>
                                <div class="section-title-description">
                                    <p>Whether you are a seller or supplier, keep track of your orders and manage your
                                        inventory without much effort through our automated panel. </p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="our-statistics-images content-left-spacer content-right-spacer">
                            <div class="our-statistics-image-relative animate-float-bob-y">
                                <img src="{{ asset('assets/img/Data-and-Analyticss.png') }}"
                                    alt="our statistic right">
                            </div>
                            <div class="our-statistics-image-main">
                                <img src="{{ asset('assets/img/DASHBOARD.png') }}"
                                    alt="our statistic main">
                            </div>
                            <div class="our-statistics-image-absolute animate-float-bob-x">
                                <img src="{{ asset('assets/img/Low costs-01.png') }}"
                                    alt="our statistic left">
                            </div>
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.blog-and-news-area -->
    <section class="our-statistics-area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="our-statistics-content content-right-spacer">
                        <div class="section-title section-title-clear-gray">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">Vendor / supplier</span>
                            </div>
                            <h2>Sign up as a Vendor/Supplier </h2>
                            <div class="section-title-description">
                                <p class="mb-10">Enhance your clientele through eDropShip’s wide customer base.
                                    Find potential customers to expand the market for your products. Minimize the workload
                                    through our automated portal that offers: </p>
                                <div class="section-list-style list-style-v2 mt-22 mb-35">
                                    <ul>
                                        <li>Accelerated order management </li>
                                        <li>Secured and automated payments </li>
                                        <li>Synchronized inventory </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="our-statistics-images content-left-spacer content-right-spacer">
                        <div class="our-statistics-image-relative animate-float-bob-y">
                            <img src="{{ asset('assets/img/development.png') }}"
                                alt="our statistic right">
                        </div>
                        <div class="our-statistics-image-main">
                            <img src="{{ asset('assets/img/details-4.png') }}"
                                alt="our statistic main">
                        </div>
                        <div class="our-statistics-image-absolute animate-float-bob-x">
                            <img src="{{ asset('assets/img/Easy,-Simplified-Transactions.png') }}"
                                alt="our statistic left">
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.our-statistics-area -->
    <!-- /.our-services -->
    <section class="collaboration-area collaboration-area-v1 pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="app-preview-image oval-gradient content-right-spacer">
                        <div class="app-feature-preview-relative animate-float-bob-y wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">
                            {{--  <img src="{{ asset('assets/img/app/live-chat-activity.jpg') }}" alt="chat activity">  --}}
                        </div>
                        <div class="app-feature-preview-main wow fadeInDown" data-wow-delay="200ms"
                            data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/details-1.png') }}" alt="live collaboration">
                        </div>
                        <div class="app-feature-preview-backward animate-float-bob-y wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            {{--  <img src="{{ asset('assets/img/app/live-chat-mobile-view.png') }}" alt="mobile view">  --}}
                        </div>
                        <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInUp" data-wow-delay="600ms"
                            data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/HASSLE-FREE-EXPERIENCE.png') }}" alt="chat onboard">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title section-title-clear-gray">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Selling online </span>
                        </div>
                        <h2>Sign up as a Seller</h2>
                        <div class="section-title-description">
                            <p class="mb-13">Minimize the trouble and eliminate the worry of managing inventory
                                and focus on attaining more customers. Receive orders, acquire the products from eDropShip’s
                                suppliers and get them shipped off to the buyers. Automate the entire process to reduce cost
                                and effort through our portal. </p>
                            <div class="section-list-style list-style-v2 mt-22 mb-35">
                                <ul>
                                    <li>30+ integration channels to optimize selling </li>
                                    <li>Reduced cost, as only 10 percent commission is required with zero risk. </li>
                                    <li>Automated invoicing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>


    <section class="blog-and-news-area bg-magnolia pt-130 pb-100"
        style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="{{ asset('assets/img/particle/particle-1.png') }}"
                        alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{ asset('assets/img/particle/particle-2.png') }}"
                        alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="{{ asset('assets/img/particle/particle-3.png') }}"
                        alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="{{ asset('assets/img/particle/particle-4.png') }}"
                        alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="{{ asset('assets/img/particle/particle-5.png') }}"
                        alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="{{ asset('assets/img/particle/particle-7.png') }}"
                        alt="particle Seven">
                </div>

                <div class="row">
                    @foreach ($channels as $item)
                        <div class="col-lg-3 col-md-6 mt-4">
                            <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp"
                                data-wow-delay="0ms" data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <a href="">
                                    <div class="iconic-list-body">
                                        <h5 class="iconic-list-title">
                                            <img src="{{ asset('assets/img/services/' . $item->w_thumbnail) }}"
                                                alt="{{ $item->title }} channel " style="
                                    height: 55px;
                                    margin-top: 2px;
                                    margin-left: 5px;
                                ">
                                        </h5>
                                        {{-- <p class="iconic-list-content">
                                integration channel
                            </p> --}}
                                </a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div> <!-- /.container -->
    </section>

    <section class="faq-area bg-magnolia pt-130 pb-130">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="{{ asset('assets/img/particle/particle-1.png') }}"
                        alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{ asset('assets/img/particle/particle-2.png') }}"
                        alt="particle Two">
                    <img class="particle-3 animate-float-bob-x" src="{{ asset('assets/img/particle/particle-3.png') }}"
                        alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="{{ asset('assets/img/particle/particle-4.png') }}"
                        alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="{{ asset('assets/img/particle/particle-5.png') }}"
                        alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="{{ asset('assets/img/particle/particle-7.png') }}"
                        alt="particle Seven">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-content content-right-spacer">
                            <div class="section-title section-title-ocean-gray">
                                <div class="section-heading-tag">
                                    <span class="single-heading-tag">Our Approch</span>
                                </div>
                                <h2>
                                    You Name It, We got It
                                </h2>
                                <p class="mb-15">From diversifying your sales, sourcing quality suppliers to
                                    expanding your clientele for your exports or wholesale enterprise, we have a plethora of
                                    options for you.</p>
                            </div>
                            <div class="section-accordion">
                                <div class="accordion" id="accordionFAQ">
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="false"
                                                aria-controls="collapseOne">
                                                Simple Setup
                                            </button>
                                        </h5>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Just sign up on our one-window portal and start selling. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-toggle="collapse"
                                                data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Verified Uk Suppliers
                                            </button>
                                        </h5>
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Our wide base of suppliers go through a vetting process to ensure high
                                                    quality products with fast response and delivery. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                {{ 'Easy-to-use Interface' }}
                                            </button>
                                        </h5>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>{{ ' Use our simple, intuitive interface to undertake your business operations. Be it creating product listings or checking your weekly progress, you can easily manage it with a few taps. ' }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Automated Processing
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Everything from orders and payments to shipping and updating stocks is
                                                    automated on our portal. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Easy Access
                                            </button>
                                        </h5>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                            data-parent="#accordionFAQ">
                                            <div class="accordion-body">
                                                <p>Whether you are looking for suppliers or grab customers, our portal
                                                    provides you the due access. We enable you to reach out to the suppliers
                                                    or be visible to potential customers—all at one platform. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- /.accordion -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-right-image animate-float-bob-y wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="2500ms">
                            <img src="{{ asset('assets/img/details-3.png') }}" alt="faq image">
                        </div>
                    </div>
                </div> <!-- /.row -->
            </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.faq-area -->
    @component('frontend.components.brandsSlider')
    @endcomponent
    @component('frontend.components.leads', ['source' => 'landing'])

    @endcomponent
@endsection
