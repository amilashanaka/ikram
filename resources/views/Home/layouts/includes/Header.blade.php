<header id="site-header" class="site-header header-transparent header-fixed sticky-header mobile-header-blue">
    <!-- Main header start - Header Home-1, Default -->
    <!-- Top bar start / class css: topbar-dark -->
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- contact info -->
                    <ul class="info-list fleft">
                        <li><i class="fa fa-map-marker"></i> London City, England ( <a href="#">View map</a> )</li>
                        <li><i class="fa fa-phone"></i><a href="tel:8143527">(+917)  814 - 3527</a></li>
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
                            <a href="index.html">


                                <img class="logo-static" src="{{asset("Home/images/logo.png")}}" alt="Consultax">
                                <img class="logo-scroll" src="{{asset("Home/images/logo - w.png")}}" alt="Consultax">


                            </a>
                        </div>
                        <div class="header-mainnav col-media-body col-media-middle">

                            <div class="search-cart-box fright">
                                <div class="h-cart-btn fright"><a onclick="openForm()"><i class="fa fa-user-circle" aria-hidden="true"></i></a></div>

                                @include('Home.layouts.includes.login')
                                <div class="toggle_search fright"><i class="fa fa-search" aria-hidden="true"></i></div>
                                <div class="h-search-form-field">
                                    <form role="search" method="get" id="search-form" class="search-form" action="#">
                                        <input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
                                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div id="site-navigation" class="main-navigation fright">
                                <ul id="primary-menu" class="menu">
                                    <li class="menu-item-has-children">
                                        <a href="index.html">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html" aria-current="page">Home 1</a></li>
                                            <li><a href="home-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1738"><a href="about.html">About Us</a></li>
                                            <li class="menu-item-1745"><a href="team.html">Our Team</a></li>
                                            <li class="menu-item-1742"><a href="how-it-work.html">How It Work</a></li>
                                            <li class="menu-item-1746"><a href="testimonials.html">Testimonials</a></li>
                                            <li class="menu-item-1757"><a href="services.html">Services Box</a></li>
                                            <li class="menu-item-1744"><a href="services-icon.html">Icon Box</a></li>
                                            <li class="menu-item-1740"><a href="career.html">Career</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-has-children"><a href="services.html">Services</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1791"><a href="service-detail.html">Financial Consulting</a></li>
                                            <li class="menu-item-1758"><a href="service-detail.html">International Business</a></li>
                                            <li class="menu-item-1790"><a href="service-detail.html">Audit &amp; Assurance</a></li>
                                            <li class="menu-item-1760"><a href="service-detail.html">Taxes and Efficiency</a></li>
                                            <li class="menu-item-1761"><a href="service-detail.html">Bonds &amp; Commodities</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="projects.html">Cases Study</a>
                                        <ul class="sub-menu">
                                            <li><a href="projects.html">Cases Study 2 Columns</a></li>
                                            <li><a href="projects-2.html">Cases Study 3 Columns</a></li>

                                            <li><a href="project-detail.html">Cases Study Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog List</a></li>
                                            <li><a href="post.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
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
                <a href="#"><img src="images/logo-white.svg" alt="Consultax"></a>
            </div>
            <div id="mmenu_toggle">
                <button></button>
            </div>
        </div>
        <div class="mmenu_wrapper">
            <div class="mobile_nav collapse">
                <ul id="menu-main-menu" class="mobile_mainmenu">
                    <li class="menu-item-has-children"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item-home current-page_item page-item-1530 current_page_item menu-item-2017"><a href="index.html" aria-current="page">Home 1</a></li>
                            <li class="menu-item-2016"><a href="home-2.html">Home 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1738"><a href="about.html">About Us</a></li>
                            <li class="menu-item-1745"><a href="team.html">Our Team</a></li>
                            <li class="menu-item-1742"><a href="how-it-work.html">How It Work</a></li>
                            <li class="menu-item-1746"><a href="testimonials.html">Testimonials</a></li>
                            <li class="menu-item-1757"><a href="services.html">Services Box</a></li>
                            <li class="menu-item-1744"><a href="services-icon.html">Icon Box</a></li>
                            <li class="menu-item-1740"><a href="career.html">Career</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="services.html">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1791"><a href="service-detail.html">Financial Consulting</a></li>
                            <li class="menu-item-1758"><a href="service-detail.html">International Business</a></li>
                            <li class="menu-item-1790"><a href="service-detail.html">Audit &amp; Assurance</a></li>
                            <li class="menu-item-1760"><a href="service-detail.html">Taxes and Efficiency</a></li>
                            <li class="menu-item-1761"><a href="service-detail.html">Bonds &amp; Commodities</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="projects.html">Cases Study</a>
                        <ul class="sub-menu">
                            <li><a href="projects.html">Cases Study 2 Columns</a></li>
                            <li><a href="projects-2.html">Cases Study 3 Columns</a></li>

                            <li><a href="project-detail.html">Cases Study Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.html">Blog List</a></li>
                            <li><a href="post.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

</header>

