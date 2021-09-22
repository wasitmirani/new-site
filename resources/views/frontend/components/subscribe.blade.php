<section class="subscribe-newsletter-area bg-white-lilac pt-130 pb-123" style="background-image: url({{asset('assets/img/particle/newsletter-bg.png')}});">
    <div class="container">
        <div class="section-internal">
            <div class="section-particle-effect d-none d-md-block section-particle-effect-v4">
                <img class="particle-1 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}" alt="particle One">
                <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/gradient-curve-shape-2.png')}}" alt="particle Two">
                <img class="particle-3 animate-zoominout" src="{{asset('assets/img/particle/particle-4.png')}}" alt="particle Three">
                <img class="particle-4 animate-float-bob-y" src="{{asset('assets/img/particle/particle-5.png')}}" alt="particle Five">
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-xl-7 col-lg-10">
                    <div class="subscribe-newsletter-content">
                        <div class="section-title mb-35">
                            <div class="section-heading-tag wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                                <span class="single-heading-tag">Our Newsletter</span>
                            </div>
                            <h2 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">Subscribe Our Newsletter <br class="d-none d-md-block">To Get More Update</h2>
                        </div>
                        <div class="newsletter-form newsletter-form-v2 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1500ms">
                            <form method="POST" action="{{ route('get-address-from-ip')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Enter Your Email Address">
                                    <input type="hidden" name="country" id="country" class="form-control" placeholder="Enter Your Email Address">
                                    <button type="submit" name="submit" value="Go" class="filled-btn">Subscribe Now <i class="fas fa-arrow-right"></i></button>
                                </div>
                            </form>
                            <div class="newsletter-notice">
                                <p>On the other hand, we denounce with righteous</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.section-internal -->
    </div> <!-- /.container -->
</section>
