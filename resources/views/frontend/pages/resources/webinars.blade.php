@extends('layouts.frontend.master')


@section('content')

@component('frontend.components.breadcrumb',['name'=>"webinars"])

@endcomponent


<section class="features-area book-features ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="icofont-print"></i>
                    </div>
                    <h3>Printed Book</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="icofont-ui-edit"></i>
                    </div>
                    <h3>User Research</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                <div class="single-features-box">
                    <div class="icon">
                        <i class="icofont-vehicle-delivery-van"></i>
                    </div>
                    <h3>Free Delivery</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="features-inner-area">
        <div class="container">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="features-inner-content">
                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-win-trophy"></i>
                            </div>
                            <h3>More than 5+ award achived</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-responsive"></i>
                            </div>
                            <h3>Read On Any Device</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                        <div class="features-item">
                            <div class="icon">
                                <i class="icofont-verification-check"></i>
                            </div>
                            <h3>Very high resolution (4K)</h3>
                            <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project to an individual person's workload.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="features-image">
                        <img src="{{asset('assets/img/features-img1.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape7"><img src="{{asset('assets/img/shape7.png')}}" alt="shape"></div>
    <div class="shape3"><img src="{{asset('assets/img/shape3.png')}}" alt="img"></div>
    <div class="bg-gray shape-1"></div>
    <div class="shape6"><img src="{{asset('assets/img/shape6.png')}}" alt="img"></div>
    <div class="shape8 rotateme"><img src="{{asset('assets/img/shape8.svg')}}" alt="shape"></div>
    <div class="shape9"><img src="{{asset('assets/img/shape9.svg')}}" alt="shape"></div>
    <div class="shape10"><img src="{{asset('assets/img/shape10.svg')}}" alt="shape"></div>
    <div class="shape11 rotateme"><img src="{{asset('assets/img/shape11.svg')}}" alt="shape"></div>
</section>


<section class="app-funfacts-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-book-alt"></i>
                    </div>
                    <h3><span class="count">5</span>M</h3>
                    <p>Copies Sold</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-coffee-alt"></i>
                    </div>
                    <h3><span class="count">1.5</span>M</h3>
                    <p>Cup Of Coffe</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-book-mark"></i>
                    </div>
                    <h3><span class="count">1</span>M</h3>
                    <p>Copies Released</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="single-funfact">
                    <div class="icon">
                        <i class="icofont-ui-user"></i>
                    </div>
                    <h3><span class="count">50</span>K</h3>
                    <p>Happy Readers</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="screenshot-area page-from-book ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Pages From Book</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="screenshot-slides owl-carousel owl-theme">
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="screenshot-item">
                        <a href="#"><img src="{{asset('assets/img/page1.jpg')}}" alt="screenshot"></a>
                        <a href="{{asset('assets/img/page1.jpg')}}" class="popup-btn"><i class="icofont-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="team-area ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Awesome Contributors</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="team-slides owl-carousel owl-theme">
                <div class="col-lg-12">
                    <div class="single-team-member-box">
                        <img src="{{asset('assets/img/team-img1.jpg')}}" alt="team">
                        <div class="team-content">
                            <h3>John Doe</h3>
                            <span>CEO</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-team-member-box">
                        <img src="{{asset('assets/img/team-img2.jpg')}}" alt="team">
                        <div class="team-content">
                            <h3>Steven Smith</h3>
                            <span>Developer</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-team-member-box">
                        <img src="{{asset('assets/img/team-img3.jpg')}}" alt="team">
                        <div class="team-content">
                            <h3>David Luiz</h3>
                            <span>Designer</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-team-member-box">
                        <img src="{{asset('assets/img/team-img4.jpg')}}" alt="team">
                        <div class="team-content">
                            <h3>Park Tim</h3>
                            <span>SEO Expert</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-team-member-box">
                        <img src="{{asset('assets/img/team-img5.jpg')}}" alt="team">
                        <div class="team-content">
                            <h3>Doglas Costa</h3>
                            <span>Manager</span>
                            <ul>
                                <li><a href="#" class="facebook"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#" class="instagram"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#" class="twitter"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#" class="linkedin"><i class="icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="feedback-area ptb-100 bg-gray">
    <div class="container">
        <div class="section-title">
            <h2>Testimonials</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="feedback-slides owl-carousel owl-theme">
                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="{{asset('assets/img/client1.jpg')}}" alt="client">
                            <h3>Alit John</h3>
                            <span>Web Developer</span>
                        </div>
                        <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="{{asset('assets/img/client2.jpg')}}" alt="client">
                            <h3>Alit John</h3>
                            <span>SEO Expert</span>
                        </div>
                        <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="{{asset('assets/img/client3.jpg')}}" alt="client">
                            <h3>Steven John</h3>
                            <span>Web Developer</span>
                        </div>
                        <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-feedback">
                        <div class="client-info">
                            <img src="{{asset('assets/img/client4.jpg')}}" alt="client">
                            <h3>David Warner</h3>
                            <span>Web Developer</span>
                        </div>
                        <p>Plan ahead by day, week, or month, and see project status at a glance. Search and filter to focus in on anything form a single project individual.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg class="svg-feedback-bottom" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 100 100" preserveaspectratio="none">
    <path d="M0,70 C30,130 70,50 100,70 L100,100 0,100 Z" fill="#ffffff"></path>
    </svg>
