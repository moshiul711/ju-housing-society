@extends('teacher.master')

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
                            <a href="{{ route('teacher.payment') }}" style="color: black;">Payment History</a>
                        </li>

                        <li class="media "> <i class="fa fa-group highlight rightpadding_5" aria-hidden="true"></i>
                            <a href="{{ route('teachers') }}" class="section_padding_bottom_5" style="color: black;">Member Lists</a>
                        </li>

                        {{--<li class="media"> <i class="fa fa-newspaper-o highlight rightpadding_5" aria-hidden="true"></i>--}}
                            {{--<a href="{{  }}" style="color: black;">News / Events</a>--}}
                        {{--</li>--}}

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
                                    <div class="item-media"> <img src="{{ asset($teacher->image) }}" alt=""> </div>
                                    <div class="item-content">
                                        <header class="entry-header">
                                            <h1 class="entry-title small bottommargin_0"> {{ $teacher->name }} </h1> <span class="small-text highlight">{{ $teacher->role }}</span> </header>
                                        <p class="member-social greylinks"> <a class="social-icon socicon-facebook" href="#" title="Facebook"></a> <a class="social-icon socicon-twitter" href="#" title="Twitter"></a> <a class="social-icon socicon-google" href="#" title="Google"></a> </p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-sm-7">
                                <h4>{{ $teacher->name }}</h4>
                                <p class="text-justify">
                                    He has published important papers on pollution and health risk assessment, greenhouse gas emissions, biomedical and plastic waste management, and climate change. He got a very prestigious Bangladesh Academy of Science and the World Academy of Science (BAS-TWAS) young scientist gold medal, 2013 for his outstanding contribution to national science and technology. Dr. Tareq enlisted as a Fellow (FRSC) and Charted Environmentalist (CEnv) in the Royal Chemical Society, U.K. He published more than 100 papers in refereed journals (with total citations of more than 2020 and h-index 24) and contributed several chapters in books published by international publishers like Elsevier and Springer. Dr. Tareq presented his research at many international conferences in Asia, Australia, Europe, and North America. His contribution to lignin molecular biogeochemistry was published in a book titled "Lignin Molecular Biogeochemistry: Principles and Practices" from the USA. He has also edited several special issues of high-impact international journals as a Guest Editor. Currently, he is working as a professor at the Department of Environmental Sciences, at Jahangirnagar University.
                                </p>
                                <p>Landjaeger burgdoggen bresaola picanha, chuck swine cow frankfurter biltong chicken leberkas brisket sausage flank pig.Brisket frankfurter ham hock sausage strip steak flank ground round ball tip, doner corned beef t-bone cow jowl bacon turkey.</p>
                                <ul class="list2 color2 checklist greylinks">
                                    <li>
                                        Institute: B.Sc. (Honours)
                                        Period: 1994

                                        Deaprtment of Chemistry, Jahangirnagar University, Dhaka
                                    </li>
                                    <li>
                                        Institute: M.Sc.
                                        Period: 1995

                                        Department of Chemistry, Jahangirnagar University, Dhaka
                                    </li>
                                    <li>
                                        Institute: M.S.
                                        Period: 2003

                                        Earth and Environmental Sciences, Nagoya University, Japan
                                    </li>
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