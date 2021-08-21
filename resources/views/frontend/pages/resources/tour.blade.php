@extends('layouts.frontend.master') @section('content')


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
                        <h5> Integration </h5>

                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">Source inventory for your <span> </span> with @component('frontend.components.appTitle')

                        @endcomponent <div class="brand-logo">
                        <br>
                            <h5 >
                            Integrate your  store to easily automate your DropShipping order management, payments and shipping


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
                        {{--  <ul>
                            @foreach ($channels as $item)
                            <li class="user-profile" data-toggle="tooltip" data-placement="top" title="{{ $item->title}} integration">
                                <a href="{{route('integration',['slug'=>$item->slug])}}"><img src="{{asset('assets/img/hero/'.$item->icon)}}" alt="{{ $item->title}}"></a>
                            </li>
                            @if($loop->iteration  >5)
                            @break
                            @endif
                            @endforeach
                            <li class="user-profile sign-up" data-toggle="tooltip" data-placement="top" title="More integrations"><a href="#"><i class="fas fa-plus"></i></a></li>
                        </ul>  --}}
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






@endsection
