@extends('layouts.frontend.master')


@section('content')

@component('frontend.components.breadcrumb',['title'=>"Blogs"])

@endcomponent
<section class="blog-area p-t-130 p-b-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="blog-post-item p-r-40 p-r-lg-0">
                    <div class="single-blog-post">
                        <div class="post-thumbnail">
                            <img src="{{asset('assets/img/blog/blog-standard-thumbnail-1.jpg')}}" alt="blog thumbnail one">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a>
                                </li>
                                <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments
                                        (05)</a></li>
                            </ul>
                            <h4 class="post-title">
                                <a href="blog-details.html">Multiplayer Text Adventure Engine In Node Game Engine
                                    Server Design Optimizing</a>
                            </h4>
                            <div class="post-excerpt">
                                <p>But must explain to you how all this mistaken idea denouncing pleasure and
                                    praising pain was born and will give complete account of the system and expound
                                </p>
                            </div>

                            <a href="blog-details.html" class="post-read-more">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-post">
                        <div class="post-thumbnail">
                            <img src="{{asset('assets/img/blog/blog-standard-thumbnail-2.jpg')}}" alt="blog thumbnail one">
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a>
                                </li>
                                <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments
                                        (05)</a></li>
                            </ul>
                            <h4 class="post-title">
                                <a href="blog-details.html">Multiplayer Text Adventure Engine In Node Game Engine
                                    Server Design Optimizing</a>
                            </h4>
                            <div class="post-excerpt">
                                <p>But must explain to you how all this mistaken idea denouncing pleasure and
                                    praising pain was born and will give complete account of the system and expound
                                </p>
                            </div>

                            <a href="blog-details.html" class="post-read-more">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-post no-thumbnail">
                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a>
                                </li>
                                <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments
                                        (05)</a></li>
                            </ul>
                            <h4 class="post-title">
                                <a href="blog-details.html">Postmortem Of Gutenberg The Launch So We Can Embrace
                                    Gutenberg The Product</a>
                            </h4>
                            <div class="post-excerpt">
                                <p>
                                    But must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and complete account
                                </p>
                            </div>

                            <a href="blog-details.html" class="post-read-more">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="single-blog-post thumbnail-cover">
                        <div class="post-thumbnail">
                            <img src="{{asset('assets/img/blog/blog-standard-thumbnail-3.jpg')}}" alt="blog thumbnail one">
                        </div>

                        <div class="post-content">
                            <ul class="post-meta">
                                <li><a href="#" class="post-meta"><i class="far fa-user"></i>Nichel Jhon</a></li>
                                <li><a href="#" class="post-meta"><i class="far fa-calendar-alt"></i>25 May 2021</a>
                                </li>
                                <li><a href="#" class="post-meta"><i class="far fa-comment-dots"></i>Comments
                                        (05)</a></li>
                            </ul>
                            <h4 class="post-title">
                                <a href="blog-details.html">Postmortem Of Gutenberg The Launch So We Can Embrace
                                    Gutenberg The Product</a>
                            </h4>
                            <a href="blog-details.html" class="post-read-more">Learn More <i
                                    class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <ul class="post-pagination">
                    <li>
                        <a href="#">
                            <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li><a href="#" class="active">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li>
                        <a href="#">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="blog-sidebar m-t-md-80">
                    <div class="widget search-widget">
                        <h4>Search Here</h4>
                        <form>
                            <input type="search" placeholder="Search" name="search">
                            <button class="search-btn"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget category-widget">
                        <h4 class="widget-title">Category</h4>

                        <ul class="category-link">
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">IT Consultancy</a></li>
                            <li><a href="#">Business Consulting</a></li>
                            <li><a href="#">Apps Development</a></li>
                            <li><a href="#">Media Marketing</a></li>
                            <li><a href="#">SEO Optimizations</a></li>
                        </ul>
                    </div>
                    <div class="widget latest-post-widget">
                        <h4 class="widget-title">Latest News</h4>
                        <div class="popular-posts-wrapper">
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-1.jpg')}}"
                                            alt="latest post one">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Build Seamless
                                            Spreadshet Import Experience</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May
                                        2021</a>
                                </div>
                            </div>
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-2.jpg')}}"
                                            alt="latest post two">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Creating Online
                                            Environment Work Well Older</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May
                                        2021</a>
                                </div>
                            </div>
                            <div class="popular-posts-item">
                                <div class="popular-posts-thumbnail">
                                    <a href="blog-details.html">
                                        <img src="{{asset('assets/img/blog/latest-post-thumbnail-3.jpg')}}"
                                            alt="latest post three">
                                    </a>
                                </div>
                                <div class="popular-posts-item-content">
                                    <h5 class="popular-posts-title"><a href="blog-details.html">Signs Website Feels
                                            More Haunted House</a></h5>
                                    <a href="#" class="posts-date"><i class="far fa-calendar-alt"></i> 25 May
                                        2021</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget testimonial-widget">
                        <div class="testimonial-widget-active">
                            <div class="single-testimonial">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>

                                <div class="author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-1.png')}}" alt="Author">
                                    <h6 class="name">
                                        Ricky L. Simpson
                                        <span class="position">Web designer</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>

                                <div class="author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-2.png')}}" alt="Author">
                                    <h6 class="name">
                                        Ricky L. Simpson
                                        <span class="position">Web designer</span>
                                    </h6>
                                </div>
                            </div>

                            <div class="single-testimonial">
                                <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae conse quatur vellum rem</p>

                                <div class="author">
                                    <img src="{{asset('assets/img/testimonial/testimonial-author-3.png')}}" alt="Author">
                                    <h6 class="name">
                                        Ricky L. Simpson
                                        <span class="position">Web designer</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget-tag-cloud">
                        <h4 class="widget-title">Popular Tags</h4>
                        <div class="tags">
                            <a href="#">Landing</a>
                            <a href="#">UI Design</a>
                            <a href="#">Web</a>
                            <a href="#">SEO</a>
                            <a href="#">Development</a>
                            <a href="#">UX/UI</a>
                            <a href="#">Consulting</a>
                            <a href="#">Mobile Apps</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
