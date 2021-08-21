@extends('layouts.frontend.master')

@section('content')
@component('frontend.components.breadcrumb',['title'=>""])

@endcomponent
<section class="feature-section p-t-130 p-b-80 border-bottom-primary-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="common-heading title-line-bottom text-center m-b-70">
                    <span class="tagline">How Can Help You</span>
                    <h2 class="title">Check Out Exclusive Features</h2>
                    <img src="assets/img/particle/title-line-2.png" alt="Image" class="Line">
                </div>
            </div>
        </div>
        <div class="row iconic-boxes-v2">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="iconic-box color-1 m-b-50">
                    <div class="icon">
                        <img src="assets/img/icon/flaticon-headphones.png" alt="headphones">
                    </div>
                    <h5 class="title"><a href="#">Audio &amp; Video Call</a></h5>
                    <p>
                        Sed perspiciatis unde omnis este error voluptate accusant doloremque systems.
                    </p>
                    <a href="#" class="box-link"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="iconic-box color-2 m-b-50">
                    <div class="icon">
                        <img src="assets/img/icon/flaticon-share.png" alt="headphones">
                    </div>
                    <h5 class="title"><a href="#">Screen Sharing</a></h5>
                    <p>
                        Quis autem vel eum iuresc reprehe nderit ea voluptatey velit esse quam nihile
                    </p>
                    <a href="#" class="box-link"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="iconic-box color-3 m-b-50">
                    <div class="icon">
                        <img src="assets/img/icon/flaticon-chatting.png" alt="headphones">
                    </div>
                    <h5 class="title"><a href="#">Chat & Message</a></h5>
                    <p>
                        On the other hand dennce with righteous indig nations dislike men beguiled
                    </p>
                    <a href="#" class="box-link"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="iconic-box color-4 m-b-50">
                    <div class="icon">
                        <img src="assets/img/icon/flaticon-satisfaction.png" alt="headphones">
                    </div>
                    <h5 class="title"><a href="#">Download Apps</a></h5>
                    <p>
                        On the other hand dennce with righteous indig nations dislike men beguiled
                    </p>
                    <a href="#" class="box-link"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@component('frontend.components.subscribe')

@endcomponent
@endsection

