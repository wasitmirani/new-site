@extends('layouts.frontend.master')


@section('content')

@component('frontend.components.breadcrumb',['title'=>"Blogs"])

@endcomponent
<section class="blog-list-wrapper pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-list-content">
                    <div class="blog-post-item blog-post-item-v3">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/blog-list-featured-thumbnail-1.jpg')}}" alt="blog thumbnail one">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                    <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments (05)</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Multiplayer Text Adventure Engine In Node Game Engine Server Design Optimizing</a></h4>
                            <div class="post-excerpt">
                                <p>But must explain to you how all this mistaken idea denouncing pleasure and praising pain
                                    was born and  will give complete account of the system and expound</p>
                            </div>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.blog-post-item -->
                    <div class="blog-post-item blog-post-item-v3">
                        <div class="post-thumbnail">
                            <a href="blog-details.html">
                                <img src="{{asset('assets/img/blog/blog-list-featured-thumbnail-2.jpg')}}" alt="blog thumbnail two">
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper">
                                <ul>
                                    <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                    <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                    <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments (05)</a></li>
                                </ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Multiplayer Text Adventure Engine In Node Game Engine Server Design Optimizing</a></h4>
                            <div class="post-excerpt">
                                <p>But must explain to you how all this mistaken idea denouncing pleasure and praising pain
                                    was born and  will give complete account of the system and expound</p>
                            </div>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.blog-post-item -->
                    <div class="blog-post-item blog-post-item-v3 post-offwhite">
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper"><ul>
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Comments (05)</a></li></ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Postmortem Of Gutenberg The Launch So We Can Embrace Gutenberg The Product</a></h4>
                            <div class="post-excerpt">
                                <p>But must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and  complete account</p>
                            </div>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.blog-post-item -->
                    <div class="blog-post-item blog-post-item-v3 post-type-featured-absolute">
                        <div class="post-thumbnail">
                            <a href="#">
                                <div class="post-thumbnail-bg" style="background-image: url({{asset('assets/img/blog/blog-list-featured-thumbnail-3.jpg')}});"></div>
                            </a>
                        </div>
                        <div class="blog-post-entry-content">
                            <div class="post-meta-wrapper"><ul>
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a></li>
                                <li><a href="#" class="post-meta"><i class="fas fa-comment-dots"></i>Comments (05)</a></li></ul>
                            </div>
                            <h4 class="post-title"><a href="blog-details.html">Everything You Ever Wanted To Know About Prototyping But Were Afraid To Ask</a></h4>
                            <div class="post-read-more">
                                <a href="blog-details.html" class="filled-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- /.blog-post-item -->
                    <!-- Posts Navigation -->
                    <nav class="posts-navigation" aria-label="posts">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="active"><a href="#">01</a></li>
                            <li><a href="#">02</a></li>
                            <li><a href="#">03</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> <!-- /.blog-list-content -->
            </div>


            <div class="col-lg-4">
                <div class="posts-sidebar">

                    {{-- blog area starts --}}
                    <div  data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <h4><button class=" btn btn-danger"><a href="{{ route('contact.blog')}}">Add Blog</a></button></h4>
                    </div>
                    <br><br>
                    {{-- blog area ends --}}
                    <div class="widget search-widget wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1200ms">
                        <h4>Search Here</h4>
                        <form>
                            <div class="form-group">
                                <input type="search" class="form-control" placeholder="Search" name="search">
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="widget category-widget wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1200ms">
                        <h4 class="sidebar-widget-title">Category</h4>
                        <ul class="category-link">
                            <li><a href="course-details.html">Web Development</a></li>
                            <li><a href="course-details.html">Email Marketing</a></li>
                            <li><a href="course-details.html">IT Consultancy</a></li>
                            <li><a href="course-details.html">Business Consulting</a></li>
                            <li><a href="course-details.html">Apps Development</a></li>
                            <li><a href="course-details.html">Media Marketing</a></li>
                            <li><a href="course-details.html">SEO Optimizations</a></li>
                        </ul>
                    </div>
                    <div class="widget latest-post-widget wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1200ms">
                        <h4 class="sidebar-widget-title">Latest News</h4>
                        <div class="popular-posts-wrapper">
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-1.jpg')}}" alt="latest post one">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Build Seamless Spreadshet Import Experience</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May 2021</a>
                                </div>
                            </div> <!-- /.popular-posts-item -->
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-2.jpg')}}" alt="latest post two">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Creating Online Environment Work Well Older</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May 2021</a>
                                </div>
                            </div> <!-- /.popular-posts-item -->
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-3.jpg')}}" alt="latest post three">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Signs Website Feels More Haunted House</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May 2021</a>
                                </div>
                            </div> <!-- /.popular-posts-item -->
                        </div>
                    </div>
                    <div class="widget widget-testimonial wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="1200ms">
                        <div class="testimonial-slider testimonial-slider-v4" id="testimonial-slider-v3">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial single-testimonial-v4">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>
                                <div class="testimonial-author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-1.png')}}" alt="testimonial author">
                                    <h6>Michael W. Kirwan <span>CEO & founder</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v4">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>
                                <div class="testimonial-author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-2.png')}}" alt="testimonial author">
                                    <h6>Ricky L. Simpson <span>Web designer</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v4">
                                <p>On the other hand denounce with righteous indignation dislike men who are so beguiled and demoralized by charms</p>
                                <div class="testimonial-author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-3.png')}}" alt="testimonial author">
                                    <h6>Harold S. Richardson <span>Saas developer</span></h6>
                                </div>
                            </div>
                            <div class="single-testimonial single-testimonial-v4">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>
                                <div class="testimonial-author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-2.png')}}" alt="testimonial author">
                                    <h6>Ricky L. Simpson <span>Web designer</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-tag-cloud wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1200ms">
                        <h4 class="sidebar-widget-title">Popular Tags</h4>
                        <a href="#">Landing</a>
                        <a href="#">UI Design</a>
                        <a href="#">Web</a>
                        <a href="#">SEO</a>
                        <a href="#">Development</a>
                        <a href="#">UX/UI</a>
                        <a href="#">Consulting</a>
                        <a href="#">Mobile Apps</a>
                    </div>
                </div> <!-- /.posts-sidebar -->
            </div>
        </div> <!-- /row -->
    </div> <!-- .container -->
</section> <!-- /.blog-list-wrapper -->
<!--====== End Blog List Area ======-->

@endsection
