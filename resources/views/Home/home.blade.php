@extends('Home.layouts.master')

@section('content')

    <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
        <div id="revolution-slider" class="rev_slider fullscreenbanner">
            <ul>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{asset("Home/images/slider/1.jpg")}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE CONSULTAX</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['-55','-55','-55','-55']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>Financial Consulting For Your Business</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['60','60','60','60']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="#">GET QUOTE</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{asset("Home/images/slider/2.jpg")}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE CONSULTAX</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['-55','-55','-55','-55']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>Finance Focus Road To Success </p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['60','60','60','60']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="#">GET QUOTE</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{asset("Home/images/slider/3.jpg")}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE CONSULTAX</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-light bolder" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['-55','-55','-55','-55']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>Help You To Grow Your Business</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0']" data-y="center" data-voffset="['60','60','60','60']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="#">GET QUOTE</a>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <section class="wpb_row row-fluid row-o-equal-height row-o-content-top row-flex relative">
        <div class="container">
            <div class="row">
                <div class="top-120 wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-top row-flex">
                                <div class="wpb_column column_container col-sm-12 col-md-4 col-has-fill bg-why-choose">
                                    <div class="column-inner"></div>
                                </div>
                                <div class="wpb_column column_container col-sm-12 col-md-8 col-has-fill bg-light">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element padding-box-3">
                                                <div class="wpb_wrapper">
                                                    <div class="section-head ">
                                                        <h6>OUR FEATURED</h6>
                                                        <h2 class="section-title">Why choose us?</h2>
                                                    </div>
                                                    <div class="gaps"></div>
                                                    <p>Roncus eu id tristique sollicitudin euismod vestibulum non lectus, senectus conub purusnatoque neque ullamcorper cubilia faucibus, ac eget ultrices hab aliquam molestie. Duis pulvinar ultricies accumsan tortor platea.</p>
                                                    <div class="three-boxes">
                                                        <div class="simple-box">
                                                            <div class="inner box-shadow-hover">
                                                                <p><i class="ion-ios-bulb">bulb</i></p>
                                                                <h6>We Innovate</h6>
                                                            </div>
                                                        </div>
                                                        <div class="simple-box">
                                                            <div class="inner box-shadow-hover">
                                                                <p><i class="ion-md-rocket">rocket</i></p>
                                                                <h6>Performance</h6>
                                                            </div>
                                                        </div>
                                                        <div class="simple-box">
                                                            <div class="inner box-shadow-hover">
                                                                <p><i class="ion-ios-apps">apps</i></p>
                                                                <h6>Responsive</h6>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>OUR SERVICES</span></h6>
                                <h2 class="section-title">What we bring to you</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="services.html">All services</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-umbrella ion-logo-umbrella"></i>
                                <div class="content-box">
                                    <h4>Audit &amp; Assurance</h4>
                                    <p>Senectus accumsan malesuada cursus dapibus sem primis cubilia, per potenti fermentu massa pulvinar turpis taciti, pellentesque.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-cube ion-logo-cube"></i>
                                <div class="content-box">
                                    <h4>Financial Consulting</h4>
                                    <p>Justo luctus mus ultricies habitasse dictumst senectus habitant, primis erat mauris odio faucibus cras non interdum purus sociis.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-podium ion-logo-podium"></i>
                                <div class="content-box">
                                    <h4>Trades &amp; Stocks</h4>
                                    <p>Risus aenean ultricies integer purus sociis luctus tristique, sodales fusce ante maecenas massa cum est, ligula hac cursus.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-list-box ion-logo-list-box"></i>
                                <div class="content-box">
                                    <h4>Strategic Planning</h4>
                                    <p>Mus leo mauris nec erat ullamcorper orci nascetur, est faucibus auctor natoque tempus eu, eros condimentum et taciti rhoncus.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-cash ion-logo-cash"></i>
                                <div class="content-box">
                                    <h4>Financial Projections</h4>
                                    <p>Varius scelerisque tristique condimentum habitant dui euismod auctor lacinia maecenas cubilia eleifend erat, purus malesuada.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden md-hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box  ionic  hover-box">
                                <i class="ion-md-wallet ion-logo-wallet"></i>
                                <div class="content-box">
                                    <h4>Bonds &amp; Commodities</h4>
                                    <p>Dis vel quam partur+ient et molestie at morbi vehicula mus phasellussenectus congue lacinia pulvinar turpis taciti, pellentesque.</p>
                                    <a class="link-box pagelink" href="service-detail.html" target="_self">Read more</a> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd support-section parallax row-has-fill row-o-equal-height row-o-content-middle row-flex">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-8">
                    <div class="column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="mobile-white wpb_column column_container col-sm-12 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>SUPPORT</span></h6>
                                <h2 class="section-title">Request a Free Call Back</h2>
                            </div>

                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <p>Provide discussion information and we’ll get back to you as soon as possible</p>

                                </div>
                            </div>
                            <div role="form" class="wpcf7">
                                <div class="screen-reader-response"></div>
                                <form action="#" method="post" class="wpcf7-form">
                                    <p>
                                            <span class="wpcf7-form-control-wrap your-email">
                                                <input type="email" name="your-email" value="" size="40" class="wpcf7-form-control" required="" placeholder="Email Address">
                                            </span>
                                        <span class="wpcf7-form-control-wrap your-phone">
                                                <input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control" required="" placeholder="Phone Number">
                                            </span>
                                        <span class="wpcf7-form-control-wrap your-service">
                                                    <select name="your-service" class="wpcf7-form-control">
                                                        <option value="Audit &amp; Assurance">Audit &amp; Assurance</option>
                                                        <option value="Financial Consulting">Financial Consulting</option>
                                                        <option value="Trades &amp; Stocks">Trades &amp; Stocks</option>
                                                        <option value="Strategic Planning">Strategic Planning</option>
                                                        <option value="Financial Projections">Financial Projections</option>
                                                    </select>
                                                </span>
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd bg-light row-has-fill row-o-equal-height row-o-content-middle row-flex">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                                <div class="padding-box-30 wpb_column column_container col-sm-12 col-md-6 col-has-fill bg-who-we">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element text-light bg-second-trans padding-box-60 font-second">
                                                <div class="wpb_wrapper">
                                                    <h3>How Can We Help?</h3>
                                                    <div class="gaps"></div>
                                                    <p class="font12 gray">Hotline 24/7</p>
                                                    <p class="semi-bold">(+917) 814 – 3527 – (+917) 814 – 3527</p>
                                                    <div class="gaps"></div>
                                                    <p class="font12 gray">Location</p>
                                                    <p class="semi-bold">307 Jesse Centers
                                                        <br> London City, England 12568</p>
                                                    <div class="gaps size-2x"></div>
                                                    <p><a class="btn" href="#">contact form</a></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-sm-12 col-md-offset-1 col-md-5 col-sm-offset-0">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="empty_space_60 lg-hidden"></div>

                                            <div class="section-head ">
                                                <h6><span>WHO WE ARE</span></h6>
                                                <h2 class="section-title">Our Mission,<br> Values and Motto</h2>
                                            </div>
                                            <div class="empty_space_12"></div>
                                            <div class="wpb_text_column wpb_content_element padd-bot-90">
                                                <div class="wpb_wrapper">
                                                    <p>A putrid, nicotine-shaded mist loomed over Beijing on Thursday after a massive sandstorm slammed into the Chinese capital bringing the latest airpocalypse to this smog-choked city.</p>

                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element padding-box-2 info-box sign-box">
                                                <div class="wpb_wrapper">
                                                    <div class="sign">
                                                        <p><img class="alignnone size-full wp-image-1087" src="images/sign-dark.png" alt=""></p>
                                                        <h5 class="text-primary">James Patterson</h5>
                                                        <p>Founder &amp; CEO</p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="empty_space_60 lg-hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>testimonials</span></h6>
                                <h2 class="section-title">What our clients say?</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"></div>

                            <div class="testi-with-nav row ">
                                <div class="col-md-8">
                                    <div class="testi-slider-2">

                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="testi-item-2">
                                                <div class="client-info">
                                                    <i class="ion-md-quote"></i>
                                                    <p class="says italic">“I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now.”</p>
                                                    <div class="f-right text-right">
                                                        <h5>Kendra Elliot</h5>
                                                        <span class="jobs font12">- from Beijing</span>
                                                    </div>
                                                    <div class="f-right stars"><img src="images/stars.png" alt=""></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="testi-nav">
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="nav-item-3">
                                                <img src="https://via.placeholder.com/110x100" class="client-img" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wpb_row row-fluid section-padd-bot">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-8">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="row wpb_row inner row-fluid">
                                <div class="wpb_column column_container col-sm-12 col-md-8">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="section-head ">
                                                <h6><span>our blog</span></h6>
                                                <h2 class="section-title">Our latest news</h2>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="wpb_column column_container col-sm-12 col-md-4">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                                <div class="wpb_wrapper">
                                                    <p><a class="pagelink gray" href="blog.html">View all posts</a></p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="empty_space_30 md-hidden sm-hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-8">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="news-slider posts-grid row" data-show="2" data-auto="true">

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Solution financial for good startup</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Solution financial for good startup</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="post.html">
                                                    <img src="https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
                                                        <span class="posted-on">
                                                            <time class="entry-date">September 11, 2017</time>
                                                        </span>
                                                    <span class="posted-in">
                                                            <a href="#">Consulting</a>
                                                        </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="post.html">Why Tech Should Behave  More Like Finance</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            </div>
                            <div class="empty_space_45 lg-hidden"></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-4">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-light bg-second radius padd-box-29">
                                <div class="wpb_wrapper">
                                    <div class="section-head ">
                                        <h6>Subscribe</h6>
                                        <h3 class="section-title">Subscribe for<br> latest news</h3>
                                    </div>
                                    <p>Malesuada varius luctus urna duis placerat maecenas primis velit blandit.</p>
                                    <!-- Mailchimp for WordPress v4.5.2 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form class="mc4wp-form" method="post">
                                        <div class="mc4wp-form-fields">
                                            <div class="footer-sub">
                                                <input type="text" name="NAME" placeholder="Name" required="">
                                                <input type="email" name="EMAIL" placeholder="Email Address" required="">
                                                <input type="submit" class="btn" value="Subscribe">
                                            </div>
                                        </div>
                                    </form>
                                    <!-- / Mailchimp for WordPress Plugin -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection



