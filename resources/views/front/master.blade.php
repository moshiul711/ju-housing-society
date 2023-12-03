<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>Diversify</title>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="{{ asset('/') }}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/animations.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/fonts.css">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/shop.css" class="color-switcher-link">
    <script src="{{ asset('/') }}front/js/vendor/modernizr-2.6.2.min.js"></script>
    <!--[if lt IE 9]>
    <script src="{{ asset('/') }}front/js/vendor/html5shiv.min.js"></script>
    <script src="{{ asset('/') }}front/js/vendor/respond.min.js"></script>
    <script src="{{ asset('/') }}front/js/vendor/jquery-1.12.4.min.js"></script>
    <![endif]-->
</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->
<div class="preloader">
    <div class="preloader_image"></div>
</div>

<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
    <div id="box_wrapper">
        <!-- template sections -->
        <section class="page_topline ds columns_margin_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="{{ asset('/') }}front/img/banner.jpg" alt="Banner Image">
                    </div>
                </div>
            </div>
        </section>
        <header class="page_header header_white toggler_xs_right columns_margin_0">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 display_table">
                        <div class="header_left_logo display_table_cell"> <a href="index-2.html" class="logo logo_with_text">
                                <img src="{{ asset('/') }}front/images/logo.png" alt="">
                                <span class="logo_text">
                            Diversify
                            <small class="highlight4">lgbt community center</small>
                        </span>
                            </a> </div>
                        <div class="header_mainmenu display_table_cell text-center">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active"> <a href="index.html">Home</a></li>
                                    <li> <a href="about.html">About</a></li>
                                    <!-- eof pages -->
                                    <li> <a href="#">Community Services</a>
                                        <ul>
                                            <li> <a href="services.html">Services</a> </li>
                                            <li> <a href="service-single.html">Single Service</a> </li>
                                        </ul>
                                    </li>

                                    <!-- gallery -->
                                    <li> <a href="gallery-regular.html">Gallery</a>
                                        <ul>
                                            <!-- Gallery regular -->
                                            <li> <a href="gallery-regular.html">Photos</a></li>
                                            <!-- eof Gallery regular -->
                                            <!-- Gallery full width -->
                                            <li> <a href="gallery-fullwidth.html">Videos</a></li>
                                            <!-- eof Gallery full width -->
                                        </ul>
                                    </li>
                                    <!-- eof Gallery -->
                                    <!-- blog -->
                                    <li> <a href="blog-right.html">Payment</a></li>
                                    <!-- eof blog -->

                                    <!-- Forms -->
                                    <li> <a href="blog-right.html">Forms</a></li>
                                    <!-- eof Forms -->

                                    <!-- Notice/News -->
                                    <li> <a href="blog-right.html">Notice/News</a></li>
                                    <!-- eof Notice/News -->

                                    <!-- contacts -->
                                    <li> <a href="contact.html">Contacts</a></li>
                                    <!-- eof contacts -->
                                </ul>
                            </nav>
                            <!-- eof main nav -->
                            <!-- header toggler --><span class="toggle_menu"><span></span></span>
                        </div>
                        {{--<div class="header_right_buttons display_table_cell text-right hidden-xs"> <a href="donate.html" class="theme_button color2 margin_0">Donate us now!</a> </div>--}}
                    </div>
                </div>
            </div>
        </header>
        <section class="intro_section page_mainslider ds all-scr-cover bottom-overlap-teasers">
            <div class="flexslider" data-dots="true" data-nav="true">
                <ul class="slides">
                    <li>
                        <div class="slide-image-wrap"> <img src="{{ asset('/') }}front/images/slide01.jpg" alt="" /> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer" data-animation="fadeInRight"> LGBT Community Center </div>
                                            <div class="intro-layer" data-animation="fadeInLeft">
                                                <h2> <span class="highlight3">Become The Change</span><br> You Want To See </h2>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInRight">
                                                <p class="thin"><em>Details on the huge Calvin Sandoval celebration coming to Hillcrest on February 27, 2018</em></p>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInUp">
                                                <div class="slide_buttons"> <a href="contact.html" class="theme_button color1 min_width_button">Be Proud!</a> </div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                    <li>
                        <div class="slide-image-wrap"> <img src="{{ asset('/') }}front/images/slide02.jpg" alt="" /> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer" data-animation="fadeInRight"> LGBT Community Center </div>
                                            <div class="intro-layer" data-animation="fadeInLeft">
                                                <h2> <span class="highlight3">Become The Change</span><br> You Want To See </h2>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInRight">
                                                <p class="thin"><em>Details on the huge Calvin Sandoval celebration coming to Hillcrest on February 27, 2018</em></p>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInUp">
                                                <div class="slide_buttons"> <a href="contact.html" class="theme_button color1 min_width_button">Be Proud!</a> </div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                    <li>
                        <div class="slide-image-wrap"> <img src="{{ asset('/') }}front/images/slide03.jpg" alt="" /> </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <div class="slide_description_wrapper">
                                        <div class="slide_description">
                                            <div class="intro-layer" data-animation="fadeInRight"> LGBT Community Center </div>
                                            <div class="intro-layer" data-animation="fadeInLeft">
                                                <h2> <span class="highlight3">Become The Change</span><br> You Want To See </h2>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInRight">
                                                <p class="thin"><em>Details on the huge Calvin Sandoval celebration coming to Hillcrest on February 27, 2018</em></p>
                                            </div>
                                            <div class="intro-layer" data-animation="fadeInUp">
                                                <div class="slide_buttons"> <a href="contact.html" class="theme_button color1 min_width_button">Be Proud!</a> </div>
                                            </div>
                                        </div>
                                        <!-- eof .slide_description -->
                                    </div>
                                    <!-- eof .slide_description_wrapper -->
                                </div>
                                <!-- eof .col-* -->
                            </div>
                            <!-- eof .row -->
                        </div>
                        <!-- eof .container -->
                    </li>
                </ul>
            </div>
            <!-- eof flexslider -->
        </section>
        <section id="services" class="ls section_intro_overlap columns_padding_0 columns_margin_0 container_padding_0">
            <div class="container-fluid">
                <div class="row flex-wrap v-center-content">
                    <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                        <div class="teaser main_bg_color transp with_padding big-padding margin_0">
                            <div class="media xxs-media-left">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-twitter highlight" aria-hidden="true"></i> </div>
                                </div>
                                <div class="media-body media-middle">
                                    <h4><a href="#0">Senior Service</a></h4>
                                    <p>Tri-tip short loin andouille corned beef pork loin tri-tip.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                        <div class="teaser main_bg_color2 transp with_padding big-padding margin_0">
                            <div class="media xxs-media-left">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-rocket highlight2" aria-hidden="true"></i> </div>
                                </div>
                                <div class="media-body media-middle">
                                    <h4><a href="#0">Youth Service</a></h4>
                                    <p>Bresaola meatloaf tongue pastra pastrami chuck.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                        <div class="teaser main_bg_color3 transp with_padding big-padding margin_0">
                            <div class="media xxs-media-left">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-users highlight3" aria-hidden="true"></i> </div>
                                </div>
                                <div class="media-body media-middle">
                                    <h4><a href="#0">Family Service</a></h4>
                                    <p>Tail doner chicken bacon. Landja sausage alcatra bacon.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-xs-12 to_animate" data-animation="fadeInUp">
                        <div class="teaser main_bg_color4 transp with_padding big-padding margin_0">
                            <div class="media xxs-media-left">
                                <div class="media-left media-middle">
                                    <div class="teaser_icon size_small round light_bg_color thick_border_icon big_wrapper"> <i class="fa fa-briefcase highlight4" aria-hidden="true"></i> </div>
                                </div>
                                <div class="media-body media-middle">
                                    <h4><a href="#0">Legal Assistance</a></h4>
                                    <p>Pork sirloin corned beef landjaer brisket hamburger.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="ls section_padding_top_110 columns_padding_30">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 to_animate" data-animation="fadeInUp" data-delay="600">
                        <div class="embed-responsive embed-responsive-3by2"> <a href="https://www.youtube.com/embed/xKxrkht7CpY" class="embed-placeholder">
                                <img src="{{ asset('/') }}front/images/gallery/01.jpg" alt="">
                            </a> </div>
                    </div>
                    <div class="col-md-6 col-md-pull-6 to_animate" data-animation="fadeInRight" data-delay="300">
                        <h2 class="section_header color4"> What is Diversify </h2>
                        <p class="section-excerpt grey">The Center is committed to a policy of non-discrimination in employment and in the provision of all services.</p>
                        <p>The mission of The Diversify LGBT Community Center is to enhance and sustain the health and well-being of the lesbian, gay, bisexual, transgender and HIV communities by providing activities, programs and services that create community.Empower community
                            members; provide essential resources; advocate for civil and human rights; and embrace, promote and support our cultural diversity. <a href="service-single.html#tester" class="more-link">read more</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact" class="ls section_padding_top_100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 bottommargin_0 to_animate" data-animation="fadeInUp">
                        <div class="ds bg_teaser with_padding big-padding"> <img src="{{ asset('/') }}front/images/help-form.jpg" alt="">
                            <div class="row columns_padding_30">
                                <div class="col-xs-12 col-sm-9 col-md-7 col-lg-6 col-sm-offset-3 col-md-offset-5 col-lg-offset-6">
                                    <h2 class="section_header color3">Do You Need Help?</h2>
                                    <p class="bottommargin_0">Contact us and we help you to solve any of your problem.</p>
                                    <form class="contact-form row columns_padding_10" method="post" action="https://html.modernwebtemplates.com/diversify/">
                                        <div class="col-sm-6">
                                            <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name*"> </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address*"> </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group bottommargin_0"> <label for="message">Message</label> <textarea aria-required="true" rows="4" cols="45" name="message" id="message" class="form-control" placeholder="Your Message..."></textarea> </div>
                                        </div>
                                        <div class="col-sm-12 bottommargin_0">
                                            <div class="contact-form-submit topmargin_10"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color3 min_width_button margin_0">Send now</button> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="team" class="ls section_padding_top_90">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 bottommargin_0 to_animate" data-animation="fadeInUp">
                        <h2 class="section_header color">Leaders of Our Community</h2>
                        <div class="owl-carousel loop-colors topmargin_40" data-dots="false" data-nav="true" data-responsive-lg="3">
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/01.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Adeline Barnett</a> </h3> <span class="small-text highlight">leader</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/02.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Elva Chandler</a> </h3> <span class="small-text highlight">assistant</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/03.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Owen Guzman</a> </h3> <span class="small-text highlight">assistant</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/04.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Mae Alvarez</a> </h3> <span class="small-text highlight">leader</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/05.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Elnora Edwards</a> </h3> <span class="small-text highlight">leader</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                            <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                <div class="item-media"> <img src="{{ asset('/') }}front/images/team/06.jpg" alt=""> </div>
                                <div class="item-content">
                                    <header class="entry-header">
                                        <h3 class="entry-title small bottommargin_0"> <a href="team-single.html">Addie Mack</a> </h3> <span class="small-text highlight">assistant</span> </header>
                                    <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="events" class="ls section_padding_top_110">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 bottommargin_0 to_animate" data-animation="fadeInUp">
                        <div class="row masonry-feed columns_padding_1">
                            <div class="col-xs-12 col-md-3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="vertical-item content-absolute text-center ds">
                                            <div class="item-media"> <img src="{{ asset('/') }}front/images/gallery/02.jpg" alt=""> </div>
                                            <div class="item-content darken_gradient">
                                                <h3 class="entry-title"> <a href="gallery-single.html">Special at Crest Cafe</a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="vertical-item content-absolute text-center ds">
                                            <div class="item-media"> <img src="{{ asset('/') }}front/images/gallery/03.jpg" alt=""> </div>
                                            <div class="item-content darken_gradient">
                                                <h3 class="entry-title"> <a href="gallery-single.html">Karaoke at Flicks</a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="vertical-item closest-event content-absolute text-center ds">
                                    <div class="item-media"> <img src="{{ asset('/') }}front/images/gallery/04.jpg" alt=""> </div>
                                    <div class="item-content darken_gradient">
                                        <!-- <div id="comingsoon-countdown" data-count-to="March 6, 2018 15:00:00 GMT-05:00" data-format="DHM"></div> -->
                                        <div id="comingsoon-countdown" data-format="DHMS"></div>
                                        <h3 class="entry-title"> <a href="gallery-single.html">Tuesday All-Day Happy Hour</a> </h3>
                                        <div class="entry-meta inline-content"> <span>
										<i class="fa fa-map-marker highlight4 rightpadding_5" aria-hidden="true"></i>
										229 Verna Viaduct, new york
									</span> <span>
										<i class="fa fa-clock-o highlight4 rightpadding_5" aria-hidden="true"></i>
										2:00 pm to 2:00 am
									</span> </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-3">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="vertical-item content-absolute text-center ds">
                                            <div class="item-media"> <img src="{{ asset('/') }}front/images/gallery/05.jpg" alt=""> </div>
                                            <div class="item-content darken_gradient">
                                                <h3 class="entry-title"> <a href="gallery-single.html">Tuesdays at San Diego Eagle</a> </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-12">
                                        <div class="vertical-item content-absolute text-center ds">
                                            <div class="item-media"> <img src="{{ asset('/') }}front/images/gallery/06.jpg" alt=""> </div>
                                            <div class="item-content darken_gradient">
                                                <h3 class="entry-title"> <a href="gallery-single.html">Turnback Tuesdays at Lips</a> </h3>
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
        <section id="blog" class="ls section_padding_top_90 section_padding_bottom_110">
            <div class="container">
                <div class="row flex-wrap v-center">
                    <div class="col-sm-8 to_animate" data-animation="fadeInRight">
                        <h2 class="section_header">Our Fresh Blog Posts</h2>
                    </div>
                    <div class="col-sm-4 text-right hidden-xs to_animate" data-animation="fadeInRight"> <a href="blog-full.html" class="view-more">View More</a> </div>
                    <div class="col-sm-12 topmargin_30">
                        <div class="loop-colors">
                            <article class="post format-small-image to_animate" data-animation="fadeInRight">
                                <div class="side-item side-md content-padding big-padding with_border bottom_color_border left">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="item-media entry-thumbnail"> <img src="{{ asset('/') }}front/images/gallery/07.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                            <div class="item-content">
                                                <header class="entry-header">
                                                    <h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark">Creating Spaces for Queer, Jewish Families</a> </h3>
                                                    <div class="entry-meta inline-content greylinks"> <span>
													<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-single-right.html">
														<time datetime="2017-10-03T08:50:40+00:00">
														17 jan, 2018</time>
													</a>
												</span> <span>
													<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Admin</a>
												</span> <span class="categories-links">
													<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Community</a>
												</span> </div>
                                                </header>
                                                <div class="entry-content md-content-3lines-ellipsis">
                                                    <p>In corned beef incididunt exercitation. Brisket turducken consectetur bacon short ribs tenderloin boudin dolore. Chuck pork porchetta commodo ex nisi brisket elit dolore proident alcatra esse. Alcatra pork loin sint beef. Chicken pig tail
                                                        tempor pork chop.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post format-small-image topmargin_30 to_animate" data-animation="fadeInLeft">
                                <div class="side-item side-md content-padding big-padding with_border bottom_color_border right">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="item-media entry-thumbnail"> <img src="{{ asset('/') }}front/images/gallery/08.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                            <div class="item-content">
                                                <header class="entry-header">
                                                    <h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark">Holiday Resources for LGBT, Interfaith Families</a> </h3>
                                                    <div class="entry-meta inline-content greylinks"> <span>
													<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-single-right.html">
														<time datetime="2017-10-03T08:50:40+00:00">
														17 jan, 2018</time>
													</a>
												</span> <span>
													<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Admin</a>
												</span> <span class="categories-links">
													<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Services</a>
												</span> </div>
                                                </header>
                                                <div class="entry-content md-content-3lines-ellipsis">
                                                    <p>Qui laboris ut, duis excepteur fatback boudin nostrud esse ea pork chop cupidatat cupim. Picanh landjaeger buffalo consequat jerky brisket, cupim ribeye magna beef occaecat. Venison salami pancetta t-bone ut, exercitation aliqua.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="post format-small-image topmargin_30 to_animate" data-animation="fadeInRight">
                                <div class="side-item side-md content-padding big-padding with_border bottom_color_border left">
                                    <div class="row">
                                        <div class="col-md-5 col-lg-4">
                                            <div class="item-media entry-thumbnail"> <img src="{{ asset('/') }}front/images/gallery/09.jpg" alt=""> </div>
                                        </div>
                                        <div class="col-md-7 col-lg-8">
                                            <div class="item-content">
                                                <header class="entry-header">
                                                    <h3 class="entry-title small"> <a href="blog-single-right.html" rel="bookmark">Transgender 101. America With You</a> </h3>
                                                    <div class="entry-meta inline-content greylinks"> <span>
													<i class="fa fa-calendar highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-single-right.html">
														<time datetime="2017-10-03T08:50:40+00:00">
														17 jan, 2018</time>
													</a>
												</span> <span>
													<i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Admin</a>
												</span> <span class="categories-links">
													<i class="fa fa-tags highlight rightpadding_5" aria-hidden="true"></i>
													<a href="blog-right.html">Transgender</a>
												</span> </div>
                                                </header>
                                                <div class="entry-content md-content-3lines-ellipsis">
                                                    <p>Nostrud ham hock fatback aute tri-tip sausage doner mollit quis laboris. Jerky meatball cupim filet mignon. Prosciutto rump eu fatback andouille eiusmod strip steak. Fugiat shoulder salami chuck in mollit. Minim nulla beef ribs adipisicing.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="page_footer template_footer ds ms parallax overlay_color section_padding_top_110 section_padding_bottom_100 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div id="subscribe" class="widget widget_mailchimp with_padding cs main_color2 parallax overlay_color topmargin_0">
                            <h3 class="widget-title">Our Newsletter</h3>
                            <form class="signup" action="https://html.modernwebtemplates.com/diversify/" method="get">
                                <div class="form-group-wrap">
                                    <div class="form-group"> <label for="mailchimp" class="sr-only">Enter your email here</label> <input name="email" type="email" id="mailchimp" class="mailchimp_email form-control text-center" placeholder="Your Email Address"> </div> <button type="submit" class="theme_button color2">Subscribe now</button>										</div>
                                <div class="response"></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4 text-center">
                        <div class="widget widget_text widget_about">
                            <div class="logo logo_with_text bottommargin_10"> <img src="{{ asset('/') }}front/images/logo.png" alt=""> <span class="logo_text">
                            Diversify
                            <small class="highlight4">lgbt community center</small>
                        </span> </div>
                            <p>The mission of Our Community Center is to enhance and sustain the health and well-being of the lesbian, gay, bisexual, transgender.</p>
                            <p class="topmargin_25"> <a class="social-icon border-icon rounded-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon border-icon rounded-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon border-icon rounded-icon socicon-google"
                                                                                                                                                                                                                                                      href="#" title="Google Plus"></a> <a class="social-icon border-icon rounded-icon socicon-linkedin" href="#" title="Linkedin"></a> <a class="social-icon border-icon rounded-icon socicon-youtube" href="#" title="Youtube"></a> </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-pull-4 text-center">
                        <div class="widget widget_text">
                            <h3 class="widget-title">Our Contacts</h3>
                            <ul class="list-unstyled greylinks">
                                <li class="media"> <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i> 73 Harvey Forest Suite, New York </li>
                                <li class="media"> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 8 (800) 923 4567 (operator) </li>
                                <li class="media"> <i class="fa fa-pencil highlight rightpadding_5" aria-hidden="true"></i> <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#97f3fee1f2e5e4fef1eed7f2eff6fae7fbf2b9f4f8fa"><span class="__cf_email__" data-cfemail="43272a352631302a253a03263b222e332f266d202c2e">[email&#160;protected]</span></a> </li>
                                <li class="media"> <i class="fa fa-clock-o highlight rightpadding_5" aria-hidden="true"></i> Mon-Fri: 9:00-19:00, Sat: 10:00-17:00 </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 hidden-xs hidden-sm text-center">
                        <div class="widget widget_recent_posts">
                            <h3 class="widget-title">Recent Blogs</h3>
                            <ul class="list-unstyled greylinks">
                                <li>
                                    <p> <a href="blog-single-left.html">Leberkas beef kielbasa kevin turkey chicken alcatra. Ground round chicken.</a> </p>
                                    <div class="entry-meta inline-content greylinks"> <span>
									<i class="fa fa-calendar highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-single-right.html">
										<time datetime="2017-10-03T08:50:40+00:00">
										17 jan, 2018</time>
									</a>
								</span> <span>
									<i class="fa fa-user highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Admin</a>
								</span> <span class="categories-links">
									<i class="fa fa-tags highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">lgbt</a>
								</span> </div>
                                </li>
                                <li>
                                    <p> <a href="blog-single-left.html">Ball tip leberkas salami jowl ham pork  tri-tip tail.</a> </p>
                                    <div class="entry-meta inline-content greylinks"> <span>
									<i class="fa fa-calendar highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-single-right.html">
										<time datetime="2017-10-03T08:50:40+00:00">
										17 jan, 2018</time>
									</a>
								</span> <span>
									<i class="fa fa-user highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Admin</a>
								</span> <span class="categories-links">
									<i class="fa fa-tags highlight3 rightpadding_5" aria-hidden="true"></i>
									<a href="blog-right.html">Serivces</a>
								</span> </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <section class="ds ms parallax page_copyright overlay_color section_padding_top_30 section_padding_bottom_30">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <p>&copy; Copyright {{ date('Y') }}. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
<script data-cfasync="false" src="{{ asset('/') }}front/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">

</script><script src="{{ asset('/') }}front/js/compressed.js"></script>
<script src="{{ asset('/') }}front/js/selectize.min.js"></script>
<script src="{{ asset('/') }}front/js/main.js"></script>
{{--<script src="{{ asset('/') }}front/js/switcher.js"></script>--}}
</body>

</html>