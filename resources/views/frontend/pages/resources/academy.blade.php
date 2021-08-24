@extends('layouts.frontend.master') @section('content')

<section class="hero-area hero-v5 bg-solid-dark" style="background-image: url({{ asset('assets/img/hero/map-bg.png')}});">
    <div class="container">
        <div class="hero-internal">
            <div class="row">
                <div class="col-xl-8 col-lg-9">
                    <div class="hero-content">
                        <div class="section-title section-title-white">
                            <h1 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Get Solutions to Expert Consultant</h1>
                            <div class="section-title-quote wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                                <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accusanti doloremque laudantium totam rem aperiam</p>
                            </div>
                            <div class="section-button-wrapper section-dual-button wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1500ms">
                                <span>
                                    <a href="service-details.html" class="filled-btn">
                                        Discover More <i class="fas fa-arrow-right"></i>
                                    </a>
                                </span>
                                <span class="play-video">
                                    <a href="../../../87110435.html" class="play-btn">
                                        <i class="fas fa-play pulse-animated"></i>
                                    </a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-right-thumbnail" style="background-image: url({{ asset('assets/img/hero/hero-v5-right-thumbnail.jpg')}});">
                <div class="hero-right-bg-shape"></div>
            </div>
        </div> <!-- /.hero-internal -->
    </div> <!-- /.container -->
</section> <!-- /.hero-area -->
<!--====== End Hero Area ======-->
<!--====== Start Company Statistic Area ======-->
<section class="company-statistic-area pt-120 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="company-statistic-content mb-60 content-right-spacer">
                    <div class="section-title">
                        <h2>Company Statistics</h2>
                        <div class="section-title-description">
                            <p>Sed perspicias unde omnis iste natus error voluptatem accusantium dolorem laudanme totam rem aperiam eaque quae.</p>
                        </div>
                        <a href="about.html" class="filled-btn btn-bordered bg-royal-blue">
                            Learn More <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="statistic-count-boxes">
                    <div class="row">
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                        <div class="col-md-6">
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
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.company-statistic-area -->
<!--====== End Company Statistic Area ======-->
<!--====== Start Our Services Area ======-->
<section class="our-services our-services-v2 bg-white-lilac pt-122 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center mb-70">
                    <h2>Popular Services</h2>
                    <div class="section-title-description">
                        <p>Sed perspicias unde omnis iste natus error voluptatem accusantium dolorem laudanme totam rem aperiam eaque quae.</p>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-info-box wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                    <div class="infobox-thumbnail">
                        <a href="service-details.html">
                            <img src="{{ asset('assets/img/services/service-thumbnail-1.jpg')}}" alt="service thumbnail one">
                        </a>
                    </div>
                    <div class="infobox-body">
                        <h5 class="infobox-title">
                            <a href="service-details.html">Digital Marketing</a>
                        </h5>
                        <p class="infobox-excerpt">Reduce your time - market and create capitalize</p>
                        <div class="infobox-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-info-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                    <div class="infobox-thumbnail">
                        <a href="service-details.html">
                            <img src="{{ asset('assets/img/services/service-thumbnail-2.jpg')}}" alt="service thumbnail two">
                        </a>
                    </div>
                    <div class="infobox-body">
                        <h5 class="infobox-title">
                            <a href="service-details.html">Email Marketing</a>
                        </h5>
                        <p class="infobox-excerpt">Reduce your time - market and create capitalize</p>
                        <div class="infobox-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-info-box wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                    <div class="infobox-thumbnail">
                        <a href="service-details.html">
                            <img src="{{ asset('assets/img/services/service-thumbnail-3.jpg')}}" alt="service thumbnail three">
                        </a>
                    </div>
                    <div class="infobox-body">
                        <h5 class="infobox-title">
                            <a href="service-details.html">Marketing Strategy</a>
                        </h5>
                        <p class="infobox-excerpt">Reduce your time - market and create capitalize</p>
                        <div class="infobox-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-info-box wow fadeInUp" data-wow-delay="0.8s" data-wow-duration="1500ms">
                    <div class="infobox-thumbnail">
                        <a href="service-details.html">
                            <img src="{{ asset('assets/img/services/service-thumbnail-4.jpg')}}" alt="service thumbnail four">
                        </a>
                    </div>
                    <div class="infobox-body">
                        <h5 class="infobox-title">
                            <a href="service-details.html">Web Development</a>
                        </h5>
                        <p class="infobox-excerpt">Reduce your time - market and create capitalize</p>
                        <div class="infobox-btn">
                            <a href="service-details.html">Read More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.our-services -->
