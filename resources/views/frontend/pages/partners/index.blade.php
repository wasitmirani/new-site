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

                        <h5>{{ $partner->name }} Intigartion </h5>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">{{ $partner->title }} </span> with @component('frontend.components.appTitle')

                            @endcomponent <div class="brand-logo">
                                <br>
                            <h5
                             >
                            {{ $partner->short_description }}
                        </h5>


                            {{--  <a href="index.html">
                                <img src="{{asset('assets/img/LOGO-Web.png')}}" alt="logo">
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
                     <img src="{{asset('assets/img/'.$partner->thumbnail )}}" alt="chartboard image one" class="chartboard-image chartboard-image-main wow fadeInDown animate-float-bob-x" data-wow-delay="100ms" data-wow-duration="1500ms">
                    {{--  <div class="chartboard-app-preview">
                        <img src="{{asset('assets/img/seller/1-removebg-preview.png')}}" alt="app preview one" class="chartboard-image chartboard-app-preview-1 wow fadeInDown" data-wow-delay="500ms" data-wow-duration="1500ms">

                    </div>  --}}
                     <img src="{{asset('assets/img/seller/1-removebg-preview.png')}}" alt="chartboard image two" class="chartboard-image chartboard-image-secondary wow fadeInRight animate-float-bob-y" data-wow-delay="900ms" data-wow-duration="1500ms">
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
                    <h2>Get incentives by selling with @component('frontend.components.appTitle')

                        @endcomponent </h2>
                    <div class="section-title-description">
                        {{-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($partner->partnerCard as $item)
            <div class="col-lg-6">
                <div class="single-service-box single-service-box-v3 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="service-thumbnail">
                        <img src="{{asset('assets/img/'.$item->thumbnail)}}" alt="service {{$item->title}}">
                    </div>
                    <div class="service-box-content">
                        <h5 class="service-box-title">{{$item->title}}</h5>
                        <p>{{$item->short_description}}</p>
                        {{-- <div class="service-box-btn">
                            <a href="{{}}">Read More <i class="fas fa-arrow-right"></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            @if($loop->iteration  >3)
            @break
            @endif
            @endforeach


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->

<section class="our-statistics-area pt-120 pb-130">
    <div class="container">
        <div class="row align-items-center">
            @foreach ($partner->partnerSection as $section)

            @if($loop->iteration==1)

            <div class="col-lg-6 order-2 order-lg-1">
                <div class="our-statistics-content content-right-spacer">
                    <div class="section-title section-title-clear-blue">
                        <div class="section-heading-tag">
                        </div>
                        <h2>{{$section->heading}} </h2>
                        <div class="section-title-description">
                            <span >{{$section->subheading}}</span>

                        </div>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>{{$section->list_1}} </li>
                                <li>{{$section->list_2}} </li>
                                <li>{{$section->list_3}}</li>
                                <li>{{$section->list_4}}</li>
                            </ul>
                        </div>
                        {{-- <div class="section-button-wrapper">
                            <a href="{{route('partner.details',['slug'=>$section->slug])}}" class="filled-btn bg-clear-blue">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="services-law-images content-left-spacer content-right-spacer">
                    {{--  <div class="services-law-image-relative animate-float-bob-x">
                        <img src="{{asset('assets/img/partner/'.$section->img_1)}}" alt="service law right">
                    </div>  --}}
                    <div class="services-law-image-main">
                        <img src="{{asset('assets/img/'.$section->img_2)}}" alt="service law main">
                    </div>
                    {{--  <div class="services-law-image-absolute animate-float-bob-y">
                        <img src="{{asset('assets/img/partner/'.$section->img_3)}}" alt="service law left">
                    </div>  --}}
                </div>
            </div>

            <br>
            @else
            <div class="col-lg-6">
                <div class="services-law-images content-left-spacer content-right-spacer">
                    {{--  <div class="services-law-image-relative animate-float-bob-x">
                        <img src="{{asset('assets/img/partner/'.$section->img_1)}}" alt="service law right">
                    </div>  --}}
                    <div class="services-law-image-main">
                        <img src="{{asset('assets/img/'.$section->img_2)}}" alt="service law main">
                    </div>
                    {{--  <div class="services-law-image-absolute animate-float-bob-y">
                        <img src="{{asset('assets/img/partner/'.$section->img_3)}}" alt="service law left">
                    </div>  --}}
                </div>
            </div>
             <div class="col-lg-6">
                <div class="services-law-content content-left-spacer">
                    <div class="section-title section-title-clear-blue">
                        <div class="section-heading-tag">
                        </div>
                        <h2>{{$section->heading}} @component('frontend.components.appTitle')

                            @endcomponent</h2>
                            <div class="section-title-description mb-0">
                            <p> {{$section->short_description}}
                            </p>
                        </div>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>{{$section->list_1}} </li>
                                <li>{{$section->list_2}} </li>
                                <li>{{$section->list_3}}</li>
                                <li>{{$section->list_4}}</li>
                            </ul>
                        </div>
                        {{-- <div class="section-button-wrapper">
                            <a href="{{route('partner.details',['slug'=>$section->slug])}}" class="filled-btn btn-bordered bg-clear-blue">
                                Learn More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endif

            @endforeach


        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.services-law-area -->
<!--====== End Services Law Area ======-->
<!--====== Start Fact and CTA Area ======-->
<section class="fact-and-cta-area pt-85" style="background-image: url({{asset('assets/img/cta-bg.jpg')}}); background-size: cover ">
    <div class="container">
        <div class="fact-area pb-35">
            {{--  <div class="row justify-content-center">
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
            </div>  --}}
        </div>
        <div class="video-cta-area">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="featured-video-area">
                        <div class="featured-video-content video-overlay bg-cover play-video" style="background-image: url({{asset('assets/img/about.png')}});">
                            <a href="https://www.youtube.com/watch?v=VeHZb_Xt-Xc" class="play-video-btn play-video-btn-v2"><i class="fas fa-play pulse-animated"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="cta-area-2 bg-clear-blue">
                        <div class="cta-content">
                            <div class="section-title section-title-white text-center">
                                <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Get Free Consultations</h2>
                                <div class="section-title-description wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">

                                </div>
                                <div class="section-button-wrapper text-center wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                    <a href="{{route('contact.contactus')}}" class="filled-btn btn-bordered">
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
            @foreach ($partner->partnerFutures as $item)
            <div class="col-lg-3 col-md-6">
                <div class="single-iconic-box iconic-box-v5 wow fadeInUp text-left" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="iconic-box-icon">
                        <img src="{{asset('assets/img/'.$item->thumbnail)}}" alt="icon one"  >
                    </div>
                    <div class="iconic-box-body">
                        <h5 class="iconic-box-title">{{$item->title}}</h5>
                        <p class="iconic-box-content">
                          {{$item->short_description}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach


        </div> <!-- /.row -->
        <div class="view-more-btn-wrapper text-center mt-20 wow fadeInUp" data-wow-delay="0.9s" data-wow-duration="1500ms">
            {{-- <a href="services.html" class="filled-btn btn-bordered bg-clear-blue">
                View All Services <i class="fas fa-arrow-right"></i>
            </a> --}}
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
                            <span class="single-heading-tag">Sell your products globally</span>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Want To Know More Information   <br class="d-none d-md-block"> About @component('frontend.components.appTitle')?

                            @endcomponent?</h2>
                        <div class="section-button-wrapper section-dual-button justify-content-center text-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <a href="{{route('contact.contactus')}}" class="filled-btn bg-clear-blue">
                                Get Free Quote <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="{{route('resources.tour')}}" class="filled-btn btn-bordered">
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

