
@extends('layouts.frontend.master')
@push('styles')
<style>
    .bg-royal-blue {
    background-color: #473bf0;
}
</style>
@endpush
@section('content')
@component('frontend.components.breadcrumb',['title'=>"Pricing Plan"])

@endcomponent
<section class="pricing-area pt-130 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="section-title mb-75 text-center">
                    <div class="section-heading-tag">
                        <span class="single-heading-tag">Our Pricing Plan</span>
                    </div>
                    <h2>Choose The Best Package For <br class="d-none d-md-block"> Your SEO Marketing </h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($pricing_list as $item)
            <!-- Single Pricing Table -->
            <div class="col-lg-4">
              <div class="pricing-table {{$item->type}}-plan wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                  <div class="pricing-plan-title">
                      <div class="pricing-table-icon" style="background-image: url(assets/img/pricing/pricing-table-blob.svg);">
                          <h5 class="plan-title {{$item->class}}">{{ucfirst($item->title)}}</h5>
                          <img src="assets/img/pricing/pricing-table-icon.png" alt="pricing plan icon one">
                      </div>
                      <div class="pricing-plan-cost">
                          <span class="payment-currency">£</span>
                          <span class="plan-price">{{$item->rate}}</span>
                          <span class="plan-type">/ Monthly</span>
                      </div>
                  </div>
                  <div class="pricing-plan-features">
                      <ul>
                          <li class="plan-feature">Social Media Marketing</li>
                          <li class="plan-feature">2.100 Keywords</li>
                          <li class="plan-feature">One Way Link Building</li>
                          <li class="plan-feature plan-feature-disabled">5 Free Optimization</li>
                          <li class="plan-feature plan-feature-disabled">3 Press Releases</li>
                      </ul>
                  </div>
                  <div class="pricing-table-foot">
                      <div class="plan-select">
                          <a href="#" class="filled-btn {{$item->btn_class}}">Select Plan <i class="fas fa-arrow-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- Single Pricing Table -->
      @endforeach

        </div> <!-- /.row -->

    </div> <!-- /.container -->
</section> <!-- /.pricing-area -->
<!--====== End Pricing Area ======-->
<!--====== Start Counter Up Area ======-->
<div class="counter-up-area">
    <div class="container-fluid">
        <div class="counterup-internal bg-royal-blue wow fadeInUp" style="background-image: url(assets/img/particle/section-curve-shape.svg);" data-wow-delay="00ms" data-wow-duration="2500ms">
            <div class="row align-items-center">
                <!-- Single Counter Up -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter-up single-counter-up-v2">
                        <div class="counterup-info">
                            <h2>
                                <span class="counter">35</span>
                                <span class="sign">+</span>
                            </h2>
                            <p>Our Trusted Active Clients </p>
                        </div>
                    </div>
                </div>
                <!-- Single Counter Up -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter-up single-counter-up-v2">
                        <div class="counterup-info">
                            <h2>
                                <span class="counter">72</span>
                                <span class="sign">+</span>
                            </h2>
                            <p>SEO Project Complate</p>
                        </div>
                    </div>
                </div>
                <!-- Single Counter Up -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter-up single-counter-up-v2">
                        <div class="counterup-info">
                            <h2>
                                <span class="counter">94</span>
                                <span class="sign">+</span>
                            </h2>
                            <p>Experience Members</p>
                        </div>
                    </div>
                </div>
                <!-- Single Counter Up -->
                <div class="col-lg-3 col-sm-6">
                    <div class="single-counter-up single-counter-up-v2">
                        <div class="counterup-info">
                            <h2>
                                <span class="counter">28</span>
                                <span class="sign">+</span>
                            </h2>
                            <p>Years Provide Services</p>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.counterup-internal -->
    </div> <!-- /.container-->
</div> <!-- /.counter-up-area -->
<!--====== End Counter Up Area ======-->
<!--====== Start FAQ Area ======-->
<section class="faq-area pt-135 pb-125">
    <div class="container">
        <div class="section-internal">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-content content-right-spacer">
                        <div class="section-title mb-40">
                            <div class="section-heading-tag">
                                <span class="single-heading-tag">Asked Question</span>
                            </div>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="section-accordion section-accordion-v2">
                            <div class="accordion" id="accordionFAQ">
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            Choose Work With MintTwist SEO Agency?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            How Long Does It Take to Start Ranking?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            Can You Guarantee Results?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Do You Only Work Within The UK?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionFAQ">
                                        <div class="accordion-body">
                                            <p>We are confident in our SEO strategies and in general we will start to see organic traffic and conversions growing after approximately 4-6 months.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /.accordion -->
                        </div> <!-- /.section-accordion -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-right-image faq-right-image animate-float-bob-y wow fadeInUp" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <img src="assets/img/faq/faq-image-2.jpg" alt="faq image">
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.faq-area -->
<!--====== End FAQ Area ======-->
<!--====== Start Subscribe Newsletter Area ======-->
@component('frontend.components.subscribe')

@endcomponent
@endsection
