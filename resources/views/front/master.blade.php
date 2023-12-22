<!DOCTYPE html>
<html class="no-js">
<head>
    <title>Diversify</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

</head>

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->
{{--<div class="preloader">--}}
    {{--<div class="preloader_image"></div>--}}
{{--</div>--}}

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
                        <div class="header_left_logo display_table_cell"> <a href="{{ route('home') }}" class="logo logo_with_text">
                                <img src="{{ asset('/') }}front/images/logo.png" alt="">
                                <span class="logo_text">
                            Jahangirnagar
                            <small class="highlight4" style="color: yellow"> Co-Operative Housing Society</small>
                        </span>
                            </a> </div>
                        <div class="header_mainmenu display_table_cell text-center">
                            <!-- main nav start -->
                            <nav class="mainmenu_wrapper">
                                <ul class="mainmenu nav sf-menu">
                                    <li class="active"> <a href="{{ route('home') }}">Home</a></li>
                                    <li> <a href="{{ route('about') }}">About</a></li>
                                    <li> <a href="{{ route('services') }}">Services</a> </li>

                                    <li> <a href="{{ route('photo') }}">Gallery</a>
                                        {{--<ul>--}}
                                            {{--<li> <a href="{{ route('photo') }}">Photos</a></li>--}}
                                            {{--<li> <a href="#">Videos</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                            
                                    <li> <a href="{{ route('forms') }}">Forms</a></li>
                                    
                                    <li>
                                        <a href="#">Notice</a>
                                        <ul>
                                            <li> <a href="">News</a></li>
                                            <li> <a href="gallery-fullwidth.html">Events</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="{{ route('committee') }}">Members</a>
                                        {{--<ul>--}}
                                            {{--<li> <a href="">Executives</a></li>--}}
                                            {{--<li> <a href="gallery-fullwidth.html">Staffs</a></li>--}}
                                        {{--</ul>--}}
                                    </li>
                                    <!-- eof Notice/News -->

                                    <!-- contacts -->
                                    <li> <a href="{{ route('contact') }}">Contacts</a></li>
                                    <!-- eof contacts -->

                                    <!-- Payment -->
                                    <li>
                                        @if(!Session::get('teacher_id'))
                                        <a href="{{ route('teacher.login') }}">
                                            <button class="btn-warning">Member Login</button>
                                        </a>
                                        @else
                                        <a href="">
                                            <button class="btn-success">Welcome</button>
                                        </a>
                                            <ul>
                                                <!-- Gallery regular -->
                                                <li> <a href="{{ route('teacher.dashboard') }}">Dashboard</a></li>
                                                <!-- eof Gallery regular -->
                                                <!-- Gallery full width -->
                                                <li> <a href="{{ route('teacher.logout') }}">Logout</a></li>
                                                <!-- eof Gallery full width -->
                                            </ul>
                                        @endif
                                    </li>
                                    <!-- eof Payment -->

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


        @yield('slider')
        @yield('services')
        @yield('main-content')


        <footer class="page_footer template_footer ds ms parallax overlay_color section_padding_top_20 section_padding_bottom_50 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 col-md-push-4 text-center">
                        <div class="widget widget_text widget_about">
                            <div class="logo logo_with_text bottommargin_10"> <img src="{{ asset('/') }}front/images/logo.png" alt=""> <span class="logo_text">
                            Jahangirnagar
                            <small class="highlight4">Co-Operative Housing Society</small>
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
                            <h3 class="widget-title">Useful Links</h3>
                            <ul class="list-unstyled greylinks">
                                <li class="media"> <i class="fa fa-map-marker highlight rightpadding_5" aria-hidden="true"></i> 73 Harvey Forest Suite, New York </li>
                                <li class="media"> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 8 (800) 923 4567 (operator) </li>
                                <li class="media"> <i class="fa fa-pencil highlight rightpadding_5" aria-hidden="true"></i> <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#97f3fee1f2e5e4fef1eed7f2eff6fae7fbf2b9f4f8fa"><span class="__cf_email__" data-cfemail="43272a352631302a253a03263b222e332f266d202c2e">[email&#160;protected]</span></a> </li>
                                <li class="media"> <i class="fa fa-clock-o highlight rightpadding_5" aria-hidden="true"></i> Mon-Fri: 9:00-19:00, Sat: 10:00-17:00 </li>
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
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.7.0.js"></script>--}}
{{--<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>--}}
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
    new DataTable('#example');


</script>
{{--<script src="{{ asset('/') }}front/js/switcher.js"></script>--}}
</body>

</html>