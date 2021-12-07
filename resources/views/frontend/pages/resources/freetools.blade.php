@extends('layouts.frontend.master') @section('content')
<section class="hero-area hero-v5" style="background-image: url({{ asset('assets/img/app/banner-bg-20.jpg')}});">
    <div class="container">
        <div class="hero-internal">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-content">
                        <div class="section-title section-title-black">
                            <h1 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Free tools to help you and your <span style="color: red;">Business </h1>
                            <div class="section-title-quote wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                <p>We make selling easier for you!
                                </p>
                                <p>eDropShip is fully automated portal for bulk trading across the globe. We achieve this by providing required tools to suppliers for their products to meet a global audience, and helping customers easily and reliably by
                                    identifying products and suppliers.
                                </p>
                            </div>
                            <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                                <span class="play-video">
                                    <a href="https://www.youtube.com/watch?v=VeHZb_Xt-Xc" class="play-btn">
                                        <i class="fas fa-play pulse-animated"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-right-thumbnail" style="background-image: url({{asset('assets/img/hero/hero-v5-right-thumbnail.jpg')}})">
                <div class="hero-right-bg-shape"></div>
            </div>
        </div>
        <!-- /.hero-internal -->
    </div>
    <!-- /.container -->
</section>


<section class="services-area pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 600px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/2.png')}}" alt="" width="150px">
                    </div>
                    <br /><br />
                    <div class="iconic-box-body text-left">
                        <h3>Getting Started </h3>
                        <br />
                        <p>Get registered on eDropShip by clicking the ‘Get Started’ or ‘or Satrt Selling ’ button. You will be directed to a new site and prompted to enter your email account and password. Once you register yourself on the system, you will
                            be requested to set up your account. </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 600px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/development.png')}}" alt="" width="180px">
                    </div>
                    <br /> <br />
                    <div class="iconic-box-body text-left">
                        <h3>Inventory </h3>
                        <br />
                        <p>eDropShip has a central repository for all your stock. You can see your out-of-stock products at the bottom of the Dashboard. You can also check the stock levels by going to ‘View All products’ button at the bottom of the Dashboard.
                        </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 600px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/Delegate.png')}}" alt="" width="180px">
                    </div>
                    <br /> <br />
                    <div class="iconic-box-body text-left">
                        <h3>Order Management </h3>
                        <br />
                        <p>eDropShip portal enables you to keep track of your orders. You can check the details of your orders via the ‘Orders’ tab in the lower header and click the relevant options in the dropdown menu. You can track your orders as well
                            as the commission listing through this tab. </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 700px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/Easy,-Simplified-Transactions.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Listing Management</h3>
                        <br />
                        <p>You can manage your listings through the product listing tab. The dashboard also contains a rundown of your products that keeps updating the stock levels and prices. As for the creation of listings, it may different on the basis
                            of the sales channel. First, integrate the channel into eDropShip panel. Also, the inventory items need to be present in the system to be able to listed under a specific channel. </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 700px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/secure-Payment.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Reporting </h3>
                        <br />
                        <p>The Dashboard menu provides different types of reports, presenting a rundown of significant milestones achieved like weekly store statistics, sales, store earning, top sales, total orders, and out-of-stock products. </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 700px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/customer-support.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Support </h3>
                        <br />
                        <p>eDropShip provides 24/7 support for technical glitches and various queries via WhatsApp live chat, phone and email. We also provide different tutorials to provide training and help you get acquainted wth the system.</p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 750px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/3.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Account Setup </h3>
                        <br />
                        <p>After your first login into your account, you will see the ‘My Account’ section. Enter details including, but not limited to, your official email id, name, shop name, store address, city, and country. Upload the image as per the
                            instructions and enter the required details. It is better to complete the setup in one go (the first login). However, you can click the ‘Save Changes’ button and edit/update the account information later by going to the ‘Profile’
                            tab on the lower header.</p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 750px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/DASHBOARD.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Dashboard </h3>
                        <br />
                        <p>It displays the record of your transactions. You can keep track of the sales executed in the form of a graph.
                            You can see the store statistics of the products activated on your store in the form of overall, weekly, monthly, and annual calculations. There is also a detailed account of total earnings and admin’s commission in a certain timeperiod.It also contains a summary of top sold products. You can peruse the relevant details and stay updated with the recent orders.
                        </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-iconic-box iconic-box-v4 wow fadeInDown" style="height: 750px;">
                    <div class="iconic-img">
                        <img src="{{asset('assets/img/Integration-Channels.png')}}" alt="" width="150px">

                    </div>
                    <br />
                    <br />
                    <div class="iconic-box-body text-left">
                        <h3>Sales Channels</h3>
                        <br />
                        <p>eDropShip facilitates sales channel integrations with multiple sales platforms like WooCommerce, Amazon, eBay, and Spotify. You can streamline your operations by operating through a single, integrated venue through the Sales Channels.
                            Channel integration is different based on the type of the channel and its API. However, all channels support the features like inventory update, order processing and dispatch, location mapping, payment processing, and keeping
                            track of shipment. </p>
                        <br />
                        <span>
                            {{--  <a href="service-details.html" class="filled-btn">
                                Discover More <i class="fas fa-arrow-right"></i>
                            </a>  --}}
                        </span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
@endsection
