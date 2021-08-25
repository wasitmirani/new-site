@extends('layouts.frontend.master')


@section('content')

<section class="hero-area hero-v3 bg-cover" style="background-image: url({{asset('assets/img/app/smart-bg-1.png')}});">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7">
                <div class="hero-content">
                    <div class="section-particle-effect d-none d-lg-block">
                        <img class="particle-1 animate-rotate-me" src="{{ asset('assets/img/particle/particle-8.png')}}" alt="particle One">
                        <img class="particle-3 animate-zoominout" src="{{ asset('assets/img/particle/particle-9.png')}}" alt="particle Three">
                    </div>
                    <div class="section-title section-title-black">
                        <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="2500ms">Grow Digitally with the  <span> @component('frontend.components.appTitle')

                            @endcomponent </span> App</h1>
                        <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="2500ms">
                            <a href="https://apps.apple.com/us/app/edropship/id1538316367" class="filled-btn bg-rose-bud" target="_blank">
                                Apple Store <i class="fab fa-apple"></i>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.edropshipstore.app" class="filled-btn btn-bordered" target="_blank">
                                Google Play <i class="fab fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="hero-right-image-wrapper text-center text-lg-right wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="2500ms">
                    <img src="{{ asset('assets/img/app/EDrop_2.gif')}}" alt="hero right image">
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
                <div class="col-lg-12">
                    <div class="icon-boxes-wrapper ">
                        <div class="row ">
                            <div class="col-lg-4 col-md-6 ">
                                <div class="single-iconic-box wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/img/app/f-2.png')}}" alt="">
                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Shop & Sell with ease</h5>
                                        <p class="iconic-box-content">
                                            Shopping and Selling is quick and easy with our eDropShip app.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-iconic-box wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/img/app/f-1.png')}}" alt="">

                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Fast & Secure</h5>
                                        <p class="iconic-box-content">
                                            Awesome design with fast and secure service and many more things
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="single-iconic-box wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <img src="{{ asset('assets/img/app/f-3.png')}}" alt="">

                                    <div class="iconic-box-body">
                                        <h5 class="iconic-box-title">Chat with us</h5>
                                        <p class="iconic-box-content">
                                            Connect with our support team through the app’s Customer Connect Feature
                                        </p>

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
<section class="manage-data-area pt-120 pb-88" style="background-image: url({{asset('assets/img/app/banner-bg-20.jpg')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="manage-data-image content-right-spacer animate-float-bob-y wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <img src="{{ asset('assets/img/app/ANIMATED GIFF.gif')}}" alt="Manage Data">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-title section-title-tuna">
                    <h2>Expand your business
                        <span>digitally</span>

                    </h2>
                    <div class="section-title-description">
                        <p>Offering smart mobile application for our customers to shop and sell anywhere around the world. </p>
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
                                We represent millions of customers and suppliers around the world and we have made it easier to sell and shop with eDropShip. Easily expand your business globally.
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-list iconic-list-padding wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="iconic-list-icon">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="iconic-list-body">
                            <h5 class="iconic-list-title">Sales channals </h5>
                            <p class="iconic-list-content">
                                we have everything you need to sell in more than 30 sales channels around the world.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.manage-data-area  -->
<section class="our-services pt-216 pb-130" style="background-image: url({{asset('assets/img/app/to-access-bg.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title mb-135 text-center section-title-tuna">
                    <h2>App Exclusive  <span>Features</span></h2>
                    <h5 class="mtb-20"> Let’s get exclusive built-in features in our eDropShip App. We save your time and effort that will help you in selling and shopping more.</h5>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="icon-boxes-wrapper icon-boxes-grid">
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-11.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Shop Globally</h5>
                            <p class="iconic-box-content">
                                Shop everywhere in just seconds with eDropShip App
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-12.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Secure Payments</h5>
                            <p class="iconic-box-content">
                                Our updated and protected technology guarantees the security of all your payments on the eDropShip App.
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-13.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Verified UK Suppliers</h5>
                            <p class="iconic-box-content">
                                eDropShip has UK and European-based suppliers who are dedicated to providing swift and reliable services.
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-14.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Fully Responsive App</h5>
                            <p class="iconic-box-content">
                                Simply Sign up with eDropShip App. To boost customer loyalty, we have made everything convenient for you with our multi-tasking App features.
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-15.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Digital Support</h5>
                            <p class="iconic-box-content">
                                Our support team would be glad to assist you 24/7
                            </p>
                        </div>
                    </div>
                    <div class="single-iconic-box iconic-box-v2">
                        <div class="mb-20">
                            <img src="{{ asset('assets/img/app/f-16.png')}}" alt="">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Super-Fast</h5>
                            <p class="iconic-box-content">
                                {{ "Choose your favorite products from thousands of our UK and European suppliers. You'll find that selling and shopping is more fast and easy with eDropShip App now." }}
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
<div class="featured-video-area" >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-video-content video-overlay bg-cover play-video" style="background-image: url({{ asset('assets/img/app/App-Download.png')}});">
                    <a href="https://www.youtube.com/watch?v=iyfP-afO2-A" class="play-video-btn play-video-btn-v2"><i class="fas fa-play pulse-animated"></i></a>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</div> <!-- /.featured-video-area -->
<section class="testimonial-area bg-tuna border-0 bg-contain testimonial-area-overflow pb-120" style="background-image: url({{ asset('assets/img/testimonial/testimonial-pattern-bg.png') }});">
    <section id="screesnshot" class="screeenshot-area second-screenshot-area second-screenshot-md ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 text-center">
                    <div class="section-title mb-60 text-white">
                        <h1>{{ "App's Screenshot" }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-padding">
            <div class="container-fluid">
                <div class="app-active">
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-1.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-1.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-2.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-2.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-3.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-3.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-4.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-4.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-5.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-5.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-6.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-6.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-7-of-1.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-7-of-1.jpg')}}" alt="" /></a>
                    </div>
                    <div class="app-item">
                        <a href="{{asset('assets/img/app/Banner-7-of-2.jpg')}}" class="popup-image"><img src="{{asset('assets/img/app/Banner-7-of-2.jpg')}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section> <!-- /.testimonial-area -->



<section class="app-cta-area pt-100 pb-100" style="background-image: url({{asset('assets/img/app/trial.png')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 align-self-lg-end order-2 order-lg-1">
                <div class="section-left-image text-center animate-float-bob-x content-right-spacer wow fadeInDown" data-wow-delay="0ms" data-wow-duration="2000ms">
                    <img src="{{ asset('assets/img/app/appedropship.png')}}" alt="app download thumbnail">
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="section-title pb-55 section-title-tuna">
                    <h2>Download Our Apps
                        <span>Available Now </span>
                    </h2>
                    <div class="section-title-description">
                        <p class="mb-10">Visit your app store to learn more and download the app.</p>
                    </div>
                    <div class="section-button-wrapper section-dual-button">
                        <a href="https://apps.apple.com/us/app/edropship/id1538316367" class="filled-btn bg-rose-bud" target="_blank">
                            Apple Store <i class="fab fa-apple"></i>
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.edropshipstore.app" class="filled-btn bg-tuna" target="_blank">
                            Google Play <i class="fab fa-google-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.app-cta-area -->

@endsection
