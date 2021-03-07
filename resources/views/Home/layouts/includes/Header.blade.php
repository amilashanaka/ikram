<header id="site-header" class="site-header header-transparent header-fixed sticky-header mobile-header-blue">
    <!-- Main header start - Header Home-1, Default -->
    <!-- Top bar start / class css: topbar-dark -->
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- contact info -->
                    <ul class="info-list fleft">
                        <li><i class="fa fa-map-marker"></i> Block 5, 1st Floor,
                            Unipark Suria, Jalan Ikram-Uniten, ( <a href="#">View map</a> )
                        </li>
                        <li><i class="fa fa-phone"></i><a href="tel:8143527">(+60) 03-8738 3388</a></li>
                    </ul>
                    <!-- contact info close -->

                    <!-- social icons -->
                    <ul class="social-list fright social_on_right_side">
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a>
                        </li>
                    </ul>
                    <!-- social icons close -->
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar close -->

    <!-- Main header start -->
    <div class="main-header md-hidden sm-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-wrap-table">
                        <div id="site-logo" class="site-logo col-media-left col-media-middle">
                            <a href="/">


                                <img class="logo-static" src="{{asset("Home/images/logo.png")}}" alt="Consultax">
                                <img class="logo-scroll" src="{{asset("Home/images/logo - w.png")}}" alt="Consultax">


                            </a>
                        </div>
                        <div class="header-mainnav col-media-body col-media-middle">

                            <div class="search-cart-box fright">
                                <div class="h-cart-btn fright"><a onclick="openForm()"><i class="fa fa-user-circle" aria-hidden="true"></i></a></div>

                                @include('Home.layouts.includes.login')
                                {{--                                @include('Home.layouts.includes.search')--}}
                            </div>
                            <div id="site-navigation" class="main-navigation fright">
                                <ul id="primary-menu" class="menu">
                                    <li>
                                        <a href="/">Home</a>

                                    </li>
                                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="/about">About Us</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1738"><a href="/about/background">background</a></li>
                                            <li class="menu-item-1745"><a href="/about/vision-mission">vision&mission</a></li>
                                            <li class="menu-item-1742"><a href="/about/organisation-chart">organisation chart</a></li>
                                            <li class="menu-item-1746"><a href="/about/achievement-chart">Achievement</a></li>

                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-has-children"><a href="/services">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1791"><a href="/services/product-certification">Product Certification</a></li>
                                            <li class="menu-item-1758"><a href="/services/local-product-listing">Local Product Listing</a></li>
                                            <li class="menu-item-1790"><a href="/services/testing-services">Testing Services</a></li>
                                            <li class="menu-item-1760"><a href="/services/directory">Directory</a></li>
                                            <li class="menu-item-1761"><a href="/services/guides">Guides</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="/certification">Certification</a>
                                        <ul class="sub-menu">
                                            <li><a href="/certification/products">Products</a></li>
                                            <li><a href="/certification/standard">Standard</a></li>

                                            <li><a href="/certification/relevant-acts-directives">Relevant Acts Directives</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="/forms">forms</a>
                                        <ul class="sub-menu">
                                            <li><a href="/forms/products">Products</a></li>
                                            <li><a href="/forms/products-list">Products List</a></li>
                                            <li><a href="/forms/consignments">Consignments</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-item-has-children"><a href="/contact">Contact</a>
                                        <ul class="sub-menu">
                                            <li><a href="/feedback">Feedback</a></li>
                                            <li><a href="/forms/products-list">Products List</a></li>
                                            <li><a href="/forms/consignments">Consignments</a></li>
                                        </ul>
                                    </li>


                                </ul>
                            </div>
                            <!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main header close -->

    <div class="header_mobile">
        <div class="mlogo_wrapper clearfix">
            <div class="mobile_logo">
                <a href="#"><img src="{{asset("Home/images/logo.png")}}" alt="ikram"></a>
            </div>
            <div id="mmenu_toggle">
                <button></button>
            </div>
        </div>
        <div class="mmenu_wrapper">
            <div class="mobile_nav collapse">
                <ul id="menu-main-menu" class="mobile_mainmenu">

                    <li>
                        <a href="/">Home</a>

                    </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="/about">About Us</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1738"><a href="/about/background">background</a></li>
                            <li class="menu-item-1745"><a href="/about/vision-mission">vision&mission</a></li>
                            <li class="menu-item-1742"><a href="/about/organisation-chart">organisation chart</a></li>
                            <li class="menu-item-1746"><a href="/about/achievement-chart">Achievement</a></li>

                        </ul>
                    </li>
                    <li class="menu-item-type-custom menu-item-has-children"><a href="/services">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1791"><a href="/services/product-certification">Product Certification</a></li>
                            <li class="menu-item-1758"><a href="/services/local-product-listing">Local Product Listing</a></li>
                            <li class="menu-item-1790"><a href="/services/testing-services">Testing Services</a></li>
                            <li class="menu-item-1760"><a href="/services/directory">Directory</a></li>
                            <li class="menu-item-1761"><a href="/services/guides">Guides</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="/certification">Certification</a>
                        <ul class="sub-menu">
                            <li><a href="/certification/products">Products</a></li>
                            <li><a href="/certification/standard">Standard</a></li>

                            <li><a href="/certification/relevant-acts-directives">Relevant Acts Directives</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="/forms">forms</a>
                        <ul class="sub-menu">
                            <li><a href="/forms/products">Products</a></li>
                            <li><a href="/forms/products-list">Products List</a></li>
                            <li><a href="/forms/consignments">Consignments</a></li>
                        </ul>
                    </li>

                    <li class="menu-item-has-children"><a href="/contact">Contact</a>
                        <ul class="sub-menu">
                            <li><a href="/feedback">Feedback</a></li>
                            <li><a href="/forms/products-list">Products List</a></li>
                            <li><a href="/forms/consignments">Consignments</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</header>

