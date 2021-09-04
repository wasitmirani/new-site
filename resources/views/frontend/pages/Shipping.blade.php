@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"Shipping"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">GENERAL NOTICES AND DISCLAIMER
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">LOST PARCELS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#voc">VOUCHER, PROMOTION AND DISCOUNT CODES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#int">INTERNATIONAL SHIPPING</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">
                    <p>All orders that are paid by 7:00 a.m., will be dispatched on the same day. Orders that are placed after 7:00 a.m., will be dispatched on the next day. If your order is placed on Friday after 7 a.m., it will be dispatched on Monday.</p>
                    <br>
                    <p>Shipping fees include handling fees, packing fees and postage costs. For the safety arrival of your products, we give extra and special care to the process of packaging and dispatching. Boxes & packets are ample sized and your items are well-protected.</p>
                    <br>
                    <p>Delivery can be made to any specified location in the world. If you have any query regarding delivery locations, you may contact us through our email at hello@edropship.co.uk</p>
                    <br>
                    <p>Delivery charges are specified once you are ready to check-out. You will receive your ordered goods on the next working day, all other destinations may vary depending on the location. We make every effort to deliver your goods within the estimated timescales; however, delays are occasionally inevitable. We will not be held liable for any delay or failure in delivering the products within the estimated timescales.</p>
                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">GENERAL NOTICES AND DISCLAIMER</h3>
                        <p>If any event is occurred that is outside of our reasonable control (force majeure), we will not be responsible for the performance of any obligations under these terms and conditions. These events may include but not limited to:</p>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Strikes</li>
                                <li>Lockouts</li>
                                <li>Failures of third party systems or networks</li>
                                <li>Acts of God, fire</li>
                                <li>Earthquake</li>
                                <li>Storm</li>
                                <li>Flood</li>
                                <li>Other natural disasters</li>
                                <li>Civil unrest acts of terrorism</li>
                                <li>Deliberate sabotage of equipment or data</li>
                                <li>Malicious damage to equipment or data</li>
                                <li>Damage to premises or equipment</li>
                                <li>Destruction of premises or equipment.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">LOST PARCELS</h3>
                        <p>All deliveries are usually made on the ‘next day’ in the UK Mainland only. Lost or damaged parcels must be reported in writing /email within 24 hours of the parcel being dispatched in the UK and 7 days in overseas. We will not offer any compensation for lost parcels that are not reported within this period.</p>
                    </div>
                    <div class="privacy-item" id="voc">
                        <h3 class="title">VOUCHER, PROMOTION AND DISCOUNT CODES</h3>
                        <p>Discount, voucher and promotional codes should be entered during the checkout process to be valid. Discounts and discount thresholds exclude postage and packaging costs. Discounts cannot be used in conjunction with any other offers.</div>
                    <div class="privacy-item" id="int">
                        <h3 class="title">INTERNATIONAL SHIPPING</h3>
                       <p>We work with FedEx, DHL and Aramex to handle our overseas orders. Shipping charges vary according to weight and dimension of the order and destination country.</p>
                       <p>Delivery times may vary from 3-10 working days that depends on the destination place.</p>
                       <p>Any overseas orders may be subjected to additional charges that are imposed by laws and regulations of the shipping and recipient countries. These charges will be passed onto you unless otherwise specified. Please contact us through our email (hello@edropship.co.uk) if you would like to ship to the country that is not listed on our website.</p>

                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
