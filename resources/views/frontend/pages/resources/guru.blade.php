@extends('layouts.frontend.master') @section('content')

    <section class="hero-area hero-v5 bg-solid-dark"
        style="background-image: url({{ asset('assets/img/hero/map-bg.png') }});">
        <div class="container">
            <div class="hero-internal">
                <div class="row">
                    <div class="col-xl-8 col-lg-9">
                        <div class="hero-content">
                            <div class="section-title section-title-white">
                                <h1 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Having Trouble?
                                    Take Help from Our Guru! </h1>
                                <div class="section-title-quote wow fadeInUp" data-wow-delay="0.5s"
                                    data-wow-duration="1500ms">
                                    <h3>Our eDropShip experts are here to guide you through the entire setup of your store,
                                        making sales, marketing, and more. </h3>
                                </div>
                                <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.7s"
                                    data-wow-duration="1500ms">
                                    <span>
                                        <a href="{{ route('contact.contactus') }}" class="filled-btn">
                                            Discover More <i class="fas fa-arrow-right"></i>
                                        </a>
                                    </span>
                                    {{--  <span class="play-video">
                                        <a href="../../../87110435.html" class="play-btn">
                                            <i class="fas fa-play pulse-animated"></i>
                                        </a>
                                    </span>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-right-thumbnail"
                    style="background-image: url({{ asset('assets/img/hero/hero-v5-right-thumbnail.jpg') }});">
                    <div class="hero-right-bg-shape"></div>
                </div>
            </div> <!-- /.hero-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.hero-area -->
    <!--====== End Hero Area ======-->
    <!--====== Start Company Statistic Area ======-->
    <section class="company-statistic-area pt-120 pb-70">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="square-and-oval-image-wrapper content-right-spacer">
                        <div class="image-square">
                            <img src="{{ asset('assets/img/focus.png') }}" alt="why choose one">
                        </div>
                        <div class="image-oval animate-float-bob-y">
                            <img src="{{ asset('assets/img/about/why-choose-us-2.jpg') }}" alt="why choose two">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us-content content-left-spacer">
                        <div class="section-title mb-40">
                            <h2> Focus on Stuff That Matters </h2>
                            <div class="section-title-description">
                                <p>Whether you seek help for setting up your online store, increasing your sales, or
                                    marketing your business, we have got a consultant for you. Our guru will work alongside
                                    you to develop your business by utilizing the market expertise. </p>
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
                                    <h5 class="iconic-list-title">Starting online store</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Amazon</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">eBay</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Shopify</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Etsy</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Dropshipping </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div>
    </section> <!-- /.company-statistic-area -->
    <!--====== End Company Statistic Area ======-->
    <!--====== Start Our Services Area ======-->
    <!-- /.our-services -->
    <!--====== End Start Our Services Area ======-->
    <!--====== Start Simple CTA Area ======-->
    <section class="simple-cta-area bg-royal-blue"
        style="background-image: url({{ asset('assets/img/cta/simple-cta-bg.png') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="simple-cta-content">
                        <h4>Avail the Professional Expertise; Optimize your Business Operations</h4>
                        <a href="{{ route('contact.contactus') }}" class="filled-btn btn-bordered btn-off-white">
                            Contact Us <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.simple-cta-area -->
    <!--====== End Simple CTA Area ======-->
    <section class="contact-area pt-120 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-75">
                        <h2>Whatever You Do, <br class="d-none d-md-block"> Do It Right</h2>
                    </div>
                </div>
            </div> <!-- /.row -->
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="contact-box-wrapper">
                                <div class="single-contact-box wow fadeInUp" data-wow-delay="0.2s"
                                    data-wow-duration="1500ms">
                                    <h4>Ecommerce Marketplaces </h4>
                                    <p>Our guru will guide you on starting online business on the major ecommerce
                                        marketplaces like Shopify, Amazon, eBay, and others. </p>
                                    <a href="{{ route('contact.contactus') }}"
                                        class="filled-btn btn-bordered bg-royal-blue">
                                        Join with us <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="single-contact-box wow fadeInUp" data-wow-delay="0.2s"
                                    data-wow-duration="1500ms">
                                    <h4>Dropshipping </h4>
                                    <p>Make your business simple and hassle-free with dropshipping. Our guru will teach you
                                        how to dropship and do online business optimally. </p>
                                    <a href="{{ route('contact.contactus') }}"
                                        class="filled-btn btn-bordered bg-royal-blue">
                                        Join with us <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-form-area contact-form-area-v2 wow fadeInUp" data-wow-delay="0.6s"
                        data-wow-duration="1500ms">
                        <div class="contact-respond">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="fullName" placeholder="Your Full Name"
                                        name="name" required="">
                                    <label for="fullName">Name</label>
                                </div>
                                <div class="input-group">
                                    <input type="email" class="form-control" id="yourEmail" placeholder="Email Address"
                                        name="email" required="">
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
                                    <textarea class="form-control" id="message" placeholder="Write Message"
                                        name="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                <div class="input-group">
                                    <button type="submit" class="filled-btn">Get Free Quote <i
                                            class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    <!--====== Start Why Choose Us Area ======-->
    <section class="why-choose-us-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="square-and-oval-image-wrapper content-right-spacer">
                        <div class="image-square">
                            <img src="{{ asset('assets/img/guru.png') }}" alt="why choose one">
                        </div>
                        <div class="image-oval animate-float-bob-y">
                            <img src="{{ asset('assets/img/Our integrated solution02-01.png') }}" alt="why choose two">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-choose-us-content content-left-spacer">
                        <div class="section-title mb-40">
                            <h2>From getting started to launching the store, our guru will assist you in the whole journey</h2>
                            <div class="section-title-description">
                                {{-- <p>Planning to set up an online store but don’t know how to start? eDropShip’s team of experts will guide you throughout the process and teach you every aspect of doing online business. Our training will cover:</p> --}}
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
                                    <h5 class="iconic-list-title">Setting up an online store </h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Increasing sales </h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="400ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Marketing </h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="600ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Design and Writing</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.why-choose-us-area -->

    @component('frontend.components.testimonial')

    @endcomponent
@endsection
