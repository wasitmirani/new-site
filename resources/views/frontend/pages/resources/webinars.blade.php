@extends('layouts.frontend.master')


@section('content')

@component('frontend.components.breadcrumb',['title'=>"webinars"])

@endcomponent

<section class="service-details-wrapper pt-125 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-details-content">
                    <h2>Get professional advice</h2>
                    <p>Get professional advice on effective ways to run your online business and operate on the ecommerce marketplaces. </p>
                    <div class="image-block">
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <img src="{{ asset('assets/img/girl.png')}}"  alt="webinar" >
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('assets/img/webinar.png')}}" alt="webinar">
                            </div>
                        </div>
                    </div>
                    <h3>Other webinars.</h3>
                    <div class="image-block">
                        <div class="row">
                            <div class="col-md-4 align-self-center">
                                <img src="{{ asset('assets/img/w2.png')}}"  alt="webinar" >
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/webinar.png')}}" alt="webinar">
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/img/w3.png')}}" alt="webinar">
                            </div>
                        </div>
                    </div>
                    <div class="customer-faq mt-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="customer-faq-thumbnail animate-square-zoom wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                                    <img src="{{ asset('assets/img/services/service-details-thumbnail-3.jpg')}}" alt="service details three">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="section-accordion section-accordion-v2">
                                    <h3 class="faq-accordion-title">Frequently Asked Quesations</h3>
                                    <div class="accordion" id="accordionFAQ">
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Getting started with eDropShip as a Seller 
                                                </button>
                                            </h5>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <p>From signing up to making your first sale, our team will guide you through the whole process of turning your store into success</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                    Getting started with eDropShip as a Wholesaler 
                                                </button>
                                            </h5>
                                            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <p>A short demo on everything you need to know about eDropShip’s features for wholesalers. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Getting started with eDropShip as an Exporter
                                                </button>
                                            </h5>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <p>Learn how to find the right clients for your products and let your business scale with eDropShip. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h5 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    How to integrate channels and create product listings 
                                                </button>
                                            </h5>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                                                <div class="accordion-body">
                                                    <p>A demo on channel integration and creation of product listing by our team. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /.accordion -->
                                </div> <!-- /.section-accordion -->
                            </div>
                        </div>
                    </div> <!-- /.customer-faq -->
                    <blockquote>
                        On the other hand, we denounce with righteous indignation and dislike men who are beguiled demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue and equal blame "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure
                    </blockquote>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.service-details-wrapper -->
<!--====== End Service Details Area ======-->
<!--====== Start Subscribe Newsletter Area ======-->
<section class="subscribe-newsletter-area bg-white-lilac pt-130 pb-123" style="background-image: url({{ asset('assets/img/particle/newsletter-bg.png')}});">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v4">
                <img class="particle-1 animate-rotate-me" src="{{ asset('assets/img/particle/particle-2.png')}}" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="{{ asset('assets/img/particle/gradient-curve-shape-2.png')}}" alt="particle Two">
                <img class="particle-3 animate-zoominout" src="{{ asset('assets/img/particle/particle-4.png')}}" alt="particle Three">
                <img class="particle-4 animate-float-bob-y" src="{{ asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="subscribe-newsletter-content">
                        <div class="section-title mb-35">
                            <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <span class="single-heading-tag">Our Newsletter</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Subscribe Our Newsletter <br class="d-none d-md-block">To Get More Update</h2>
                        </div>
                        <div class="newsletter-form newsletter-form-v2 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                            <form>
                                <div class="form-group">
                                    <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Enter Your Email Address">
                                    <button type="submit" name="submit" value="Go" class="filled-btn">Subscribe Now <i class="fas fa-arrow-right"></i></button>
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

@endsection
