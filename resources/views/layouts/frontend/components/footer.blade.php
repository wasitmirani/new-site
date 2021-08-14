<footer class="footer-area footer-area-v3">
    <div class="container">
        <div class="footer-area-internal border-bottom-purple">
            <div class="row">
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="single-footer-widget footer-text-widget">
                        <h5 class="widget-title">About {{config('app.name')}}</h5>
                        <p>Sed ut perspiciatis undmnis iste natus error sit voluptatem accusantium dolore udantiuy totam rem aperiam.</p>
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
                                <li><a href="about.html">Platform Tour</a></li>
                                <li><a href="service-details.html">{{config('app.name')}} Academy</a></li>
                                <li><a href="service.html">{{config('app.name')}} Guru</a></li>
                                <li><a href="service.html">Mobile App</a></li>

                                <li><a href="blog-standard.html">Blogs & Guides</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="single-footer-widget">
                        <h5 class="widget-title">Company</h5>
                        <div class="footer-widget-menu">
                            <ul>
                                <li><a href="{{route('about')}}">About {{config('app.name')}}</a></li>
                                <li><a href="{{route('contact')}}">Contact & Support</a></li>
                                <li><a href="about.html">Success History</a></li>
                                <li><a href="service.html">Setting & Privacy</a></li>
                                <li><a href="about.html">Company History</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Footer Widget -->
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="single-footer-widget follow-on-widget">
                        <h5 class="widget-title">Download</h5>
                        <div class="footer-app-download">
                            <a href="service-details.html" class="filled-btn bg-purple button-radius">
                                Apple More <i class="fab fa-apple"></i>
                            </a>
                            <a href="service-details.html" class="filled-btn bg-blue-chalk button-radius">
                                Google Play <i class="fab fa-google-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div><!-- /.footer-area-internal -->
    </div> <!-- /.container -->
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
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.footer-copyright-area -->
</footer> <!-- /.footer-area -->
