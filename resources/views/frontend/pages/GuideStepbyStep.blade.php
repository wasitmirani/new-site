@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"Guide Step by Step"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">WANT TO SELL ON SHOPIFY, AMAZON, EBAY, FACEBOOK, INSTAGRAM, ETC…?
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">OUR SUCCESS is based upon Your Success!</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <h2>EBAY / AMAZON GUIDE STEP-BY-STEP</h2>
                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">WANT TO SELL ON SHOPIFY, AMAZON, EBAY, FACEBOOK, INSTAGRAM, ETC…?</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Already have eBay/Amazon Store:
                                    <ul>
                                        <li>Create your account on eBay/Amazon.</li>
                                        <li>Log in to your eBay/Amazon store</li>
                                        <li>If you don't know how to list your product, you can go to the item description and select how to list a link</li>
                                    </ul>
                                </li>
                                <li>Create your eBay/Amazon Store:
                                    <ul>
                                        <li>Create your account on eBay/Amazon.</li>
                                        <li>Log in to your eBay/Amazon store</li>
                                        <li>Start adding items which you want to list to your eBay/Amazon store from Best Seller Products online</li>
                                        <li>If you don't know how to list your product, you can go to the item description and select how to list a link</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">OUR SUCCESS is based upon Your Success!!!</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>We believe in providing customer satisfaction.</li>
                                <li>For your questions and queries, contact us anytime.</li>
                                <li>We are available 24/7. You can contact us via phone, live chat and hello@edropship.co.uk by email.</li>
                            </ul>
                        </div>
                    </div>

                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