<!--====== End Start Our Services Area ======-->
<!--====== Start Simple CTA Area ======-->
<section class="simple-cta-area bg-royal-blue" style="background-image: url({{ asset('assets/img/cta/simple-cta-bg.png')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="simple-cta-content">
                    <h4>Organize Your Business, Your Way, All In One Place</h4>
                    <a href="contact.html" class="filled-btn btn-bordered btn-off-white">
                        Contact Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.simple-cta-area -->
<!--====== End Simple CTA Area ======-->
<!--====== Start Why Choose Us Area ======-->
<section class="why-choose-us-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="square-and-oval-image-wrapper content-right-spacer">
                    <div class="image-square">
                        <img src="{{ asset('assets/img/about/why-choose-us-1.jpg')}}" alt="why choose one">
                    </div>
                    <div class="image-oval animate-float-bob-y">
                        <img src="{{ asset('assets/img/about/why-choose-us-2.jpg')}}" alt="why choose two">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="why-choose-us-content content-left-spacer">
                    <div class="section-title mb-40">
                        <h2>Why Choose Us</h2>
                        <div class="section-title-description">
                            <p>Sed ut perspiciatis unde omnis iste natus error sity voluptatem accusantium doloremque laudantie totam rem aperiam eaque quae abillo inventore.</p>
                        </div>
                    </div>
                    <div class="iconic-list-wrapper iconic-list-wrapper-v2">
                        <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                            <div class="iconic-list-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iconic-list-body">
                                <h5 class="iconic-list-title">Easy To Collaborate With User</h5>
                            </div>
                        </div>
                        <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                            <div class="iconic-list-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iconic-list-body">
                                <h5 class="iconic-list-title">Manage Team &amp; Users Flow</h5>
                            </div>
                        </div>
                        <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="iconic-list-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iconic-list-body">
                                <h5 class="iconic-list-title">Market Participant Perspective</h5>
                            </div>
                        </div>
                        <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="iconic-list-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iconic-list-body">
                                <h5 class="iconic-list-title">Upgrade Dashboard Systems</h5>
                            </div>
                        </div>
                        <div class="single-iconic-list iconic-list-v2 wow fadeInUp" data-wow-delay="800ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="iconic-list-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="iconic-list-body">
                                <h5 class="iconic-list-title">Institutional Grade Solutions</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.why-choose-us-area -->
