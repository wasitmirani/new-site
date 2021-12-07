@extends('layouts.frontend.master') @section('content')


    <section class="hero-area hero-v4" style="background-image: url({{ asset('assets/img/app/app-bg.png') }});">
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
                            <h5> Paltform Tour</h5>

                            <h2 class="wow fadeInUp text-white" data-wow-delay="0.2s" data-wow-duration="1500ms">Everything
                                you need to make DropShipping easier with @component('frontend.components.appTitle')

                                @endcomponent <div class="brand-logo">
                                    <br>
                                    <h5>
                                        eDropShip provides you with the tools and support you need to scale your
                                        DropShipping business


                                    </h5>
                                </div>
                            </h2>
                            <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.3s"
                                data-wow-duration="1500ms">
                                <a href="https://portal.edropship.co.uk/register" class="filled-btn bg-mandy button-radius"
                                    target="_blank">
                                    Get Free Trial <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="https://portal.edropship.co.uk/" class="filled-btn bg-purple button-radius"
                                    target="_blank">
                                    Sign in <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="chartboard-image-wrapper">
                        <img src="{{ asset('assets/img/hero/chartboard-image-main.png') }}" alt="chartboard image one"
                            class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x"
                            data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="chartboard-app-preview">
                            {{--  <img src="{{ asset('assets/img/hero/chartboard-app-preview-1.jpg') }}" alt="app preview one"
                                class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms"
                                data-wow-duration="1500ms">  --}}
                            {{--  <img src="{{ asset('assets/img/product_1.gif') }}" alt="app preview two"
                                class="chartboard-image chartboard-app-preview-2 wow fadeInDown" data-wow-delay="700ms"
                                data-wow-duration="1500ms">  --}}
                            {{--  <img src="{{ asset('assets/img/hero/chartboard-app-preview-3.jpg') }}" alt="app preview three"
                                class="chartboard-image chartboard-app-preview-3 wow fadeInDown" data-wow-delay="300ms"
                                data-wow-duration="1500ms">  --}}
                        </div>
                        <img src="{{ asset('assets/img/hero/chartboard-image-secondary.png') }}"
                            alt="chartboard image two"
                            class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                    </div> <!-- /.chart-board-image-wrapper -->
                </div>
            </div> <!-- /.row -->
        </div> <!-- .container -->

    </section>

    <section class="testimonial-area overflow-hidden border-0 pb-120 pt-120">
        <div class="container">
            <div class="section-internal">
                <div class="section-particle-effect d-none d-lg-block section-particle-effect-v2">
                    <img class="particle-1 animate-zoom-fade"
                        src="{{ asset('assets/img/testimonial/testimonial-bg-author-1.png') }}" alt="particle One">
                    <img class="particle-3 animate-float-bob-x"
                        src="{{ asset('assets/img/testimonial/testimonial-bg-author-2.png') }}" alt="particle two">
                    <img class="particle-5 animate-zoom-fade"
                        src="{{ asset('assets/img/testimonial/testimonial-bg-author-3.png') }}" alt="particle three">
                    <img class="particle-7 animate-float-bob-y"
                        src="{{ asset('assets/img/testimonial/testimonial-bg-author-4.png') }}" alt="particle four">
                </div>
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center section-title-clear-gray mb-33">
                            <div class="section-heading-tag">
                                <h2> Product sourcing </h2>
                            </div>
                            <span class="single-heading-tag"> Expand your inventory with our extensive Product Range</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider" id="testimonial-slider-v3">
                    <div class="single-testimonial single-testimonial-v6">
                        <div class="single-testimonial-body">
                                <video autoplay muted style="width: 100%">
                                    <source src="{{ asset('assets/img/Add a product.mp4') }}" type="video/mp4" />
                                </video>
                        </div>
                    </div>

                </div>


            </div> <!-- /.testimonial-slider -->
        </div> <!-- /.section-internal -->
        </div> <!-- /.container -->
    </section> <!-- /.testimonial-area -->





@endsection
