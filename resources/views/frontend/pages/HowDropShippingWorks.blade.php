@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"How Drop-Shipping Works"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">WHAT IS DROP-SHIPPING?
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">DROPSHIPPING PROCESS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#use">ADVANTAGES OF WORKING WITH US</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">

                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">WHAT IS DROP-SHIPPING?</h3>
                        <p>Drop-Shipping is a business where you are not required to hold the inventory and ship the items that you are selling. Instead, you get an access to our website, sell the items that we have listed and directly ship the items to your customer(s). The difference between cost of the items and quantity of the resold items is your profit.</p>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">ADVANTAGES OF DROP-SHIPPING:</h3>
                        <p>There are many reasons why drop-shipping works:</p>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Ideal for those starting a new business.</li>
                                <li>You do not have to invest a lot of money to start your business on stuff like buying inventory.</li>
                                <li>It is very easy to start.</li>
                                <li>You can easily lease a warehouse for stocking the merchandise.</li>
                                <li>You can hire employees to process, pick, pack & dispatch your orders.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="use">
                        <h3 class="title">DROPSHIPPING PROCESS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>STEP 1: Seller Chooses a Supplier and Product that needs to be sold
<p>Sellers do a market research for finding reasonable Supplier and Products that they prefer to trade.</p>
                                </li>
                                <li>STEP 2: Sellers List the Products on Online Store or Website
                                    <p>Sellers choose an online platform, either online store or website, for selling their products.</p>
                                </li>
                                <li>STEP 3: Customer places an order and makes Payment
                                    <p>Customers choose their preferred items either on the ecommerce website or in-store of the seller and order the selected items. After ordering items, customers proceeds towards payment of the order that confirms their order.</p>
                                </li>
                                <li>STEP 4: Sellers Places an order for the item
                                    <p>Sellers immediately place an order for the item, ordered by Customers, with a supplier.</p>
                                </li>
                                <li>STEP 5: Seller makes Payment to Supplier
                                    <p>The seller makes payment to the supplier for the item (including delivery costs).</p>
                                </li>
                                <li>STEP 6: Supplier processes the order and send to Customer
                                    <p>When suppliers receive the payment, they process the order and send the item to the customers.</p>
                                    </li>
                            </ul>
                        </div>
                    </div>
                    <div class="privacy-item" id="legal">
                        <h3 class="title">ADVANTAGES OF WORKING WITH US:</h3>
                        <p>We are one of the largest UK based wholesalers. Following are the advantages of working with us:
                        </p>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Quick shipping is the most important advantage. You do not have to deal with the courier companies and you do not have to wait long in the queues for deliveries. You will just get customers and when you will get orders, we will be fulfilling the plenty of orders because there is no limit.</li>
                                <li>Your customers can return your item and can get 100% refund if they are not satisfied with the order. Therefore, you do not need to be worry about the dissatisfaction of your customers.</li>
                                <li>Customer service is another major advantage. We are always available here for helping you out. You can contact us through phone, email and live chat.</li>
                                <li>eDropShip especially work with UK based company. We can jump your recently started business to unlimited possibilities.</li>
                            </ul>
                        </div>
                        <p>If you love these benefits and advantages, you can start your own online ecommerce store, get the items you want to sell, and Dropship with us. We will be your partner to fulfill and process your orders. For this purpose, you can visit us at https://www.edropship.co.uk/. It is your best path towards success! You can contact us anytime for your queries. We are available 24/7 for you.</p>

                    </div>

                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
