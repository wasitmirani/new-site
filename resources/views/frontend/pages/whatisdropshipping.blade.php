@extends('layouts.frontend.master') @push('styles')
<style>
    .bg-royal-blue {
        background-color: #473bf0;
    }
</style>
@endpush @section('content') @component('frontend.components.breadcrumb',['title'=>"What is dropshipping"]) @endcomponent

<section class="privacy-section pt-100 pb-100 ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-4 wow fadeInUp">
                <aside class="sticky-menu">
                    <div class="faq-menu bg_img">
                        <ul id="faq-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="#thewebsite">A COMPREHENSIVE GUIDE TO DROPSHIPPING:
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Personal Data">DROPSHIPPING PROCESS:</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#use">ADVANTAGES OF DROPSHIPPING:</a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-lg-8 col-xl-7">
                <article class="mt-70 mt-lg-0">

                    <br>

                    <div class="privacy-item" id="thewebsite">
                        <h3 class="title">A COMPREHENSIVE GUIDE TO DROPSHIPPING:</h3>
                        <p>DropShipping is a business model that removes the function of inventory stocking. In dropshipping business model, dropshipping companies act as an intermediary between the “Seller of the Product” and “Purchaser of the Product”. In dropshipping business, dropshipping companies purchase products from the Seller/third party and ship the product directly to the customers, without holding the products. Inventory stocking is the main difference between dropshipping and the normal retail model. Dropshipping businesses fulfil the requirement of customers, without directly dealing with product.  </p>
                    </div>
                    <div class="privacy-item" id="Personal Data">
                        <h3 class="title">DROPSHIPPING PROCESS:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>STEP 1: Customer places an order and makes Payment
                                    <ul>
                                        <p>Customers choose their preferred items on the dropshipping store and order the selected items. After ordering items, customers proceeds towards payment of the order that confirms their order.</p>
                                    </ul>
                                </li>
                                <li>STEP 2: Dropshipping Store Places an order for the item
                                    <ul><p>Dropshipping store immediately place an order for the item, ordered by Customers, with a supplier.</p></ul>
                                </li>
                                <li>STEP 3: Dropshipping Store makes Payment to Supplier
                                    <ul><p>The seller makes payment to the supplier for the item (including delivery costs).</p></ul>
                                </li>
                                <li>STEP 4: Dropshipping Supplier processes the customer’s order
                                    <ul><p>When dropshipping suppliers receive the payment, they process the customer’s order.</p></ul>
                                </li>
                                <li>STEP 5: Dropshipping Supplier Ship order directly to Customer
                                    <ul><p>Dropshipping suppliers ship the item directly to the final customers.</p></ul>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="privacy-item" id="use">
                        <h3 class="title">ADVANTAGES OF DROPSHIPPING:</h3>
                        <div class="section-list-style mt-22 mb-35">
                            <ul>
                                <li>Low Capital Requirement:
                                    <ul><p>In dropshipping business, you can start up with the minimum capital as you do not have to purchase inventory for starting. Therefore, you just need little capital to start dropshipping business.</p></ul>
                                </li>
                                <li>EASY TO START
                                    <ul>
                                        <p>In dropshipping business, following responsibilities are exempted:</p>
                                        <li>Management or payment for a warehouse</li>
                                        <li>Packaging and shipment of your orders</li>
                                        <li>Tracking of inventory for auditing</li>
                                        <li>Handling of returns and inbound shipments</li>
                                        <li>Continue orders of products</li>
                                        <li>Management of stock level</li>
                                    </ul>
                                </li>
                                <li>Low Overhead Expenses:
                                    <ul><p>As expenses of warehouse and inventory stocking functions are excluded from this business model, overhead expenses are also minimized.</p></ul>
                                </li>
                                <li>Wide range of options to trade:
                                    <ul><p>As you are not required to stock the inventory, you can easily sell 1000+ products. This business model.  </p></ul>
                                </li>
                            </ul>
                        </div>

                    </div>

                </article>
            </div>
        </div>
    </div>
</section>
 @component('frontend.components.brandsSlider') @endcomponent @endsection
