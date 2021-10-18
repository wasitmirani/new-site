@extends('layouts.frontend.master')

@push('styles')
    <style>
        .bg-royal-blue {
            background-color: #473bf0;
        }

    </style>
@endpush
@section('content')


    <section class="hero-area hero-v4" style="background-image: url({{ asset('assets/img/integration/'.$channel->thumbnail)}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <div class="section-particle-effect d-none d-lg-block">
                            <img class="particle-1 animate-rotate-me" src="{{ asset('assets/img/particle/particle-2.png') }}"
                                alt="particle One">
                            <img class="particle-2 animate-float-bob-y"
                                src="{{ asset('assets/img/particle/particle-3.png') }}" alt="particle Two">
                            <img class="particle-3 animate-zoominout" src="{{ asset('assets/img/particle/particle-4.png') }}"
                                alt="particle Three">
                            <img class="particle-4 animate-float-bob-y"
                                src="{{ asset('assets/img/particle/particle-5.png') }}" alt="particle Four">
                        </div>
                        <div class="section-title section-title-mandy">
                            <h5>{{ $channel->title }} Integration </h5>

                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Source inventory for
                                your <span>{{ $channel->title }} </span> with @component('frontend.components.appTitle')

                                @endcomponent <div class="brand-logo">
                                    <br>
                                    <h5>
                                        Integrate your {{ $channel->title }} store to easily automate your DropShipping
                                        order management, payments and shipping


                                    </h5>


                                    {{-- <a href="index.html">
                                <img src="{{asset('assets/img/LOGO-Web.png')}}" alt="logo">
                            </a> --}}
                                </div>
                            </h2>
                            <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.3s"
                                data-wow-duration="1500ms">
                                <a href="{{ route('pricing') }}" class="filled-btn bg-mandy button-radius">
                                    Get Free Trial <i class="fas fa-arrow-right"></i>
                                </a>
                                <a href="https://portal.edropship.co.uk" class="filled-btn bg-purple button-radius"
                                    target="_blank">
                                    Sign in <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="user-profile-card wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                            <ul>
                                @foreach ($channels as $item)
                                    <li class="user-profile" data-toggle="tooltip" data-placement="top"
                                        title="{{ $item->title }} integration">
                                        <a href="{{ route('integration', ['slug' => $item->slug]) }}"><img
                                                src="{{ asset('assets/img/hero/' . $item->icon) }}"
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
                {{-- <div class="col-lg-6">
                    <div class="chartboard-image-wrapper">
                        <img src="{{ asset('assets/img/integration') }}" alt="chartboard image one"
                            class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x"
                            data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="chartboard-app-preview">
                            <img src="{{ asset('assets/img/integration/'.$channel->w_thumbnail) }}" alt="app preview one"
                                class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms"
                                data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/integration/') }}" alt="app preview two"
                                class="chartboard-image chartboard-app-preview-2 wow fadeInDown" data-wow-delay="700ms"
                                data-wow-duration="1500ms">
                            <img src="{{ asset('assets/img/integration/') }}" alt="app preview three"
                                class="chartboard-image chartboard-app-preview-3 wow fadeInDown" data-wow-delay="300ms"
                                data-wow-duration="1500ms">
                        </div>
                        <img src="{{ asset('assets/img/integration/') }}" alt="chartboard image two"
                            class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                    </div> <!-- /.chart-board-image-wrapper -->
                </div> --}}
            </div> <!-- /.row -->
        </div> <!-- .container -->
    </section>
    <section class="collaboration-area collaboration-area-v1 pt-130 pb-130 ">
        <div class="container">
            <div class="row align-items-center">

                @foreach ($channel->integrationSection as $item)
                    <div class="col-lg-7">
                        <div class="app-preview-image oval-gradient content-right-spacer">
                            <div class="app-feature-preview-relative animate-float-bob-y wow fadeInUp"
                                data-wow-delay="400ms" data-wow-duration="1500ms">
                                <img src="{{ asset('assets/img/integration/' . $item->thumbnail_1) }}" alt="chat activity">
                            </div>
                            <div class="app-feature-preview-main wow fadeInDown" data-wow-delay="200ms"
                                data-wow-duration="1500ms">
                                <img src="{{ asset('assets/img/integration/' . $item->thumbnail_2) }}"
                                    alt="live collaboration">
                            </div>
                            {{-- <div class="app-feature-preview-backward animate-float-bob-y wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{asset('assets/img/partner/live-chat-mobile-view.png')}}" alt="mobile view">
                    </div> --}}
                            <div class="app-feature-preview-absolute animate-float-bob-x wow fadeInUp"
                                data-wow-delay="600ms" data-wow-duration="1500ms">
                                <img src="{{ asset('assets/img/integration/' . $item->thumbnail_3) }}" alt="chat onboard">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="section-title section-title-mirage">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">{{ $item->subheading }} </span>
                            </div>
                            <h3>{{ $item->heading }}</h3>
                            <br />
                            <div class="section-title-description">
                                <p class="mb-13">{{ $item->description }}.</p>
                            </div>
                            <div class="section-button-wrapper">
                                <a href="services.html" class="filled-btn bg-mandy button-radius">
                                    Get Stared Now <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($loop->iteration > 1)
                    @break
                @endif
                @endforeach

            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>
    @if (count($channel->integrationCard) > 0)
        <section class="our-services pt-216 pb-130">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="section-title mb-135 text-center section-title-tuna">
                            <h2>eDropShip features for {{ $channel->title }} Store Owners
                                <br class="d-none d-md-block"> With <span>Our Solutions</span>
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-right-image text-center animate-float-bob-y wow fadeInDown" data-wow-delay="0ms"
                            data-wow-duration="2000ms">
                            <img src="{{ asset('assets/img/services/service-image.png') }}" alt="service left thumbnail">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="icon-boxes-wrapper icon-boxes-grid">
                            @foreach ($channel->integrationCard as $item)
                                <div class="single-iconic-box iconic-box-v2">
                                    <div class="iconic-box-icon">
                                        <i class="far fa-{{ $item->thumbnail }}"></i>
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">{{ $item->title }}</h5>
                                        <p class="iconic-box-content">
                                            {{ $item->short_description }}
                                        </p>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>

                <!-- /,row -->
            </div> <!-- /.container -->
        </section>
    @endif
    @component('frontend.components.testimonial')

    @endcomponent
@endsection
