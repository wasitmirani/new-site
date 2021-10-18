@extends('layouts.frontend.master')

@push('styles')
    <style>
        .bg-royal-blue {
            background-color: #473bf0;
        }

    </style>
@endpush
@section('content')
    @component('frontend.components.breadcrumb', ['title' => 'About Us'])
    @endcomponent

    <!--====== Start About Us Area ======-->
    <section class="our-services border-top-blue pt-130 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-70">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Popular Services</span>
                        </div>
                        <h2>We aspire to automate DropShipping throughout <br class="d-none d-md-block"> to make it simple,
                            hassle-free, and reliable.</h2>
                    </div>
                </div> <!-- /.col-lg-8 -->
            </div> <!-- /.row -->
            <div class="our-services-content-wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.1s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/integration-Channels.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Automated Processing
                                </h5>
                                <p class="iconic-box-content">
                                    Dropshipping, although convenient, comes with certain complications, especially for the
                                    low tech sellers. We enable automated order processing, transactions, and shipping as
                                    well as automated integration with other online stores. What’s more, say good bye to
                                    manual listings creation with eDropShip.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.3s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/secure-Payment.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Secure Transactions
                                </h5>
                                <p class="iconic-box-content">
                                    Unreliable suppliers who could be based anywhere and unsecure payments remain the major
                                    dropshipping issues. eDropShip provides solution to these issues by ensuring verified
                                    UK-based suppliers, and secure payment modes to help you do business stress-free.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.5s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/HASSLE-FREE-EXPERIENCE.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Mission Statement: </h5>
                                <p class="iconic-box-content">
                                    To bring the businesses in ecommerce together in one place by tapping the full potential
                                    of the internet and technological innovation.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.7s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/Streamlined-Operations.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Vision Statement: </h5>
                                <p class="iconic-box-content">
                                    We aspire to make a mark in the world of ecommerce by providing the right infrastructure
                                    and make business flourish with reduced costs and high profits.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                </div> <!-- /.row -->
            </div> <!-- /.our-services-content-wrapper -->
        </div> <!-- /.container -->
    </section>
    <section class="about-us-area pt-130 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="about-images content-right-spacer">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="animate-square-zoom wow fadeInDown" data-wow-delay="0.1s">
                                    <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/amazon_icon.png"
                                        alt="about thumbnail one">
                                </div>
                                <div class="animate-square-zoom wow fadeInUp" data-wow-delay="0.3s">
                                    <img class="about-thumbnail about-thumbnail-3"
                                        src="assets/img/hero/bigcommerce_icon.png" alt="about thumbnail three">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="animate-square-zoom wow fadeInDown" data-wow-delay="0.2s">
                                    <img class="about-thumbnail about-thumbnail-2" src="assets/img/hero/gumtree_icon.png"
                                        alt="about thumbnail two">
                                </div>
                                <div class="animate-square-zoom wow fadeInUp" data-wow-delay="0.5s">
                                    <img class="about-thumbnail about-thumbnail-4" src="assets/img/hero/etsy_icon.png"
                                        alt="about thumbnail four">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">About Company</span>
                            </div>
                            <h2>DropShipping can be way easier than it seems to be!</h2>
                            <div class="section-title-description">
                                <p>With eDropShip, we aim to eliminate the hurdles and hassles associated with dropshipping.
                                    Our goal is to revolutionize the ecommerce arena with IT solutions. Our tailor-made
                                    technical solutions to dropshipping problems make us stand out. </p>
                            </div>
                        </div>
                        <div class="simple-icon-box-wrapper mt-45 mb-38">
                            <div class="simple-single-icon-box">
                                <i class="fal fa-users"></i>
                                <h4>Build Real Users</h4>
                                <p>Unde omnis natus volu accusantium doloremqie laudantium totam</p>
                            </div>
                            <div class="simple-single-icon-box">
                                <i class="fal fa-tools"></i>
                                <h4>Process Easily</h4>
                                <p>But I must explain you this mistak denouncinge pleasure praising</p>
                            </div>
                        </div>
                        {{-- <div class="section-button-wrapper">
                            <a href="about.html" class="filled-btn btn-bordered bg-royal-blue">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div> --}}
                    </div>
                </div> <!-- /.col-lg-5 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.about-us-area -->

    <section class="our-services border-top-blue pt-130 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col">
                    <div class="section-title text-center mb-70">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Popular Services</span>
                        </div>
                        <h2>Made Amazing Integration <br class="d-none d-md-block"> With eDropShip</h2>
                    </div>
                </div> <!-- /.col-lg-8 -->
            </div> <!-- /.row -->
            <div class="our-services-content-wrapper">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.1s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/amazon_icon.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Amazon DropShipping
                                </h5>
                                <p class="iconic-box-content">
                                    List your Amazon store with thousands of products from our verified suppliers from the
                                    UK, Europe and Worldwide, with complete automation to manage inventory, orders and
                                    shipping that will help you sell without any boundary or limit.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.3s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/Ebay_icon.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">ebay DropShipping
                                </h5>
                                <p class="iconic-box-content">
                                    List your eBay store with thousands of products from our verified suppliers from the UK,
                                    Europe and Worldwide, with complete automation to manage inventory, orders and shipping
                                    that will help you sell without any boundary or limit.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.5s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/shopify_icon.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">Shopify DropShipping</h5>
                                <p class="iconic-box-content">
                                    List your Shopify store with thousands of products from our verified suppliers from the
                                    UK, Europe and Worldwide, with complete automation to manage inventory, orders and
                                    shipping that will help you sell without any boundary or limit.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                    <div class="col-xl-6 col-lg-6">
                        <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.7s"
                            data-wow-duration="2000ms">
                            <div class="iconic-box-icon ">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/woocommerce_icon.png"
                                    alt="about thumbnail one">
                            </div>
                            <div class="iconic-box-body">
                                <h5 class="iconic-box-title">WooCommerce DropShipping</h5>
                                <p class="iconic-box-content">
                                    List your WooCommerce store with thousands of products from our verified suppliers from
                                    the UK, Europe and Worldwide, complete automation to manage inventory, orders and
                                    shipping that will help you sell without any boundary.
                                </p>
                            </div>
                        </div>
                    </div> <!-- /.col-lg-6-->
                </div> <!-- /.row -->
            </div> <!-- /.our-services-content-wrapper -->
        </div> <!-- /.container -->
    </section> <!-- /.our-services -->
    <!--====== End Services Area ======-->
    <!--====== Start Team Member Area ======-->

    <!--====== End Team Member Area ======-->
    <!--====== Start Counter Up Area ======-->
    <section class="company-statistic-area pt-120 pb-70">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="square-and-oval-image-wrapper content-right-spacer">
                        <div class="image-square">
                            <img src="http://127.0.0.1:8000/assets/img/about/why-choose-us-1.jpg" alt="why choose one">
                        </div>
                        <div class="image-oval animate-float-bob-y">
                            <img src="http://127.0.0.1:8000/assets/img/about/why-choose-us-2.jpg" alt="why choose two">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="why-choose-us-content content-left-spacer">
                        <div class="section-title mb-40">
                            <h2> {{"Our Plan & Use Case "}} </h2>
                            <div class="section-title-description">
                                <p>We strive to remove the barriers between the B2B businesses in ecommerce via an automated
                                    portal—a one-stop solution for traders, sellers, buyers, vendors, exporters, and
                                    manufacturers. </p>
                            </div>
                        </div>
                        <div class="iconic-list-wrapper iconic-list-wrapper-v2">
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="0ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Customers First.</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Convenience</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Be Transparent</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Build Trust</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Learn and Innovate </h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Rise to the Occasion </h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Diversify </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /.company-statistic-area -->
    {{-- <section class="counter-up-area bg-royal-blue pt-128 pb-43">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="counter-up-thumbnails content-right-spacer wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <img class="counterup-main-thumbnail-top animate-float-bob-x"
                            src="assets/img/app/count-down-main-thumbnail-top.png" alt="countdown thumbnails top">
                        <img class="counterup-main-thumbnail" src="assets/img/app/count-down-main-thumbnail.png"
                            alt="countdown thumbnails main">
                        <img class="counterup-main-thumbnail-bottom animate-float-bob-y"
                            src="assets/img/app/count-down-main-thumbnail-bottom.png" alt="countdown thumbnails bottom">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="counterup-wrapper">
                        <div class="row">
                            <!-- Single Counter Up -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-counter-up wow fadeInUp" data-wow-delay="0ms"
                                    data-wow-duration="1500ms">
                                    <div class="counterup-icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <div class="counterup-info">
                                        <h2>
                                            <span class="counter">96327</span>
                                            <span class="sign">+</span>
                                        </h2>
                                        <p>Daily active users</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Counter Up -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-counter-up wow fadeInUp" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <div class="counterup-icon">
                                        <i class="fas fa-file-alt"></i>
                                    </div>
                                    <div class="counterup-info">
                                        <h2>
                                            <span class="counter">78630</span>
                                            <span class="sign">+</span>
                                        </h2>
                                        <p>Project complate</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Counter Up -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-counter-up wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <div class="counterup-icon">
                                        <i class="fas fa-cloud-download-alt"></i>
                                    </div>
                                    <div class="counterup-info">
                                        <h2>
                                            <span class="counter">56326</span>
                                            <span class="sign">+</span>
                                        </h2>
                                        <p>Download software</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Counter Up -->
                            <div class="col-md-6 col-sm-6">
                                <div class="single-counter-up wow fadeInUp" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <div class="counterup-icon">
                                        <i class="fas fa-gem"></i>
                                    </div>
                                    <div class="counterup-info">
                                        <h2>
                                            <span class="counter">63020</span>
                                            <span class="sign">+</span>
                                        </h2>
                                        <p>5 Star rating reviews</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.counterup-wrapper -->
                </div> <!-- /.col-md-7 -->
            </div> <!-- /.row -->
        </div> <!-- /.container-->
    </section> <!-- /.counter-up-area --> --}}
    <!--====== End Counter Up Area ======-->

    @component('frontend.components.brandsSlider')

    @endcomponent

@endsection
