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
                @if(Session('message'))
                <p class="text-center text-success">{{ Session('message') }}</p>
                @endif
                <div class="col-md-10">
                    <section class="ls section_padding_bottom_50 columns_padding_30">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <article class="vertical-item content-padding big-padding text-center">
                                        <form action="{{ route('teacher.profile.update',['id'=>$teacher->id,'name'=>$teacher->name]) }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row text-left">
                                                <div class="col-md-12 form-group">
                                                    <input type="text" class="form-control" value="{{ $teacher->name }}" name="name" placeholder="Enter Name" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <input type="email" class="form-control" value="{{ $teacher->email }}" name="email" placeholder="Enter Email" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <input type="tel" class="form-control" value="{{ $teacher->phone }}" name="phone" placeholder="Enter phone" required>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea class="form-control" name="address" placeholder="Enter Address">{{ $teacher->address }}</textarea>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <textarea id="summernote" class="form-control" name="about" placeholder="About Yourself" >{!! $teacher->about !!}</textarea>
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    {{--<img src="{{ asset($teacher->image) }}" alt="">--}}
                                                    <input type="file" class="form-control" name="image">
                                                </div>

                                                <div class="col-md-12 form-group">
                                                    <button class="theme_button color2 margin_0" style="width: 100%">Update Profile</button>
                                                </div>

                                            </div>
                                        </form>
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