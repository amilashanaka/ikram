@extends('Home.layouts.master')

@section('content')

    <section id="section-slider" class="fullwidthbanner-container" aria-label="section-slider">
        <div id="revolution-slider">
            <ul>
                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="https://via.placeholder.com/1920x700" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="['0']" data-y="bottom" data-voffset="" data-width="['auto','320','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                        <img class="img-responsive md-hidden sm-hidden xs-hidden" src="https://via.placeholder.com/505x465/000000" alt="Image">
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE IKRAM QA Services Sdn Bhd</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p> independent Certification Body</p>
                    </div>
                    <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                        <p>IKRAM QA Services Sdn Bhd, referred hereinafter as IKRAM QA, is an independent Certification Body that operates a Product Certification Scheme generally for construction products</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="{{asset("Home/")}}#">GET QUOTE</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="https://via.placeholder.com/1920x700" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','380','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                        <img class="img-responsive md-hidden sm-hidden xs-hidden" src="{{asset("Home/")}}https://via.placeholder.com/505x465/000000" alt="Image">
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE IKRAM QA Services Sdn Bhd</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>Finance Focus Road To Success </p>
                    </div>
                    <div class="tp-caption tp-resizeme" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                        <p>Bugue cubilia habitasse nostra sed dui facilisi lacus varius, porttitor gravida ultrices tristique hendrerit quisque congue facilisis.</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="{{asset("Home/")}}#">GET QUOTE</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="default" data-thumb="">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{asset("Home/")}}https://via.placeholder.com/1920x700" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" />
                    <div class="tp-caption tp-resizeme" data-x="right" data-hoffset="" data-y="bottom" data-voffset="" data-width="['auto','290','auto','320']" data-transform_idle="o:1;" data-transform_in="x:550px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1000" data-responsive_offset="on">
                        <img class="img-responsive md-hidden sm-hidden xs-hidden" src="{{asset("Home/")}}https://via.placeholder.com/505x465/000000" alt="Image">
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="top" data-voffset="200" data-width="['580','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1500" data-whitespace="['nowrap','nowrap','nowrap','normal']" data-fontsize="['14','14','14','14']" data-responsive_offset="on">
                        <p>WE'RE IKRAM QA Services Sdn Bhd</p>
                    </div>
                    <div class="tp-caption tp-resizeme font-second text-second bolder" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['-45','-45','-45','-45']" data-width="['670','580','480','320']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1700" data-whitespace="['normal']" data-fontsize="['50','50','40','30']" data-lineheight="['60','60','50','40']" data-responsive_offset="on">
                        <p>Help You To Grow Your Business</p>
                    </div>
                    <div class="tp-caption tp-resizeme sh3" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="center" data-voffset="['60','60','60','60']" data-width="['580','580','480','300']" data-transform_idle="o:1;" data-whitespace="['normal','normal','normal','normal']" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="1900" data-fontsize="['16','16','14','12']" data-lineheight="['24','24','18','16']" data-responsive_offset="on">
                        <p>Gugue cubilia habitasse nostra sed dui facilisi lacus varius, porttitor gravida ultrices tristique hendrerit quisque congue facilisis.</p>
                    </div>
                    <div class="tp-caption" data-x="['left']" data-hoffset="['0','15','15','15']" data-y="bottom" data-voffset="['185','185','185','185']" data-transform_idle="o:1;" data-transform_in="x:100px;opacity:0;s:800;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-start="2100">
                        <a class="btn" href="{{asset("Home/")}}#">GET QUOTE</a>
                    </div>
                </li>

            </ul>
        </div>
    </section>

    <section class="wpb_row row-fluid top-70 row-has-fill relative bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="empty_space_70 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-medal ion-ios-medal ion-logo-medal ion-ios-medal"></i>
                                <div class="content-box">
                                    <h4>Quality Services</h4>
                                    <p>Conubia ut aliquam cub gravida sed morbi accumsa.</p>
                                </div>
                            </div>

                            <div class="empty_space_30  lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-bulb ion-ios-bulb ion-logo-bulb ion-ios-bulb"></i>
                                <div class="content-box">
                                    <h4>Valuable Ideas</h4>
                                    <p>Ante pharetra posuere blandit aliquam fusce sollicitudin.</p>
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-cash ion-ios-cash ion-logo-cash ion-ios-cash"></i>
                                <div class="content-box">
                                    <h4>Budget Friendly</h4>
                                    <p>Lacinia nisl accumsa sceleris phasellus venenatis don,</p>
                                </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="service-box icon-box box-shadow-2 ionic ">
                                <i class="ion-md-headset ion-ios-headset ion-logo-headset ion-ios-headset"></i>
                                <div class="content-box">
                                    <h4>Suport 24/7</h4>
                                    <p>Etiam sollicitudin sagittis justo at ullamcorper potenti.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpb_row row-fluid section-padd row-has-fill row-o-equal-height row-o-content-middle row-flex bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="row wpb_row inner row-fluid row-o-equal-height row-o-content-middle row-flex">
                                <div class="wpb_column column_container col-sm-12 col-md-6 col-has-fill custom-padd-1">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper"></div>
                                    </div>
                                </div>
                                <div class="bg-second wpb_column column_container col-sm-12 col-md-6">
                                    <div class="column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="empty_space_60 lg-hidden h60"><span class="empty_space_inner"></span></div>

                                            <div class="section-head padding-box-2 text-light">
                                                <h6><span>WHO WE ARE</span></h6>
                                                <h2 class="section-title">Our Mission,<br>Values and Motto</h2>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element padding-box-2 text-light">
                                                <div class="wpb_wrapper">
                                                    <p>A putrid, nicotine-shaded mist loomed over Beijing on Thursday after a massive sandstorm slammed into the Chinese capital bringing the latest airpocalypse to this smog-choked city.</p>

                                                </div>
                                            </div>

                                            <div class="wpb_text_column wpb_content_element paddtop-75 padding-box-2 info-box text-light">
                                                <div class="wpb_wrapper">
                                                    <div class="sign">
                                                        <p><img class="alignnone size-full wp-image-1087" src="{{asset("Home/")}}images/sign1.png" alt="" width="79" height="49"></p>
                                                        <h5>James Patterson</h5>
                                                        <p>Founder &amp; CEO
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="empty_space_60 lg-hidden"><span class="empty_space_inner"></span></div>
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

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="{{asset("Home/")}}services.html">All services</a></p>

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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>
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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden"><span class="empty_space_inner"></span></div>
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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                            <div class="empty_space_30 lg-hidden md-hidden"><span class="empty_space_inner"></span></div>
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
                                    <a class="link-box pagelink" href="{{asset("Home/")}}service-detail.html" target="_self">Read more</a> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpb_row row-fluid section-padd-top bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>Our Projects</span></h6>
                                <h2 class="section-title">We are the leaders</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="{{asset("Home/")}}projects.html">All projects</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpb_row row-fluid section-padd-bot row-has-fill row-full-width row-no-padding bg-light">
        <div class="row">
            <div class="wpb_column column_container col-sm-12">
                <div class="column-inner">
                    <div class="wpb_wrapper">
                        <div class="project-list-2">
                            <div class="project-slider-2 projects" data-show="1" data-auto="" data-dot="true">

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="{{asset("Home/")}}https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/156x29" alt="logo"> Contract Project: May 22, 2017
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="{{asset("Home/")}}project-detail.html">Financial Report 2019</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="{{asset("Home/")}}project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="{{asset("Home/")}}https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/156x29" alt="logo"> Contract Project: November 15, 2018
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="{{asset("Home/")}}project-detail.html">Business Growth Solutions</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="{{asset("Home/")}}project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="{{asset("Home/")}}https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/156x29" alt="logo"> Contract Project: September 14, 2017
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="{{asset("Home/")}}project-detail.html">MO Insurance Finance</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="{{asset("Home/")}}project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="project-item">

                                        <div class="slide-img"><img src="{{asset("Home/")}}https://via.placeholder.com/1170x550" alt=""></div>

                                        <div class="inner row">
                                            <div class="col-md-3">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/156x29" alt="logo"> Contract Project: April 24, 2016
                                                <div class="gaps lg-hidden"></div>
                                            </div>
                                            <div class="col-md-9">
                                                <h4><a href="{{asset("Home/")}}project-detail.html">Enterprise Loan 2016</a></h4>
                                                <p>Fames integer pretium commodo sed orci magnis euismod a, fusce felis leo habitant ridiculus auctor nisl id, cras nisi porta mus enim dapibus aenean.</p>
                                                <a class="pagelink gray" href="{{asset("Home/")}}project-detail.html">View details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="container">
                                <div class="arrows-slick">
                                    <button type="button" class="btn-left slick-arrow prev-nav"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn-right slick-arrow next-nav"><i class="fa fa-angle-right"></i></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpb_row row-fluid section-padd bg-second row-has-fill">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-6">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <h2 class="custom_heading text-light">Request a Free<br>Call Back</h2>
                            <div class="wpb_text_column wpb_content_element  text-light">
                                <div class="wpb_wrapper">
                                    <p>Provide discussion information and we’ll get back to
                                        <br> you as soon as possible</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-6">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div role="form" class="wpcf7" id="wpcf7-f1626-p1530-o1" lang="en-US" dir="ltr">
                                <div class="screen-reader-response"></div>
                                <form action="" method="post" class="wpcf7-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-name">
	                                            	<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required="" aria-invalid="false" placeholder="Your Name">
	                                            </span>
                                        </div>
                                        <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-service">
                                            		<select name="your-service" class="wpcf7-form-control wpcf7-select" aria-invalid="false">
                                            			<option value="Audit &amp; Assurance">Audit &amp; Assurance</option>
                                            			<option value="Financial Consulting">Financial Consulting</option>
                                            			<option value="Trades &amp; Stocks">Trades &amp; Stocks</option>
                                            			<option value="Strategic Planning">Strategic Planning</option>
                                            			<option value="Financial Projections">Financial Projections</option>
                                            		</select>
                                            	</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-email">
                                            		<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required="" placeholder="Email Address">
                                            	</span>
                                        </div>
                                        <div class="col-md-6">
                                            	<span class="wpcf7-form-control-wrap your-phone">
                                            		<input type="tel" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" placeholder="Phone Number">
                                            	</span>
                                        </div>
                                    </div>
                                    <p>
                                        <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit btn">
                                    </p>
                                    <div class="wpcf7-response-output wpcf7-display-none"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wpb_row row-fluid section-padd bg-light">
        <div class="container">
            <div class="row">
                <div class="wpb_column column_container col-sm-12 col-md-9">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-head ">
                                <h6><span>our blog</span></h6>
                                <h2 class="section-title">Our latest news</h2>
                            </div>

                            <div class="empty_space_30 md-hidden sm-hidden"><span class="empty_space_inner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12 col-md-3">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element text-right mobile-left">
                                <div class="wpb_wrapper">
                                    <p><a class="pagelink gray" href="{{asset("Home/")}}blog.html">View all posts</a></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column column_container col-sm-12">
                    <div class="column-inner">
                        <div class="wpb_wrapper">
                            <div class="news-slider posts-grid row" data-show="3" data-auto="true">

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Solution financial for good startup</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Why Tech Should Behave  More Like Finance</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Solution financial for good startup</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Cutting Your Restaurant’s Operations Costs</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div>
                                    <article class="news-item content-area">
                                        <div class="inner-item radius-top">
                                            <div class="thumb-image">
                                                <a href="{{asset("Home/")}}post.html">
                                                    <img src="{{asset("Home/")}}https://via.placeholder.com/770x350" alt="">
                                                </a>
                                            </div>
                                            <div class="inner-post radius-bottom">
                                                <div class="entry-meta">
										                <span class="posted-on">
										                	<time class="entry-date">September 11, 2017</time>
										                </span>
                                                    <span class="posted-in">
										                	<a href="{{asset("Home/")}}#">Consulting</a>
										                </span>
                                                </div>
                                                <h4 class="entry-title">
                                                    <a href="{{asset("Home/")}}post.html">Why Tech Should Behave  More Like Finance</a>
                                                </h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipiscing elit ad, tincidunt senectus felis platea natoque mattis....
                                                </p>
                                                <a class="post-link" href="{{asset("Home/")}}post.html">Read more</a>
                                            </div>
                                        </div>
                                    </article>
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
                                <h6><span>testimonial &amp; partner</span></h6>
                                <h2 class="section-title">What our clients says?</h2>
                            </div>

                            <div class="empty_space_30"><span class="empty_space_inner"></span></div>

                            <div class="testi-slider" data-show="3" data-arrow="true">

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{asset("Home/")}}https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>Quynh Anh<span class="font12 normal">from Hanoi</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img src="{{asset("Home/")}}images/stars.png" alt="">
                                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. Thank you !</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{asset("Home/")}}https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>Nora Roberts<span class="font12 normal">from Paris</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img width="86" height="12" src="{{asset("Home/")}}images/stars.png" class="attachment-full size-full" alt="">
                                            <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{asset("Home/")}}https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>John Doe<span class="font12 normal">from Beijing</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img width="86" height="12" src="{{asset("Home/")}}images/stars.png" alt="">
                                            <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{asset("Home/")}}https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>Quynh Anh<span class="font12 normal">from Hanoi</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img src="{{asset("Home/")}}images/stars.png" alt="">
                                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. Thank you !</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>Nora Roberts<span class="font12 normal">from Paris</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img width="86" height="12" src="{{asset("Home/")}}images/stars.png" class="attachment-full size-full" alt="">
                                            <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.</p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="testi-item box-shadow-hover">
                                        <div class="testi-head">
                                            <img width="50" height="50" src="{{asset("Home/")}}https://via.placeholder.com/50" class="client-img" alt="">
                                            <h5>John Doe<span class="font12 normal">from Beijing</span></h5>
                                        </div>
                                        <div class="line"></div>
                                        <div class="testi-content">
                                            <i class="ion-md-quote"></i>
                                            <img width="86" height="12" src="{{asset("Home/")}}images/stars.png" alt="">
                                            <p>I should be incapable of drawing a single stroke at the present moment; and yet I feel that I never was a greater artist than now. </p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="empty_space_80"><span class="empty_space_inner"></span></div>

                            <div class="partner-slider image-carousel text-center" data-show="5" data-arrow="false">

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="{{asset("Home/")}}https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <div class="partner-item text-center clearfix">
                                        <div class="inner">
                                            <div class="thumb">
                                                <img src="https://via.placeholder.com/150x30" alt="">
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


@endsection


