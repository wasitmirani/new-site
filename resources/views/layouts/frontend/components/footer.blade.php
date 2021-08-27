<footer class="footer-area footer-area-v3">
    <div class="container">
        <div class="footer-area-internal border-bottom-purple">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget footer-text-widget">
                        <h5 class="widget-title">About {{config('app.name')}}</h5>
                        <p>If you have any concerns or inquiries, a member of our support staff would be delighted to assist you. Feel free to contact us by phone or e-mail and we'll be sure to get back to you as soon as possible.</p>
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
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
                                <li><a href="{{route('contact')}}">Contact & Support</a></li>
                                <li><a href="{{route('contact')}}">Help Center</a></li>
                                <li><a href="{{route('contact')}}"> Franchise </a></li>

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
                        <h5 class="widget-title">Download</h5>
                        <div class="footer-app-download">
                            <a href="https://apps.apple.com/us/app/edropship/id1538316367" class="filled-btn bg-purple button-radius">
                                Apple More <i class="fab fa-apple"></i>
                            </a>
                            <a href="https://play.google.com/store/apps/details?id=com.edropshipstore.app" class="filled-btn bg-blue-chalk button-radius">
                                Google Play <i class="fab fa-google-play"></i>
                            </a>
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
                    <div class="footer-logo">
                        <img src="{{asset('assets/img/logo-red.png')}}" alt="footer logo">
                    </div>
                </div>
                <div class="col-md-6 col-sm-8">
                    <div class="footer-copyright">
                        <p>© 2021 <a href="#">{{config('app.name')}}.</a> All Rights Reserved</p>
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
