<section class="newsletter-search-area newsletter-search-v2 wow fadeInUp pt-100" data-wow-delay="0ms" data-wow-duration="1500ms">
    <div class="container">
        <div class="newsletter-search-internal text-center bg-royal-blue pt-75 pb-80">
            <div class="newsletter-search-section-images d-none d-xl-block wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms" style="background-image: url({{ asset('assets/img/particle/hello-announcement.png')}}), url({{ asset('assets/img/particle/subscription-area-v2-right.png')}});"></div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="section-title section-title-white">
                        <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Subscribe Newsletters</h2>
                        <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Empower SEO teams to find the best growth opportunities</p>
                    </div>
                    <div class="newsletter-search-form wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <form>
                            <div class="form-group">
                                <input type="text" name="website" id="yourPhoneNumber" class="form-control" placeholder="Phone Number">
                                <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Email Address">
                                <button type="submit" name="submit" value="Go" class="filled-btn bg-royal-blue">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.newsletter-search-internal -->
    </div> <!-- /.container -->
    <div class="section-bg-overflow bg-dark-black-v2"></div>
</section>
<footer class="footer-area footer-area-v3">
    <div class="container">
        <div class="footer-area-internal border-bottom-purple">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget footer-text-widget">
                        <img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/files/WhatsApp-banner-Mobile_cf5722f4-cac2-4791-b4bc-27d66a4eb59e_90x.png?v=1606722440" alt="footer logo">
                        <p class="text-justify">If you have any concerns or inquiries, a member of our support staff would be delighted to assist you. Feel free to contact us by phone or e-mail and we'll be sure to get back to you as soon as possible.</p>

                        <div class="footer-social-links">
                            <ul>

                                <li><a target="_blank" rel="noopener" href="https://www.facebook.com/eDropShip.co.uk/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a target="_blank" rel="noopener" href="https://twitter.com/eDropShip_co_uk/"><i class="fab fa-twitter"></i></a></li>
                                <li><a target="_blank" rel="noopener" href="https://www.youtube.com/channel/UC2nu9JatL1zIX87eCbgnMnA"><i class="fab fa-youtube"></i></a></li>
                                <li><a target="_blank" rel="noopener" href="https://www.instagram.com/eDropShip.co.uk/"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="support-box-2">

                            <div class="text">

                                <span style="font-weight:800;font-size:20px ">Contact info</span>
                                <hr>
                                <span> <i  class="fas fa-headset fa-4x"></i>  Got questions ? Call us 24/7 !</span>
                                <span><a href="tel:+44 7958 557597" class="Blondie  mt-10"> +44 7958 557597</a></span>
                                <span><a href="mailto:support@edropship.co.uk" class="Blondie  mt-10"> support@edropship.co.uk</a></span>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="single-footer-widget">
                        <h5 class="widget-title">Resources</h5>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="{{route('resources.tour')}}">Platform Tour</a></li>
                                <li><a href="{{route('resources.academy')}}">{{config('app.name')}} Academy</a></li>
                                <li><a href="{{route('resources.guru')}}">{{config('app.name')}} Guru</a></li>
                                <li><a href="{{route('resources.app')}}">Mobile App</a></li>
                                <li><a href="{{route('resources.blogs')}}">Blogs & Guides</a></li>
                            </ul>
                        </div>
                    </div>
                    <br>
                    <div class="single-footer-widget">
                        <h5 class="widget-title">Contact Information</h5>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="{{route('about')}}">About {{config('app.name')}}</a></li>
                                <li><a href="{{route('contact.contactus')}}">Contact & Support</a></li>
                                <li><a href="{{route('contact.contactus')}}">Help Center</a></li>
                                <li><a href="{{route('contact.contactus')}}"> Franchise </a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget">
                        <h5 class="widget-title">Important Information</h5>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="{{route('whatisdropshipping')}}"> What is Dropshipping</a></li>
                                <li><a href="{{route('cookies-policy')}}">Cookies-policy</a></li>
                                <li><a href="{{route('GuideStepbyStep')}}">Step-by-Step Guaide</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy-Policy</a></li>
                                <li><a href="{{ route('terms-and-Conditions') }}">Trems & Conditions </a></li>
                                <li><a href="{{route('shipping')}}">Shipping</a></li>
                                <li><a href="{{route('HowDropShippingWorks')}}">How DropShipping Works</a></li>
                                <li><a href="{{route('OurReturnsandExchange')}}">Our Returns and Exchange</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget follow-on-widget">
                        <h5 class="widget-title">Download App</h5>
                        <div class="footer-app-download">
                            <a href="https://apps.apple.com/us/app/edropship/id1538316367" class="filled-btn bg-rose-bud" target="_blank">
                                Apple More <i class="fab fa-apple"></i>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.edropshipstore.app" class="filled-btn bg-tuna" target="_blank">
                                Google Play <i class="fab fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                    <div class="support-box-2">

                        <div class="text">
                            <span><br/><p style="font-weight:800;font-size:30px ">Virtue Ventures Limited</p>
                                <br/>
                            <a href="{{route('contact.contactus')}}" class="Blondie">
                            4 Old Park Lane
                            London
                            W1K 1QW</a></span>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.footer-area-internal -->
    </div>
    <!-- /.container -->
    <div class="footer-copyright-area wow fadeInDown" data-wow-delay="0.8s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-4">
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="footer-copyright">
                        <p style="color: white;">© 2021 <a href="#">{{config('app.name')}}.</a> All Rights Reserved</p>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.footer-copyright-area -->
</footer>
<!-- /.footer-area -->
