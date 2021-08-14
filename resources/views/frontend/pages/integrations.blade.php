
@extends('layouts.frontend.master')

@push('styles')
<style>


element.style {
    visibility: visible;
    animation-duration: 1500ms;
    animation-delay: 0ms;
    animation-name: fadeInUp;
}
.single-feature-box.single-feature-box-v3:hover {
    border-color: #473bf0 !important;
    background-color: #473bf0 !important;
    -webkit-box-shadow: 0px 10px 30px 0px rgb(71 59 240 / 36%);
    box-shadow: 0px 10px 30px 0px rgb(71 59 240 / 36%);
}
.single-feature-box.single-feature-box-v3:after {
    background: #473bf0;

}


</style>
@endpush
@section('content')
@component('frontend.components.breadcrumb',['title'=>"Integrations Channels"])

@endcomponent

{{-- <section class="our-services pt-130 pb-100">
    <div class="container">
        <div class="our-services-content-wrapper">
            <div class="row">
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <div class="service-thumbnail">
                                <img src="{{asset('assets/img/services/amazon.png')}}" alt="amazon channels {{config('app.name')}}">
                            </div>
                        </div>
                        <div class="feature-box-content">
                            <h4>Amazon Integration</h4>
                            <p>Quis autem veleum iure reprehende quin voluptate velit esse quam molesti conseqtur velillum dolorem eum fugiate</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <div class="service-thumbnail">
                                <img src="{{asset('assets/img/services/ebay_icondark.png')}}" alt="ebay channels {{config('app.name')}}">
                            </div>
                        </div>
                        <div class="feature-box-content">
                            <h4>Ebay Integration</h4>
                            <p>Again is there anyone who loves pursues or desires to obtain pain of itself because it is pain but because occasionally</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <div class="service-thumbnail">
                                <img src="{{asset('assets/img/services/shopify.png')}}" alt="ebay channels {{config('app.name')}}">
                            </div>
                        </div>
                        <div class="feature-box-content">
                            <h4>Shopify Integration</h4>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantiu doloremque laudantium totam rem aperiam</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <i class="flaticon-diamond-1"></i>
                        </div>
                        <div class="feature-box-content">
                            <h4>Creative design</h4>
                            <p>Quis autem veleum iure reprehende quin voluptate velit esse quam molesti conseqtur velillum dolorem eum fugiate</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <i class="flaticon-certificate-1"></i>
                        </div>
                        <div class="feature-box-content">
                            <h4>Well documentation</h4>
                            <p>But I must explain to you how mistaken idea of denouncing pleasure and praisinge pain was born and complete</p>
                        </div>
                    </div>
                </div>
                <!-- Single Feature Box -->
                <div class="col-md-6">
                    <div class="single-feature-box single-feature-box-v3 wow fadeInUp" data-wow-delay="500ms" data-wow-duration="1500ms">
                        <div class="feature-box-icon">
                            <i class="flaticon-rss-1"></i>
                        </div>
                        <div class="feature-box-content">
                            <h4>Quick linkup</h4>
                            <p>On the other hand we denounce with righteous indignation and dislike men who are so beguiled</p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.our-services-content-wrapper -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->
<!--====== End Our Services Area ======--> --}}

<section class="our-services border-top-blue pt-130 pb-90">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title text-center mb-70">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">Popular Integrations</span>
                    </div>
                    <h2>Made Amazing Integrations Application <br class="d-none d-md-block"> With Our Solutions</h2>
                </div>
            </div> <!-- /.col-lg-8 -->
        </div> <!-- /.row -->
        <div class="our-services-content-wrapper">
            <div class="row">
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'amazon.png','name'=>'Amazon','color'=>6])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'ebay_icondark.png','name'=>'Ebay','color'=>5])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'shopify.png','name'=>'Shopify','color'=>7])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'OnBuy_Logo.png','name'=>'onBuy','color'=>4])
                    @endcomponent
                </div>
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'bigcommerce2.png','name'=>'Bigcommerce','color'=>5])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'Linnworks.png','name'=>'Linnworks','color'=>5])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'wish-logo.png','name'=>'Wish','color'=>4])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'OnBuy_Logo.png','name'=>'onBuy','color'=>4])
                    @endcomponent
                </div>
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'bigcommerce2.png','name'=>'Bigcommerce','color'=>5])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'Linnworks.png','name'=>'Linnworks','color'=>5])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'wish-logo.png','name'=>'Wish','color'=>4])
                    @endcomponent
                </div> <!-- /.col-lg-6-->
                <div class="col-xl-3  col-lg-4 col-sm-6">
                    @component('frontend.components.IntegrationCard',['image'=>'OnBuy_Logo.png','name'=>'onBuy','color'=>4])
                    @endcomponent
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.our-services-content-wrapper -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->

@endsection
