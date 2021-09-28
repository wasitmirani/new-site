<section class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="contact-area-content content-right-spacer">
                    <div class="info-iconic-boxes">
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-1">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="info-body">
                                <h5>Our Location</h5>
                                <p>275 Deansgate, Manchester M3 4EL <br>United Kingdom</p>
                            </div>
                        </div>
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-2">
                                <i class="fal fa-envelope-open-text"></i>
                            </div>
                            <div class="info-body">
                                <h5>Email Address</h5>
                                <p></p>
                                <p><a href="mailto:support@edropship.co.uk">support@edropship.co.uk</a> </p>
                            </div>
                        </div>
                        <div class="info-iconic-box wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1500ms">
                            <div class="info-icon info-icon-gradient-3">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="info-body">
                                <h5>Urgent Call</h5>
                                <p><a href="tel:+447958557597">+447958557597</a></p>
                                {{-- <p><a href="tel:+8563214">+8563214</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="contact-form-area content-right-spacer">
                    <div class="section-title mb-40">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Send Us Message</span>
                        </div>
                        <div >
                        <h2> Send your Intrest  </h2>
                        
                    </div>
                </div>
                    <div class="contact-respond">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <input type="hidden" name="source" value="{{ $source }}">
                            <div class="input-group">
                                <input type="text" class="form-control" id="fullName" placeholder="Full Name"
                                    name="name" required="">
                                <label for="fullName">Name</label>
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" id="emailAddress" placeholder="Email Address"
                                name="email" required="">
                                <label for="emailAddress">Email</label>
                            </div>
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example">
                                      <option value="seller" selected> Seller </option>
                                      <option value="vendor"> Vendor/suppler </option>
                                      <option value="wholeseller"> Wholeseller </option>
                                      <option value="exporter"> Exporter </option>
                                </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" id="phoneNumber" placeholder="Phone Number"
                                    name="phone" required="">
                                <label for="phoneNumber">Phone</label>
                            </div>
                            <div class="input-group form-textarea">
                                <textarea class="form-control" id="message" placeholder="Message"
                                    name="message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="filled-btn">Send Message <i
                                        class="fas fa-arrow-right"></i></button>
                            </div>
                        </form>
                </div> <!-- /.contact-respond -->
            </div> <!-- /.contact-form-area -->
        </div>
    </div> <!-- /.row -->
</div> <!-- /.container -->
</section> <!-- /.contact-area -->
