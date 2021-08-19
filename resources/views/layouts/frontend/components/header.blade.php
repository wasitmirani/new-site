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
                                    <li class="menu-item ">
                                        <a href="{{route('integrations')}}" class="nav-link ">Integrations</a>
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
                                            <li><a href="about.html">Platform Tour</a></li>
                                            <li><a href="team.html">{{config('app.name')}} Academy</a></li>
                                            <li><a href="pricing.html">{{config('app.name')}} Guru</a></li>
                                            <li><a href="coming-soon.html">Mobile App</a></li>
                                            <li><a href="404.html">Webinars</a></li>
                                            <li><a href="pricing.html">Blogs</a></li>
                                            <li><a href="coming-soon.html">Hot Products</a></li>
                                            <li><a href="404.html">Help Centre</a></li>
                                            <li><a href="404.html">Free Tools
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
