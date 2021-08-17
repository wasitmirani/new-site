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
                        <h5>{{ $channel->title  }} Integration </h5>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Source inventory for your <span>{{ $channel->title  }} </span> with @component('frontend.components.appTitle')

                        @endcomponent <div class="brand-logo">
                        <br>
                            <h5 >
                            Integrate your {{ $channel->title }} store to easily automate your DropShipping order management, payments and shipping


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
                        <span class="single-heading-tag">Our integration process is straight forward & intuitive                        </span>
                    </div>
                    <h2>Source inventory from verified suppliers & <span>sell on</span> {{ $channel->title  }}</h2>
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
</section>
<section class="our-services pt-216 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-135 text-center section-title-tuna">
                    <h2>eDropShip features for {{ $channel->title }} store owners
                        <br class="d-none d-md-block"> With <span>Our Solutions</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-right-image text-center animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                    <img src="{{ asset('assets/img/services/service-image.png') }}" alt="service left thumbnail">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="icon-boxes-wrapper icon-boxes-grid">
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-3">
                            <i class="far fa-user-chart"></i>
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Easy set up</h5>
                            <p class="iconic-box-content">
                                Sed ut perspiciatis unde este error voluptate accus antium doloremque
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-4">
                            <i class="far fa-compass"></i>
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Automated product listing</h5>
                            <p class="iconic-box-content">
                                But I must explain to you how all this mistaken idea denouncing pleasure
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-5">
                            <i class="far fa-squirrel"></i>
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Order processing
                            </h5>
                            <p class="iconic-box-content">
                                Quis autem vel eum iure reprehe deritea voluptate velit esse quam nihil
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-6">
                            <i class="far fa-fingerprint"></i>
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Inventory synchronisation
                            </h5>
                            <p class="iconic-box-content">
                                At vero eoset accusame et iusto odio dignissimosy ducimus qui bland
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /,row -->
    </div> <!-- /.container -->
</section>
@component('frontend.components.testimonial')

@endcomponent
@endsection

