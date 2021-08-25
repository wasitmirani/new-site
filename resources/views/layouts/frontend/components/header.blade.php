<header class="header-area header-v4">
    <div class="header-navigation">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Brand Logo -->
                <div class="col-xl-4 col-md-6 col-8">
                    <div class="site-branding-and-language-selection">
                        <div class="brand-logo">
                            <a href="{{route('home')}}">
                                <img src="{{asset('assets/img/LOGO-Web.png')}}" alt="logo" width="50%">
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
                                        <a href="{{route('integrations')}}" class="nav-link ">Products</a>
                                        <ul class="sub-menu" style="width:700px" >
                                            <div style="padding: 25px;" >
                                                <div class="row" style="padding: 15px; background-color:rgb(245, 215, 215) ; border-radius:10px">
                                                    <div class="col-11">
                                                        <h3> Products you Need    </h3>
                                                        <p style="font-size: 15px"> To see the product you need and may more new  collections  are there tap to go all collection   </p>
                                                    </div>
                                                    <div class="col-1">
                                                            <a href="https://store.edropship.co.uk/collections/new-in" target="_blank">
                                                                <i class="fa fa-arrow-right mt-5" ></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                            </div>
                                            {{--  <a href="{{route('integrations')}}">  --}}
                                            {{--  </a>  --}}
                                            <div class="int_nev">
                                                    <li><a href="https://store.edropship.co.uk/collections/adult" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/ElGZyY_large.jpg?v=1598944881"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Adult </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Automotive" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Automotive_large.jpg?v=1598944879"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Automotive </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Baby-Children" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Baby_Children_large.jpg?v=1598944849"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Baby & Children </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Books" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/books_large.jpg?v=1598944884"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Books </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Computers-Electronics" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/computers_electronics_large.jpg?v=1598944841"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Computers & Electronics </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/DIY-Tools" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/DIY_TOOLS_large.jpg?v=1598944889"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> DIY & Tools </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Fashion-Lifestyle" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Fashion_Lifestyle_large.jpg?v=1598944891"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Fashion & Lifestyle </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Food-Drink" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Food_Drink_large.png?v=1598944894"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Food & Drink </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Health-Beauty" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Health_Beauty_large.jpg?v=1598944795"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Health & Beauty </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/home-garden" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Home_Garden_large.jpg?v=1598944878"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Home & Garden </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Jewellery-Accessories" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Jewellery_Accessories_large.jpg?v=1598944798"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Jewellery & Accessories </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Sports & Outdoors" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/sports_Outdoors_large.png?v=1598944743"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Sports & Outdoors </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Stationery & Office Supplies" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/STATIONERY_OFFICE_SUPPLIES_large.jpg?v=1598944732"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Stationery & Office     </span>   </span>
                                                        </a></li>
                                                        <li><a href="https://store.edropship.co.uk/collections/Pet Suppliess" target="_blank">
                                                            <span><img src="https://cdn.shopify.com/s/files/1/0274/7308/4531/collections/Pet_Supplies_large.png?v=1598944767"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Pet Suppliess </span>   </span>
                                                        </a></li>


                                            </div>
                                        </ul>
                                    </li>
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
                                            <div class="int_nev">

                                                    <li>
                                                        <a href="{{route('integration',['slug'=>'amazon'])}}">  <span><img src="{{asset('assets/img/hero/amazon_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /><span class="ml-10 " style="font-size: 20px"> Amazon </span>
                                                            </span></a>
                                                    </li>
                                                    <li><a href="{{route('integration',['slug'=>'eBay'])}}">
                                                            <span><img src="{{asset('assets/img/hero/eBay_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> ebay </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'Etsy'])}}">
                                                            <span><img src="{{asset('assets/img/hero/Etsy_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Etsy </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'OnBuy'])}}">
                                                            <span><img src="{{asset('assets/img/hero/onbuy_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> OnBuy </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'shopify'])}}">
                                                            <span><img src="{{asset('assets/img/hero/shopify_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Shopify  </span>  </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'fruugo'])}}">
                                                            <span><img src="{{asset('assets/img/hero/fruugo_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Fruugo </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'wish'])}}">
                                                            <span><img src="{{asset('assets/img/hero/wish_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> wish </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'gumtree'])}}">
                                                            <span><img src="{{asset('assets/img/hero/gumtree_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> gumtree </span> </span>
                                                        </a></li>


                                                    <li><a href="{{route('integration',['slug'=>'FacebookShop'])}}">
                                                            <span><img src="{{asset('assets/img/hero/facebook_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> FacebookShop  </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'InstaShop'])}}">
                                                            <span><img src="{{asset('assets/img/hero/insta_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> InstaShop </span> </span> </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'google'])}}">
                                                            <span><img src="{{asset('assets/img/hero/google_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> GoogleShop </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'BigCommerce'])}}">
                                                            <span><img src="{{asset('assets/img/hero/bigcommerce_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> BigCommerce </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'woocommerce'])}}">
                                                            <span><img src="{{asset('assets/img/hero/woocommerce_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> WooCommerce </span> </span>
                                                        </a></li>
                                                    <li><a href="{{route('integration',['slug'=>'linnworks'])}}">
                                                            <span><img src="{{asset('assets/img/hero/Linnworks_icon.png')}}"
                                                                    width="50px" style="border-radius: 50%" /> <span class="ml-10 " style="font-size: 20px"> Linnworks </span> </span>
                                                        </a></li>
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
