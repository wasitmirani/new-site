@extends('layouts.frontend.master')


@section('content')

@component('frontend.components.breadcrumb',['title'=>"webinars"])

@endcomponent

<section class="service-details-wrapper pt-125 pb-95">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="service-details-content">
                    <h2>Email Marketing</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam</p>
                    <div class="image-block">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="animate-square-zoom wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/img/services/service-details-thumbnail-1.jpg')}}" alt="service details one">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="animate-square-zoom wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/img/services/service-details-thumbnail-2.jpg')}}" alt="service details two">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3>Results For Email Marketing In Business</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt porro quisquam </p>
                    <div class="icon-boxes-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-1 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="iconic-box-icon">
                                        <img src="{{ asset('assets/img/feature/flaticon-headphones.png')}}" alt="headphones">
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
                                <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-2 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="iconic-box-icon">
                                        <img src="{{ asset('assets/img/feature/flaticon-share.png')}}" alt="share">
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Business Consulting</h5>
                                        <p class="iconic-box-content">
                                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-3 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="iconic-box-icon">
                                        <img src="{{ asset('assets/img/feature/flaticon-chatting.png')}}" alt="chatting">
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
                                <div class="single-iconic-box iconic-box-v3 exclusive-iconic-box-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="iconic-box-icon">
                                        <img src="{{ asset('assets/img/feature/flaticon-satisfaction.png')}}" alt="satisfaction">
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Quality Assurance</h5>
                                        <p class="iconic-box-content">
                                            Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium dolore.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.icon-boxes-wrapper -->
                    <div class="customer-faq">
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