<!--====== End Why Choose Us Area ======-->
<!--====== Start Testimonial Area ======-->
<section class="testimonial-area border-0 bg-white-lilac pt-122 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="testimonial-content-wrapper">
                    <div class="section-title mb-45">
                        <h2>What Our Clients <br class="d-none d-md-block">Say About Us</h2>
                    </div>
                    <div class="testimonial-slider" id="testimonial-slider-v4">
                        <div class="single-testimonial single-testimonial-v5">
                            <div class="quote-thumbnail">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>Sed ut perspicia unde omnis natus error sit volupt accusantium doloremque laudantium totam vellum rem</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/img/testimonial/testimonial-author-1.png')}}" alt="testimonial author">
                                <h6>Michael W. Kirwan <span>CEO & Founder</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v5">
                            <div class="quote-thumbnail">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/img/testimonial/testimonial-author-2.png')}}" alt="testimonial author">
                                <h6>Ricky L. Simpson <span>Web Designer</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v5">
                            <div class="quote-thumbnail">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>On the other hand denounce with righteous indignation dislike men who are so beguiled and demoralized by charms</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/img/testimonial/testimonial-author-3.png')}}" alt="testimonial author">
                                <h6>Harold S. Richardson <span>Saas Developer</span></h6>
                            </div>
                        </div>
                        <div class="single-testimonial single-testimonial-v5">
                            <div class="quote-thumbnail">
                                <i class="flaticon-right-quote"></i>
                            </div>
                            <p>On the other hand denounce with righteous indignation dislike men who are so beguiled and demoralized by charms</p>
                            <div class="testimonial-author">
                                <img src="{{ asset('assets/img/testimonial/testimonial-author-1.png')}}" alt="testimonial author">
                                <h6>Harold S. Richardson <span>Saas Developer</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="square-and-oval-image-wrapper content-left-spacer content-right-spacer">
                    <div class="project-count animate-float-bob-x">
                        <div class="count-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="count-details">
                            <h4 class="counter">23684</h4>
                            <p>Clients Say Us</p>
                        </div>
                    </div>
                    <div class="image-square">
                        <img src="{{ asset('assets/img/testimonial/testimonial-right-thumbnail-1.jpg')}}" alt="testimonial right image one">
                    </div>
                    <div class="image-oval animate-float-bob-y">
                        <img src="{{ asset('assets/img/testimonial/testimonial-right-thumbnail-2.jpg')}}" alt="testimonial right image two">
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.testimonial-area -->
<!--====== End Testimonial Area ======-->
<!--====== Start Contact Area ======-->
<section class="contact-area pt-120 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-center mb-75">
                    <h2>Need Free Consultation to <br class="d-none d-md-block">Your Next Project</h2>
                </div>
            </div>
        </div> <!-- /.row -->
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-box-wrapper">
                            <div class="single-contact-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                                <h4>Ready to Work Together For Better Solutions </h4>
                                <a href="team.html" class="filled-btn btn-bordered bg-royal-blue">
                                    Join with us <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                            <div class="single-contact-box wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                                <h4>Build A Better Career <br class="d-none d-xl-block"> With <span>Landio</span></h4>
                                <a href="about.html" class="filled-btn btn-bordered bg-royal-blue">
                                    View Our Jobs <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-form-area contact-form-area-v2 wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                    <div class="contact-respond">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" id="fullName" placeholder="Your Full Name" name="name" required="">
                                <label for="fullName">Name</label>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" id="yourEmail" placeholder="Email Address" name="email" required="">
                                <label for="emailAddress">Email</label>
                            </div>
                            <div class="input-group">
                                <div class="subject-dropdown">
                                    <select class="nice-select" name="subject">
                                        <option>Subject You Like</option>
                                        <option value="knowsomething">About Us</option>
                                        <option value="sayhello">Say Hello</option>
                                        <option value="askme">Ask Me</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group form-textarea">
                                <textarea class="form-control" id="message" placeholder="Write Message" name="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="filled-btn">Get Free Quote <i class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.contact-area -->
<!--====== End Contact Area ======-->
<!--====== Start Newsletter Search Area ======-->
<section class="newsletter-search-area newsletter-search-v2 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
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
</section> <!-- /.newsletter-search-area -->
<!--====== End Newsletter Search Area ======-->
<!--====== Start Blog or News Area ======-->
<section class="blog-and-news-area blog-news-v2 bg-dark-black-v2 pt-120 pb-100">
    <div class="container">
        <div class="section-internal">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title section-title-white mb-70">
                        <h2>News & Blog</h2>
                        <div class="section-title-description">
                            <p>Sed ut perspiciatis unde omnis iste natus error sity voluptatem accusantium doloremque</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-post-item blog-post-item-v4 color-reddish-orange wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog-thumbnail-1.jpg')}}" alt="blog thumbnail one">
                            </a>
                            <div class="post-tag">
                                <a href="#">SEO</a>
                            </div>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                    <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Com (05)</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Data Visualization Improve Mobile Experience.</a></h4>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn bg-blue-chalk">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-post-item blog-post-item-v4 color-purple wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1500ms">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog-thumbnail-6.jpg')}}" alt="blog thumbnail two">
                            </a>
                            <div class="post-tag">
                                <a href="#">Marketing</a>
                            </div>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                    <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Com (05)</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Make Honest Design Work Digital Business Ways.</a></h4>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn bg-blue-chalk">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-post-item blog-post-item-v4 color-magenta wow fadeInUp" data-wow-delay="0.6s" data-wow-duration="1500ms">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{ asset('assets/img/blog/blog-thumbnail-7.jpg')}}" alt="blog thumbnail three">
                            </a>
                            <div class="post-tag">
                                <a href="#">Marketing</a>
                            </div>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                    <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Com (05)</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Should You Do When Web Design Trend Becomes</a></h4>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn bg-blue-chalk">Read more <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
            <div class="section-button-wrapper">
                <a href="blog-standard.html" class="filled-btn">
                    View More News <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section> <!-- /.blog-and-news-area -->


@endsection
