@extends('layouts.frontend.master')

@push('styles')
<style>
    .bg-royal-blue {
    background-color: #473bf0;
}
</style>
@endpush
@section('content')


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
                        <h5>{{ $name }} Integration </h5>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Source inventory for your <span>{{ $name }} </span> with @component('frontend.components.appTitle')

                        @endcomponent <div class="brand-logo">
                        <br>
                            <h5 >
                            Integrate your {{ $name }} store to easily automate your DropShipping order management, payments and shipping


                        </h5>


                            {{--  <a href="index.html">
                                <img src="{{asset('assets/img/logo-red.png')}}" alt="logo">
                            </a>  --}}
                        </div> </h2>
                        <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <a href="services.html" class="filled-btn bg-mandy button-radius">
                                Get Free Trial <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="about.html" class="filled-btn bg-purple button-radius">
                                Sign in <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                        <ul>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Amazon integration"><a href="#"><img src="{{asset('assets/img/hero/amazon_ico.png')}}" alt="amazon"></a></li>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Ebay integration"><a href="#"><img src="{{asset('assets/img/hero/ebay_icon.png')}}" alt="ebay"></a></li>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Shopify integration"><a href="#"><img src="{{asset('assets/img/hero/shopify.png')}}" alt="shopify"></a></li>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Bigcommerce  integration"><a href="#"><img src="{{asset('assets/img/hero/bigcommerce.png')}}" alt="bigcommerce"></a></li>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="Wish integration"><a href="#"><img src="{{asset('assets/img/hero/wish-logo.png')}}" alt="wish-logo"></a></li>
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="WooCommerce integration"><a href="#"><img src="{{asset('assets/img/hero/WooCommerce_logo.png')}}" alt="WooCommerce_logo "></a></li>
                            <li class="user-profile sign-up" data-toggle="tooltip" data-placement="top" title="More integrations"><a href="#"><i class="fas fa-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chartboard-image-wrapper">
                    {{--  <img src="{{asset('assets/img/hero/chartboard-image-main.png')}}" alt="chartboard image one" class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x" data-wow-delay="100ms" data-wow-duration="1500ms">  --}}
                    <div class="chartboard-app-preview">
                        <img src="https://edrop-landingapp.dev/assets/img/seller/Sell%20Giff%20Banner.gif" alt="app preview one" class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">

                    </div>
                    {{--  <img src="{{asset('assets/img/hero/chartboard-image-secondary.png')}}" alt="chartboard image two" class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y" data-wow-delay="900ms" data-wow-duration="1500ms">  --}}
                </div> <!-- /.chart-board-image-wrapper -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- .container -->
</section>
<section class="our-services our-services-v3 bg-light-magnolia pt-120 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="section-title text-center mb-45">
                    <h2>Learn How to Move Faster</h2>
                    <div class="section-title-description">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="single-service-box single-service-box-v3 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="service-thumbnail">
                        <img src="{{asset('assets/img/services/service-thumbnail-7.jpg')}}" alt="service thumbnail one">
                    </div>
                    <div class="service-box-content">
                        <h5 class="service-box-title">Smart Softwares</h5>
                        <p>Quis autem vel eum iure righteous
                            qui in ea voluptate velit esse.</p>
                        <div class="service-box-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-service-box single-service-box-v3 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                    <div class="service-thumbnail">
                        <img src="{{asset('assets/img/services/service-thumbnail-8.jpg')}}" alt="service thumbnail two">
                    </div>
                    <div class="service-box-content">
                        <h5 class="service-box-title">Trusted Security</h5>
                        <p>On the other hand we denounce with righteous indignation dislike</p>
                        <div class="service-box-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-service-box single-service-box-v3 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="service-thumbnail">
                        <img src="{{asset('assets/img/services/service-thumbnail-9.jpg')}}" alt="service thumbnail three">
                    </div>
                    <div class="service-box-content">
                        <h5 class="service-box-title">Awards Winners</h5>
                        <p>To take trivial example which of ever undertakes laborious physical</p>
                        <div class="service-box-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="single-service-box single-service-box-v3 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                    <div class="service-thumbnail">
                        <img src="{{asset('assets/img/services/service-thumbnail-10.jpg')}}" alt="service thumbnail four">
                    </div>
                    <div class="service-box-content">
                        <h5 class="service-box-title">Great Experience</h5>
                        <p>Ut enim ad minima veniam with indignation  ullam corporis</p>
                        <div class="service-box-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->
<!--====== End Our Services Area ======-->
<!--====== Start Our Statistic Area ======-->
<section class="our-statistics-area pt-120 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="our-statistics-content content-right-spacer">
                    <div class="section-title section-title-clear-blue">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Company Statistic</span>
                        </div>
                        <h2>Our Track Record Of Fearless Ventures</h2>
                        <div class="section-title-description">
                            <p class="mb-10">Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo inventore.</p>
                            <p>Quis autem vel eum iure reprehenderit qui ea voluptate velit esse quam nihil molestiae consequatur</p>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="about.html" class="filled-btn bg-clear-blue">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="our-statistics-images content-left-spacer content-right-spacer">
                    <div class="our-statistics-image-relative animate-float-bob-y">
                        <img src="{{asset('assets/img/app/our-statistic-image-relative.png')}}" alt="our statistic right">
                    </div>
                    <div class="our-statistics-image-main">
                        <img src="{{asset('assets/img/app/our-statistic-image-main.png')}}" alt="our statistic main">
                    </div>
                    <div class="our-statistics-image-absolute animate-float-bob-x">
                        <img src="{{asset('assets/img/app/our-statistic-image-absolute.png')}}" alt="our statistic left">
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.our-statistics-area -->
<!--====== End Our Statistic Area ======-->
<!--====== Start Services Law Area ======-->
<section class="services-law-area pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="services-law-images content-left-spacer content-right-spacer">
                    <div class="services-law-image-relative animate-float-bob-x">
                        <img src="{{asset('assets/img/services/service-law-relative.png')}}" alt="service law right">
                    </div>
                    <div class="services-law-image-main">
                        <img src="{{asset('assets/img/services/service-law-main.jpg')}}" alt="service law main">
                    </div>
                    <div class="services-law-image-absolute animate-float-bob-y">
                        <img src="{{asset('assets/img/services/service-law-absolute.png')}}" alt="service law left">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-law-content content-left-spacer">
                    <div class="section-title section-title-clear-blue">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Services Power Law</span>
                        </div>
                        <h2>Pace Of Change Is Power Law In Financial Services</h2>
                        <div class="section-title-description mb-0">
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptate accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae abillo inventore.</p>
                        </div>
                        <div class="section-list-style list-style-v3 mt-22 mb-35">
                            <ul>
                                <li>Create A Compelling Landing Page</li>
                                <li>Baking Structured Data Into Design Process</li>
                            </ul>
                        </div>
                        <div class="section-button-wrapper">
                            <a href="about.html" class="filled-btn btn-bordered bg-clear-blue">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.services-law-area -->
<!--====== End Services Law Area ======-->
<!--====== Start Fact and CTA Area ======-->
<section class="fact-and-cta-area pt-85 bg-dark-blue" style="background-image: url(assets/img/cta/fact-and-cta-bg-map.png);">
    <div class="container">
        <div class="fact-area pb-35">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-counter-up single-counter-up-v2 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">35</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>Our Trusted Active Clients </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-counter-up single-counter-up-v2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">72</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>SEO Project Complate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-counter-up single-counter-up-v2 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">94</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>Experience Members</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-cta-area">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="featured-video-area">
                        <div class="featured-video-content video-overlay bg-cover play-video" style="background-image: url(assets/img/feature/featured-video-cover-2.jpg);">
                            <a href="https://vimeo.com/87110435" class="play-video-btn play-video-btn-v2"><i class="fas fa-play pulse-animated"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="cta-area-2 bg-clear-blue">
                        <div class="cta-content">
                            <div class="section-title section-title-white text-center">
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Get Free Consultations</h2>
                                <div class="section-title-description wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                                    <p>Sed ut perspiciatis unde omnis iste  voluptate accusan dolore</p>
                                </div>
                                <div class="section-button-wrapper text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <a href="contact.html" class="filled-btn btn-bordered">
                                        Get A Quote <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row-->
        </div> <!-- /.video-cta-area -->
    </div> <!-- /.container -->
</section> <!-- /.fact-and-cta-area -->

<section class="our-services-area pt-95 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/business-analysis.png')}}" alt="icon one">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Business Analysis</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/consulting.png')}}" alt="icon two">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Fintech Consulting</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/finance.png')}}" alt="icon three">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Finance Platforms</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/cog.png')}}" alt="icon four">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Quality Assurance</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/research.png')}}" alt="icon five">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Focused Research</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/expense-report.png')}}" alt="icon six">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Expense Reporting</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/data-verification.png')}}" alt="icon seven">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Data Verification</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/services/tax.png')}}" alt="icon eight">
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">Tax & Vat Advisory</h5>
                        <p class="iconic-box-content">
                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
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
</section> <!-- /.our-services-area -->
<section class="cta-area cta-area-v2" style="background-image: url(assets/img/cta/cta-bg.jpg);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="cta-content">
                    <div class="section-title section-title-white text-center">
                        <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <span class="single-heading-tag">Get Free Consultations</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Want To Know More Informations <br class="d-none d-md-block"> About Fintech Solutions?</h2>
                        <div class="section-button-wrapper section-dual-button justify-content-center text-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <a href="contact.html" class="filled-btn bg-clear-blue">
                                Get Free Quote <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="about.html" class="filled-btn btn-bordered">
                                How It Works <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>  <!-- /.cta-area -->
@component('frontend.components.testimonial')

@endcomponent
@endsection

