<header class="header-area header-v4">
    <div class="header-navigation">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Brand Logo -->
                <div class="col-xl-4 col-md-6 col-8">
                    <div class="site-branding-and-language-selection">
                        <div class="brand-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/img/logo-red.png')}}" alt="logo">
                            </a>
                        </div>
                        {{-- <div class="language-selection">
                            <select class="nice-select" name="language">
                                <option value="en">English</option>
                            </select>
                        </div> --}}
                    </div>
                </div>
                <!-- Desktop and Mobile Menu -->
                <div class="col-xl-8 col-md-6 col-4 text-center">
                    <div class="primary-menu d-flex justify-content-end align-items-center">
                        <div class="nav-menu">
                            <!-- Navbar Close Icon -->
                            <div class="navbar-close">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <nav class="main-menu">
                                <ul>
                                    <li class="menu-item menu-item-has-children" >
                                        <a href="{{route('integrations')}}" class="nav-link ">Integrations</a>
                                        <ul class="sub-menu" style="width:700px" >
                                            <div style="padding: 25px;" >
                                                <div class="row" style="padding: 15px; background-color:rgb(245, 215, 215) ; border-radius:10px">
                                                    <div class="col-11">
                                                        <h3> Integrations    </h3>
                                                        <p style="font-size: 15px"> Seamlessly Integarate to your eCommerce store to become a succesfull dropshipping busniess overnight!   </p>
                                                    </div>
                                                    <div class="col-1">
                                                            <a href="{{route('integrations')}}">
                                                                <i class="fa fa-arrow-right mt-5"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                            {{--  <a href="{{route('integrations')}}">  --}}
                                            {{--  </a>  --}}
                                            <div class="row">
                                                <div class="col-6">
                                                    <li>
                                                        <a href="{{route('integration',['slug'=>'amazon'])}}"> Integration with <span><img src="{{asset('assets/img/services/amazon_ico.png')}}"
                                                                    width="50px" />
                                                            </span></a>
                                                    </li>
                                                    <li><a href="{{route('integration',['slug'=>'eBay'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/eBay.png')}}"
                                                                    width="50px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'Etsy'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/Etsy.png')}}"
                                                                    width="50px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'OnBuy'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/onbuy.png')}}"
                                                                    width="70px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'shopify'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/shopify.png')}}"
                                                                    width="70px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'fruugo'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/w_fruugo.jpg')}}"
                                                                    width="70px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'wish'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/wish.png')}}"
                                                                    width="70px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'gumtree'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/gumtree.png')}}"
                                                                    width="90px" /> </span>
                                                        </a></li>

                                                </div>
                                                <div class="col-6">
                                                    <li><a href="{{route('integration',['slug'=>'FacebookShop'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/facebook.png')}}"
                                                                    width="90px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'InstaShop'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/insta_icon.png')}}"
                                                                    width="30px" /> </span>
                                                            shop </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'google'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/google.png')}}"
                                                                    width="90px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'BigCommerce'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/bigcommerce.png')}}"
                                                                    width="80px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'woocommerce'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/woocommerce.png')}}"
                                                                    width="80px" /> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'linnworks'])}}">Integration with
                                                            <span><img src="{{asset('assets/img/services/Linnworks.png')}}"
                                                                    width="80px" /> </span>
                                                        </a></li>
                                                </div>

                                            </div>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nav-link">Partners</a>
                                        <ul class="sub-menu">
                                            @php
                                                $partners=getPartners();
                                            @endphp
                                            @foreach ($partners as $item)
                                            <li><a href="{{route('partner',['slug'=>$item->slug])}}">{{$item->name}} </a></li>
                                            @endforeach


                                        <li><a href="https://store.edropship.co.uk/" target=_blank> OnePiece
                                                Wholesaler</a></li>
                                        <li><a href="https://store.edropship.co.uk/" target=_blank> Bulk Wholesaler</a>
                                        </li>

                                        <li><a href="{{route('contact')}}"> Franchise </a></li>
                                        <li><a href="{{route('contact')}}"> Whitelable </a></li>
                                        <li><a href="{{route('contact')}}"> Investment </a></li>
                                        <li><a href="{{route('contact')}}"> Smartshop </a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{route('pricing')}}" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#" class="nav-link">Recources</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('resources.tour')}}">Platform Tour </a></li>
                                            <li><a href="{{route('resources.academy')}}">{{config('app.name')}} Academy </a></li>
                                            <li><a href="{{route('resources.guru')}}"> {{config('app.name')}} Guru </a></li>
                                            <li><a href="{{route('resources.app')}}">Mobile App</a></li>
                                            <li><a href="{{route('resources.webinars')}}">Webinars </a></li>
                                            <li><a href="{{route('resources.blogs')}}"> Blogs </a></li>
                                            <li><a href="{{route('resources.hotproducts')}}"> Hot Products </a></li>
                                            <li><a href="{{route('contact')}}"> Help Centre </a></li>
                                            <li><a href="{{route('resources.freetool')}}"> Free Tools </a></li>
                                            </a></li>
                                        </ul>
                                    </li>


                                    <li class="menu-item">
                                        <a href="{{route('contact')}}" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul>
                                <li class="get-started-wrapper">
                                    <a href="services.html" class="filled-btn bg-mandy button-radius">
                                        Get Started <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="menu-toggle">
                                        <div class="menu-overlay"></div>
                                        <!-- Navbar Toggler -->
                                        <div class="nav-toggle">
                                            <div class="navbar-toggler float-end">
                                                <span></span>
                                                <span></span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> <!-- /.row -->
        </div> <!-- /.container-fluid -->
    </div> <!-- /.header-navigation -->
</header> <!-- /.header-area -->
