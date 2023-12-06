@extends('front.master')

@section('main-content')
<section class="section_padding_top_50 section_padding_bottom_50 columns_padding_25">
    <div class="container">
        <div class="row">
            <div class="col-md-2 with_border">
                <div class="widget widget_recent_posts">
                    <ul class="list-unstyled greylinks">
                        <li class="media"> <i class="fa fa-dashboard highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="{{ route('teacher.dashboard') }}" style="color: black;">Dashboard</a>
                        </li>

                        <li class="media"> <i class="fa fa-user highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="{{ route('teacher.profile') }}" style="color: black;">Profile</a>
                        </li>

                        <li class="media"> <i class="fa fa-paypal highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="" style="color: black;">Payment History</a>
                        </li>

                        <li class="media"> <i class="fa fa-group highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="" style="color: black;">User Lists</a>
                        </li>

                        <li class="media"> <i class="fa fa-newspaper-o highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="" style="color: black;">News / Events</a>
                        </li>

                        {{--<li class="media"> <i class="fa fa-phone highlight rightpadding_5" aria-hidden="true"></i> 8 (800) 923 4567 (operator) </li>--}}
                        {{--<li class="media"> <i class="fa fa-pencil highlight rightpadding_5" aria-hidden="true"></i> <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#97f3fee1f2e5e4fef1eed7f2eff6fae7fbf2b9f4f8fa"><span class="__cf_email__" data-cfemail="43272a352631302a253a03263b222e332f266d202c2e">[email&#160;protected]</span></a> </li>--}}
                        {{--<li class="media"> <i class="fa fa-clock-o highlight rightpadding_5" aria-hidden="true"></i> Mon-Fri: 9:00-19:00, Sat: 10:00-17:00 </li>--}}
                    </ul>
                </div>
            </div>

            <div class="col-md-10">
                <section class="ls section_padding_bottom_100 columns_padding_30">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-5">
                                <article class="vertical-item content-padding big-padding with_border bottom_color_border text-center">
                                    <div class="item-media"> <img src="{{ asset('/') }}front/images/team/01.jpg" alt=""> </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h1 class="entry-title small bottommargin_0"> {{ $teacher->name }} </h1> <span class="small-text highlight">{{ $teacher->role }}</span> </header>
                                        <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-7">
                                <h4>{{ $teacher->name }}</h4>
                                <p>Kielbasa pancetta sirloin tail meatball, corned beef doner shoulder cow bacon jerky leberkas. Meatball tail landjaeger, cupim alcatra pancetta biltong frankfurter picanha. Turducken pork loin tail pastrami strip steak. Sausage ground round chuck
                                    andouille, pork belly bacon ham hock picanha cow spare ribs meatball frankfurter t-bone salami.</p>
                                <p>Landjaeger burgdoggen bresaola picanha, chuck swine cow frankfurter biltong chicken leberkas brisket sausage flank pig.Brisket frankfurter ham hock sausage strip steak flank ground round ball tip, doner corned beef t-bone cow jowl bacon turkey.</p>
                                <ul class="list2 color2 checklist greylinks">
                                    <li> Lorem ipsum dolor sit amet </li>
                                    <li> Sint animi non ut sed </li>
                                    <li> Eaque blanditiis nemo </li>
                                </ul>

                                <!-- Nav tabs -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
    @endsection