</section>


<section class="blog-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Latest News</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div class="row">
            <div class="blog-slides owl-carousel owl-theme">
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img1.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 23, 2021</li>
                            </ul>
                            <h3><a href="#">The Most Popular New Business Apps</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img2.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 16, 2021</li>
                            </ul>
                            <h3><a href="#">The Best Marketing Management Tools</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img3.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 14, 2021</li>
                            </ul>
                            <h3><a href="#">3 WooCommerce Plugins to Boost Sales</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img4.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 06, 2021</li>
                            </ul>
                            <h3><a href="#">CakeMail Review – Design Custom Emails</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img5.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 04, 2021</li>
                            </ul>
                            <h3><a href="#">The Most Popular New Apps in 2021</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-blog-post">
                        <a href="#" class="post-image"><img src="{{asset('assets/img/blog-img3.jpg')}}" alt="blog-image"></a>
                        <div class="blog-post-content">
                            <ul>
                                <li><i class="icofont-user-male"></i> <a href="#">Admin</a></li>
                                <li><i class="icofont-wall-clock"></i> January 26, 2021</li>
                            </ul>
                            <h3><a href="#">The Fastest Growing Apps in 2021</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis massa, dapibus nec libero vitae.</p>
                            <a href="#" class="read-more-btn">Read More <i class="icofont-rounded-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="subscribe-area ptb-100">
    <div class="container">
        <div class="section-title">
            <h2>Connect With Our Community</h2>
            <div class="bar"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <form class="newsletter-form" data-bs-toggle="validator">
            <input type="email" class="form-control" placeholder="Your Email Address" name="EMAIL" required="" autocomplete="off">
            <button class="btn btn-primary" type="submit">Subscribe</button>
            <div id="validator-newsletter" class="form-result"></div>
        </form>
    </div>
</section>


<section class="platform-connect ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h2>Interact With Your Users On Every Single Platform</h2>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box">
                    <img src="{{asset('assets/img/mailchimp.png')}}" alt="mailchimp">
                    <h3>Mail Chimp</h3>
                    <span>Send Mail</span>
                    <i class="icofont-bubble-right"></i>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box">
                    <img src="{{asset('assets/img/slack.png')}}" alt="mailchimp">
                    <h3>Slack</h3>
                    <span>Messaging</span>
                    <i class="icofont-bubble-right"></i>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box">
                    <img src="{{asset('assets/img/twitter.png')}}" alt="mailchimp">
                    <h3>Twitter</h3>
                    <span>Twitter Feed</span>
                    <i class="icofont-bubble-right"></i>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="#" class="box">
                    <img src="{{asset('assets/img/instagram.png')}}" alt="mailchimp">
                    <h3>Instagram</h3>
                    <span>News Feed</span>
                    <i class="icofont-bubble-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>

@endsection
