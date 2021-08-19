
@extends('layouts.frontend.master')

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
                                    Sign in <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <ul>
                                @foreach ($channels as $item)
                                <li class="user-profile" data-toggle="tooltip" data-placement="top" title="{{ $item->title}} integration">
                                    <a href="{{route('integration',['slug'=>$item->slug])}}"><img src="{{asset('assets/img/hero/'.$item->icon)}}" alt="{{ $item->title}}"></a>
                                </li>
                                @if($loop->iteration  >5)
                                @break
                                @endif
                                @endforeach
                                <li class="user-profile sign-up" data-toggle="tooltip" data-placement="top" title="More integrations"><a href="{{route('integrations')}}"><i class="fas fa-plus"></i></a></li>
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

    @component('frontend.components.channels',['channels'=>$channels])

    @endcomponent
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
                    <img class="particle-1 animate-zoom-fade" src="{{asset('assets/img/particle/particle-1.png')}}" alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="{{asset('assets/img/particle/particle-3.png')}}" alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="{{asset('assets/img/particle/particle-7.png')}}" alt="particle Seven">
                </div>

            <div class="row">
                @foreach ($channels as $item)
                <div class="col-lg-3 col-md-6 mt-4">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <a href="{{route('integration',['slug'=>$item->slug])}}">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title">
                                <img src="{{asset('assets/img/services/'.$item->w_thumbnail)}}" alt="{{$item->title}} channel " style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 5px;
                            "></h5>
                            {{-- <p class="iconic-list-content">
                                integration channel
                            </p> --}}
                             </a>
                        </div>
                    </div>
                </div>

                @endforeach


            </div>
            {{-- <div class="row mt-4">
                <div class="col-lg-3 col-md-6">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title"><img src="{{asset('assets/img/services/Linnworks.png')}}" alt="Linnworks " style="
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
                            <h5 class="iconic-list-title"><img src="{{asset('assets/img/services/bigcommerce.png')}}" alt="bigcommerce" style="
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
                            <h5 class="iconic-list-title"><img src="{{asset('assets/img/services/fruugo.svg')}}" alt="bigcommerce" style="
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
                            <h5 class="iconic-list-title"><img src="{{asset('assets/img/services/wish-logo.png')}}" alt="wish" style="
                                height: 55px;
                                margin-top: 2px;
                                margin-left: 5px;
                            "></h5>
                            <p class="iconic-list-content">

                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row --> --}}
            <div class="view-more-btn-wrapper text-center mt-20 wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1500ms">
                <a href="{{route('integrations')}}" class="filled-btn btn-bordered bg-clear-blue">
                    View All Integrations <i class="fas fa-arrow-right"></i>
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
                        @foreach ($pricing_list as $item)
                        <div class="pricing-table pricing-table-v2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="pricing-plan-title">
                                <div class="pricing-table-icon">
                                    <h5 class="plan-title {{$item->class}}">{{$item->title}}</h5>
                                </div>
                                <div class="pricing-plan-features">
                                    <ul>
                                        @foreach ($item->pricingAddons as $addons)
                                        <li class="plan-feature">{{$addons->title}}</li>
                                        @endforeach

                                        {{-- <li class="plan-feature">2.100 Keywords</li>
                                        <li class="plan-feature">One Way Link Building</li> --}}
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
                             @endforeach
                        {{-- <div class="pricing-table pricing-table-v2 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
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
                        </div> --}}
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.pricing-area -->

   <section class="faq-area bg-magnolia pt-130 pb-130">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                <img class="particle-1 animate-zoom-fade" src="{{asset('assets/img/particle/particle-1.png')}}" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle Two">
                <img class="particle-3 animate-float-bob-x" src="{{asset('assets/img/particle/particle-3.png')}}" alt="particle Three">
                <img class="particle-4 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Four">
                <img class="particle-5 animate-zoominout" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
                <img class="particle-7 animate-float-bob-x" src="{{asset('assets/img/particle/particle-7.png')}}" alt="particle Seven">
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
                        <img src="{{asset('assets/img/faq/faq-image.png')}}" alt="faq image">
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.faq-area -->



    <!--====== Start Testimonial Area ======-->
    @component('frontend.components.testimonial')

    @endcomponent
            @component('frontend.components.brandsSlider')

            @endcomponent
    <!--======= End Brands Slider =======-->
    <!--====== Start Contact Area ======-->
    @component('frontend.components.contactUs')

    @endcomponent
    <!--====== End Contact Area ======-->
     <!--====== Start Blog or News Area ======-->
     <section class="blog-and-news-area bg-magnolia pt-130 pb-100" style="background-image: url(assets/img/services/dots-pattern-bg.png);">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-md-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade" src="{{asset('assets/img/particle/particle-1.png')}}" alt="particle One">
                    <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle Two">
                    <img class="particle-3 animate-float-bob-y" src="{{asset('assets/img/particle/particle-3.png')}}" alt="particle Three">
                    <img class="particle-4 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Four">
                    <img class="particle-5 animate-zoominout" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
                    <img class="particle-7 animate-float-bob-x" src="{{asset('assets/img/particle/particle-7.png')}}" alt="particle Seven">
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
                                            <img src="{{asset('assets/img/blog/blog-thumbnail-1.jpg')}}" alt="blog thumbnail one">
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
                                            <img src="{{asset('assets/img/blog/blog-thumbnail-2.jpg')}}" alt="blog thumbnail twp">
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
                        <img class="cta-particle-left" src="{{asset('assets/img/cta/cta-left-particle-1.png')}}" alt="cta particle 1">
                        <img class="cta-particle-right" src="{{asset('assets/img/cta/cta-right-particle-1.png')}}" alt="cta particle 2">
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


   @component('frontend.components.subscribe')

   @endcomponent
@endsection
