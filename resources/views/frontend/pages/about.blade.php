@extends('layouts.frontend.master')

@push('styles')
<style>
    .bg-royal-blue {
    background-color: #473bf0;
}
</style>
@endpush
@section('content')
@component('frontend.components.breadcrumb',['title'=>"About Us"])
@endcomponent

   <!--====== Start About Us Area ======-->
   <section class="about-us-area pt-130 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-6">
                <div class="about-images content-right-spacer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="animate-square-zoom wow fadeInDown" data-wow-delay="0.1s">
                                <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/amazon_icon.png" alt="about thumbnail one">
                            </div>
                            <div class="animate-square-zoom wow fadeInUp" data-wow-delay="0.3s">
                                <img class="about-thumbnail about-thumbnail-3" src="assets/img/hero/bigcommerce_icon.png" alt="about thumbnail three">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="animate-square-zoom wow fadeInDown" data-wow-delay="0.2s">
                                <img class="about-thumbnail about-thumbnail-2" src="assets/img/hero/gumtree_icon.png" alt="about thumbnail two">
                            </div>
                            <div class="animate-square-zoom wow fadeInUp" data-wow-delay="0.5s">
                                <img class="about-thumbnail about-thumbnail-4" src="assets/img/hero/etsy_icon.png" alt="about thumbnail four">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="about-us-content">
                    <div class="section-title">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">About Company</span>
                        </div>
                        <h2>We’re Help Customers Get Their Success.</h2>
                        <div class="section-title-description">
                            <p>Sed perspiciatis unde omnis iste natus error voluptatem accusantium doloremque laudantium totam rem aperams eaque ipsa quae abillo inventore veritatis</p>
                        </div>
                    </div>
                    <div class="simple-icon-box-wrapper mt-45 mb-38">
                        <div class="simple-single-icon-box">
                            <i class="fal fa-users"></i>
                            <h4>Build Real Users</h4>
                            <p>Unde omnis natus volu accusantium doloremqie laudantium totam</p>
                        </div>
                        <div class="simple-single-icon-box">
                            <i class="fal fa-tools"></i>
                            <h4>Process Easily</h4>
                            <p>But I must explain you this mistak denouncinge pleasure praising</p>
                        </div>
                    </div>
                    <div class="section-button-wrapper">
                        <a href="about.html" class="filled-btn btn-bordered bg-royal-blue">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div> <!-- /.col-lg-5 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.about-us-area -->
<!--====== End About Us Area ======-->
<!--====== Start Services Area ======-->
<section class="our-services border-top-blue pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-70">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">Popular Services</span>
                    </div>
                    <h2>Made Amazing Mobile Application <br class="d-none d-md-block"> With Our Solutions</h2>
                </div>
            </div> <!-- /.col-lg-8 -->
        </div> <!-- /.row -->
        <div class="our-services-content-wrapper">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.1s" data-wow-duration="2000ms">
                        <div class="iconic-box-icon ">
                            <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/amazon_icon.png" alt="about thumbnail one">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Amazon DropShipping
                            </h5>
                            <p class="iconic-box-content">
                                List your Amazon store with thousands of products from our verified suppliers from the UK, Europe and Worldwide, with complete automation to manage inventory, orders and shipping that will help you sell without any boundary or limit.
                            </p>
                        </div>
                    </div>
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-6 col-lg-6">
                    <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.3s" data-wow-duration="2000ms">
                        <div class="iconic-box-icon">
                            <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/ebay_icon.png" alt="about thumbnail one">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">ebay DropShipping
                            </h5>
                            <p class="iconic-box-content">
                                List your eBay store with thousands of products from our verified suppliers from the UK, Europe and Worldwide, with complete automation to manage inventory, orders and shipping that will help you sell without any boundary or limit.
                            </p>
                        </div>
                    </div>
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-6 col-lg-6">
                    <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="2000ms">
                        <div class="iconic-box-icon ">
                            <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/shopify_icon.png" alt="about thumbnail one">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">Shopify DropShipping</h5>
                            <p class="iconic-box-content">
                                List your Shopify store with thousands of products from our verified suppliers from the UK, Europe and Worldwide, with complete automation to manage inventory, orders and shipping that will help you sell without any boundary or limit.
                            </p>
                        </div>
                    </div>
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-6 col-lg-6">
                    <div class="single-iconic-box iconic-box-v4 wow fadeInDown" data-wow-delay="0.7s" data-wow-duration="2000ms">
                        <div class="iconic-box-icon ">
                            <img class="about-thumbnail about-thumbnail-1" src="assets/img/hero/woocommerce_icon.png" alt="about thumbnail one">
                        </div>
                        <div class="iconic-box-body">
                            <h5 class="iconic-box-title">WooCommerce DropShipping</h5>
                            <p class="iconic-box-content">
                                List your WooCommerce store with thousands of products from our verified suppliers from the UK, Europe and Worldwide, complete automation to manage inventory, orders and shipping that will help you sell without any boundary.
                            </p>
                        </div>
                    </div>
                </div> <!-- /.col-lg-6-->
            </div> <!-- /.row -->
        </div> <!-- /.our-services-content-wrapper -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->
<!--====== End Services Area ======-->
<!--====== Start Team Member Area ======-->

<!--====== End Team Member Area ======-->
<!--====== Start Counter Up Area ======-->
<section class="counter-up-area bg-royal-blue pt-128 pb-43">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="counter-up-thumbnails content-right-spacer wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <img class="counterup-main-thumbnail-top animate-float-bob-x" src="assets/img/app/count-down-main-thumbnail-top.png" alt="countdown thumbnails top">
                    <img class="counterup-main-thumbnail" src="assets/img/app/count-down-main-thumbnail.png" alt="countdown thumbnails main">
                    <img class="counterup-main-thumbnail-bottom animate-float-bob-y" src="assets/img/app/count-down-main-thumbnail-bottom.png" alt="countdown thumbnails bottom">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="counterup-wrapper">
                    <div class="row">
                        <!-- Single Counter Up -->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-counter-up wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="counterup-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">96327</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>Daily active users</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter Up -->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-counter-up wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <div class="counterup-icon">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">78630</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>Project complate</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter Up -->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-counter-up wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="counterup-icon">
                                    <i class="fas fa-cloud-download-alt"></i>
                                </div>
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">56326</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>Download software</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Counter Up -->
                        <div class="col-md-6 col-sm-6">
                            <div class="single-counter-up wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="counterup-icon">
                                    <i class="fas fa-gem"></i>
                                </div>
                                <div class="counterup-info">
                                    <h2>
                                        <span class="counter">63020</span>
                                        <span class="sign">+</span>
                                    </h2>
                                    <p>5 Star rating reviews</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.counterup-wrapper -->
            </div> <!-- /.col-md-7 -->
        </div> <!-- /.row -->
    </div> <!-- /.container-->
</section> <!-- /.counter-up-area -->
<!--====== End Counter Up Area ======-->

@component('frontend.components.brandsSlider')

@endcomponent

@endsection


