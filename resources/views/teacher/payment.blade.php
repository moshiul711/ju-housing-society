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
                                <div class="col-sm-10">
                                    <article class="vertical-item content-padding big-padding  bottom_color_border text-center">
                                        <h4 class="text-justify">Payment History</h4>
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>#</th>

                                                    <th>Total Charge</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($histories as $history)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>

                                                    <td>{{ $history->total_charge }}</td>
                                                    <td>{{ $history->payment_status }}</td>

                                                </tr>
                                                @endforeach

                                                </tbody>

                                            </table>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection