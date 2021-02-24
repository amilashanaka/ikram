<header id="site-header" class="site-header mobile-header-blue header-style-1">
    <div id="header_topbar" class="header-topbar md-hidden sm-hidden clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- social icons -->
                    <ul class="social-list fleft">
                        <li><a href="/" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="/" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li><a href="/" target="_blank"><i class="fa fa-rss"></i></a>
                        </li>
                    </ul>
                    <!-- social icons close -->
                    <div class="topbar-text fright"> Opening Hours : Monday to Saturday - 8am to 9pm</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top bar close -->

    <!-- Main header start -->
    <div class="main-header md-hidden sm-hidden">
        <div class="main-header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-wrap-table">
                            <div id="site-logo" class="site-logo col-media-left col-media-middle">
                                <a href="/">
                                    <img class="logo-static" src="{{asset("Home/images/logo-blue.png")}}" alt="ikram">
                                    <img class="logo-scroll" src="{{asset("Home/images/logo-blue.png")}}" alt="ikram">
                                </a>
                            </div>
                            <div class="col-media-body col-media-middle">
                                <!-- contact info -->
                                <ul class="info-list info_on_right_side fright">
                                    <li>
                                        <span>Address: <strong>Block 5, 1st Floor, <br>Unipark Suria, Jalan Ikram-Uniten,43000 Kajang,Selangor Darul Ehsan</strong></span></li>
                                    <li>
                                        <span>Free call: <strong class="font-size18">03-8738 3388</strong></span></li>
                                </ul>
                                <!-- contact info close -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-mainnav">

                            <div class="search-cart-box fright">
                                <div class="h-cart-btn fright"><a  onclick="openForm()"  class="dropdown-toggle ds" ><i class="fa fa-user-circle" aria-hidden="true"></i></a></div>


                                <div class="form-popup-log" id="myForm"
                                     style="display: none;background-color: white;color: black;">
                                    <form action="{{ url('customer/login') }}" accept-charset="UTF-8"
                                          id="customer_login" enctype="multipart/formdata" method="post"
                                          class="form-container">
                                        @csrf
                                        <h6 class="login_modal_header">Login to my account</h6>
                                        <p class="login_sub_header">Enter your e-mail and password:
                                        </p>
                                        <input type="text" placeholder="Email" name="username" class="login_form_input"
                                               required>
                                        <input type="password" placeholder="Password" name="password"
                                               class="login_form_input" required>
                                        <button type="submit" class="btn login_modal_btn">Login</button>
                                        <div style="text-align: center;margin-left: 30px;line-height:9px">
                                            <p style="font-size: 14px;float:left">New Customer?<a
                                                    class="nav-link login_footer_text"
                                                    href="{{ url('customer/register') }}">Create Your Account</a>
                                            </p>
                                            <p style="font-size: 14px;float:left;margin-left: 10px;">Lost
                                                password?<a class="nav-link login_footer_text" href="#"
                                                            data-target="#pwdModal" data-toggle="modal">Recover password</a>
                                            </p>

                                            <div class="login_wrapper">
                                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"><a
                                                        href="{{ url('customer/facebook') }}"
                                                        class="btn btn-primary facebook">
                                                        <span>Login with
                                                            Facebook</span> <i class="fa fa-facebook"
                                                                               aria-hidden="true"></i> </a>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12"><a
                                                        href="{{ url('customer/google') }}"
                                                        class="btn btn-primary google-plus">
                                                        Login with Google <i class="fa fa-google-plus"></i> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>




                                <div class="toggle_search fright"><i class="fa fa-search" aria-hidden="true"></i></div>
                                <div class="h-search-form-field">
                                    <form role="search" method="get" id="search-form" class="search-form" action="#">
                                        <input type="search" class="search-field" placeholder="Enter keyword..." value="" name="s">
                                        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>

                            </div>
                            <div id="site-navigation" class="main-navigation fleft">
                                <ul id="primary-menu" class="menu">
                                    <li><a href="/">Home</a>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="/about">About Us</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1738"><a href="/about">Background</a></li>
                                            <li class="menu-item-1745"><a href="/visionMission">Vision & Mission</a></li>
                                            <li class="menu-item-1742"><a href="/OrganisationChart">Organisation Chart</a></li>
                                            <li class="menu-item-1746"><a href="/achievement">Achievement</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a >Core Business</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-1791"><a href="/">Relevant Acts & Directives</a></li>
                                            <li class="menu-item-1758"><a href="{{asset("Home/")}}service-detail.html">International Business</a></li>
                                            <li class="menu-item-1790"><a href="{{asset("Home/")}}service-detail.html">Audit &amp; Assurance</a></li>
                                            <li class="menu-item-1760"><a href="{{asset("Home/")}}service-detail.html">Taxes and Efficiency</a></li>
                                            <li class="menu-item-1761"><a href="{{asset("Home/")}}service-detail.html">Bonds &amp; Commodities</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="{{asset("Home/")}}projects.html">Cases Study</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{asset("Home/")}}projects.html">Cases Study 2 Columns</a></li>
                                            <li><a href="{{asset("Home/")}}projects-2.html">Cases Study 3 Columns</a></li>

                                            <li><a href="{{asset("Home/")}}project-detail.html">Cases Study Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="{{asset("Home/")}}blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{asset("Home/")}}blog.html">Blog List</a></li>
                                            <li><a href="{{asset("Home/")}}post.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
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
                <a href="/"><img src="{{asset("Home/images/logo-blue.png")}}" alt="Ikram"></a>
            </div>
            <div id="mmenu_toggle">
                <button></button>
            </div>
        </div>
        <div class="mmenu_wrapper">
            <div class="mobile_nav collapse">
                <ul id="menu-main-menu" class="mobile_mainmenu">
                    <li class="current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children"><a href="/">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item-home current-page_item page-item-1530 current_page_item menu-item-2017"><a href="{{asset("Home/")}}index.html" aria-current="page">Home 1</a></li>
                            <li class="menu-item-2016"><a href="{{asset("Home/")}}home-2.html">Home 2</a></li>
                            <li class="menu-item-2015"><a href="{{asset("Home/")}}home-3.html">Home 3</a></li>
                            <li class="menu-item-2059"><a href="{{asset("Home/")}}home-4.html">Home 4</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1731"><a href="{{asset("Home/")}}#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1738"><a href="{{asset("Home/")}}about.html">About Us</a></li>
                            <li class="menu-item-1745"><a href="{{asset("Home/")}}team.html">Our Team</a></li>
                            <li class="menu-item-1742"><a href="{{asset("Home/")}}how-it-work.html">How It Work</a></li>
                            <li class="menu-item-1746"><a href="{{asset("Home/")}}testimonials.html">Testimonials</a></li>
                            <li class="menu-item-1757"><a href="{{asset("Home/")}}services.html">Services Box</a></li>
                            <li class="menu-item-1744"><a href="{{asset("Home/")}}services-icon.html">Icon Box</a></li>
                            <li class="menu-item-1740"><a href="{{asset("Home/")}}career.html">Career</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1789"><a href="{{asset("Home/")}}services.html">Services</a>
                        <ul class="sub-menu">
                            <li class="menu-item-1791"><a href="{{asset("Home/")}}service-detail.html">Financial Consulting</a></li>
                            <li class="menu-item-1758"><a href="{{asset("Home/")}}service-detail.html">International Business</a></li>
                            <li class="menu-item-1790"><a href="{{asset("Home/")}}service-detail.html">Audit &amp; Assurance</a></li>
                            <li class="menu-item-1760"><a href="{{asset("Home/")}}service-detail.html">Taxes and Efficiency</a></li>
                            <li class="menu-item-1761"><a href="{{asset("Home/")}}service-detail.html">Bonds &amp; Commodities</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="{{asset("Home/")}}projects.html">Cases Study</a>
                        <ul class="sub-menu">
                            <li><a href="/projects">Cases Study 2 Columns</a></li>
                            <li><a href="{{asset("Home/")}}projects-2.html">Cases Study 3 Columns</a></li>

                            <li><a href="{{asset("Home/")}}project-detail.html">Cases Study Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="{{asset("Home/")}}blog.html">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="/blog">Blog List</a></li>
                            <li><a href="/post">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- #site-header -->
