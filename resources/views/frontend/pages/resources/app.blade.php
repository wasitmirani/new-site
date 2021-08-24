@extends('layouts.frontend.master')


@section('content')

<section class="hero-area hero-v3 bg-contain bg-tuna" style="background-image: url({{ asset('assets/img/hero/hero-leaf-bg.jpg')}});">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <div class="hero-content">
                    <div class="section-particle-effect d-none d-lg-block">
                        <img class="particle-1 animate-rotate-me" src="{{ asset('assets/img/particle/particle-8.png')}}" alt="particle One">
                        <img class="particle-3 animate-zoominout" src="{{ asset('assets/img/particle/particle-9.png')}}" alt="particle Three">
                    </div>
                    <div class="section-title section-title-white">
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2500ms">Solutions Your Problem In <span>One </span> Hand</h1>
                        <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="2500ms">
                            <a href="service-details.html" class="filled-btn bg-rose-bud">
                                Apple Store <i class="fab fa-apple"></i>
                            </a>
                            <a href="service-details.html" class="filled-btn btn-bordered">
                                Google Play <i class="fab fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-right-image-wrapper text-center text-lg-right wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2500ms">
                    <img src="{{ asset('assets/img/hero/hero-mobile-on-hand.png')}}" alt="hero right image">
                </div> <!-- /.blob-right-image-wrapper -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- .container -->
</section> <!-- /.hero-area -->
<!--====== End Hero Area ======-->
<!--====== Start Feature Area ======-->
<section class="features-area">
    <div class="container">
        <div class="section-internal pt-130 pb-93 border-bottom">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title section-title-tuna">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag p-0 text-old-lavender bordered-tag">How Can Help You</span>
                        </div>
                        <h2>Build an Awesome
                            <span>Apps With</span>
                            Us
                        </h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="icon-boxes-wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-iconic-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="iconic-box-icon iconic-box-gradient-1">
                                        <i class="far fa-cog"></i>
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Easy to Manage Data</h5>
                                        <p class="iconic-box-content">
                                            Sed ut perspiciatis unde omnis este error voluptate accusantium doloremque systems.
                                        </p>
                                        <div class="iconic-box-btn">
                                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-iconic-box wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="iconic-box-icon iconic-box-gradient-2">
                                        <i class="far fa-cog"></i>
                                    </div>
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Device Quality Design</h5>
                                        <p class="iconic-box-content">
                                            Quis autem veleure prehender quinea voluptate velit esse quam molestiae consequatur
                                        </p>
                                        <div class="iconic-box-btn">
                                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.features-area -->
<!--====== End Feature Area ======-->
<!--====== Start Manage Data Area ======-->
<section class="manage-data-area pt-120 pb-88">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="manage-data-image content-right-spacer animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <img src="{{ asset('assets/img/app/manage-data.png')}}" alt="Manage Data">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title section-title-tuna">
                    <h2>Manage Your Mobile
                        <span>Data Very</span>
                        Easily
                    </h2>
                    <div class="section-title-description">
                        <p>Nentore veritatis quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit aspernatur aut quia consequuntur </p>
                    </div>
                </div>
                <div class="iconic-list-wrapper">
                    <div class="single-iconic-list iconic-list-bg iconic-list-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="iconic-list-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title">Innovative Solution</h5>
                            <p class="iconic-list-content">
                                On the other hand denounce with righteous indignation and dislike beguiled
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-list iconic-list-padding wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="iconic-list-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title">Devices With Quality</h5>
                            <p class="iconic-list-content">
                                But I must explain to you how all mistaken denouncing pleasure and praising
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.manage-data-area  -->
<!--====== End Manage Data Area ======-->
<!--====== Start Collaboration Area ======-->
<section class="collaboration-area bg-cover pt-149" style="background-image: url({{ asset('assets/img/app/collaboration-bg.jpg')}});">
    <div class="container">
        <div class="section-internal position-relative">
            <div class="row">
                <div class="col-lg-7">
                    <div class="collaboration-content pb-130">
                        <div class="section-title section-title-tuna">
                            <h2>Collaborate With Real <span>Team & Users.​​</span></h2>
                            <div class="section-title-description">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudante totam rem aperiam, eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. nemo enim ipsam voluptatem</p>
                            </div>
                        </div>
                        <div class="iconic-list-wrapper iconic-list-wrapper-v2">
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Easy To Collaborate With User</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Manage Team & Users Flow</h5>
                                </div>
                            </div>
                            <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="iconic-list-icon">
                                    <i class="fas fa-check"></i>
                                </div>
                                <div class="iconic-list-body">
                                    <h5 class="iconic-list-title">Upgrade Dashboard Systems</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-right-image text-center animate-float-bob-y section-image-circle-shape wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                <img src="{{ asset('assets/img/app/collaboration-right-app-screenshot.png')}}" alt="collaboration app screenshot">
            </div> <!-- /.section-right-image -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.collaboration-area -->
<!--====== End Collaboration Area ======-->
<!--====== Start Our Services Area ======-->
<section class="our-services pt-216 pb-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-135 text-center section-title-tuna">
                    <h2>Made Amazing Mobile Application <br class="d-none d-md-block"> With <span>Our Solutions</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="section-right-image text-center animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                    <img src="{{ asset('assets/img/services/service-image.png')}}" alt="service left thumbnail">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="icon-boxes-wrapper icon-boxes-grid">
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="iconic-box-icon iconic-box-gradient-3">
                            <i class="far fa-user-chart"></i>
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Team Management</h5>
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
                            <h5 class="iconic-box-title">Time Tracking</h5>
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
                            <h5 class="iconic-box-title">Payment System</h5>
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
                            <h5 class="iconic-box-title">High Security</h5>
                            <p class="iconic-box-content">
                                At vero eoset accusame et iusto odio dignissimosy ducimus qui bland
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /,row -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->
<!--====== End Our Services Area ======-->
<!--====== Start Featured Video Area ======-->
<div class="featured-video-area pb-100" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-video-content video-overlay bg-cover play-video" style="background-image: url({{ asset('assets/img/feature/featured-video-cover.jpg')}});">
                    <a href="../../../87110435.html" class="play-video-btn play-video-btn-v2"><i class="fas fa-play pulse-animated"></i></a>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.featured-video-area -->

<section class="app-cta-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 align-self-lg-end order-2 order-lg-1">
                <div class="section-left-image text-center animate-float-bob-x content-right-spacer wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                    <img src="{{ asset('assets/img/cta/download-app-cta-thumbnail.png')}}" alt="app download thumbnail">
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="section-title pb-55 section-title-tuna">
                    <h2>Download Our Apps
                        <span>Available Now </span>
                    </h2>
                    <div class="section-title-description">
                        <p class="mb-10">Sed ut perspiciatis unde omnis iste natus errors voluptatem accusantium doloremque laudantium totam rem aperiam eaqpsae.</p>
                        <p>Quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabe.</p>
                    </div>
                    <div class="section-button-wrapper section-dual-button">
                        <a href="service-details.html" class="filled-btn bg-rose-bud">
                            Apple Store <i class="fab fa-apple"></i>
                        </a>
                        <a href="service-details.html" class="filled-btn bg-tuna">
                            Google Play <i class="fab fa-google-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.app-cta-area -->

@endsection
