@extends('front.master')

@section('main-content')
    <section class="page_breadcrumbs section_padding_top_50 section_padding_bottom_10">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb greylinks">
                        <li> <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section id="map" class="ls section_padding_top_20" data-address="Terracina, LT, Italia">
        <!-- marker description and marker icon goes here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="map_marker_description">
                        {{--<h3>Google Map Location</h3>--}}
                        {{--<p>Map description text</p>--}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.222012323009!2d90.27960418920651!3d23.867943075709398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755e9f2312a73bf%3A0xa4071590563b670c!2sAruna%20Polli%2C%20Savar!5e0!3m2!1sen!2sbd!4v1701627862277!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ls columns_padding_25 section_padding_top_50 section_padding_bottom_110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h4>Contact Form</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 to_animate" data-animation="scaleAppear">
                    <form class="contact-form columns_padding_5" method="post" action="https://html.modernwebtemplates.com/diversify/">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="name">Full Name <span class="required">*</span></label> <i class="fa fa-user highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Full Name">											</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="phone">Phone Number<span class="required">*</span></label> <i class="fa fa-phone highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Phone Number">											</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="email">Email address<span class="required">*</span></label> <i class="fa fa-envelope highlight" aria-hidden="true"></i> <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Email Address">											</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group bottommargin_0"> <label for="subject">Subject<span class="required">*</span></label> <i class="fa fa-flag highlight" aria-hidden="true"></i> <input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Subject">											</div>
                            </div>
                            <div class="col-sm-12">
                                <div class="contact-form-message form-group bottommargin_0"> <label for="message">Message</label> <i class="fa fa-comment highlight" aria-hidden="true"></i> <textarea aria-required="true" rows="3" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea> </div>
                            </div>
                            <div class="col-sm-12 bottommargin_0">
                                <div class="contact-form-submit topmargin_30"> <button type="submit" id="contact_form_submit" name="contact_submit" class="theme_button color1 margin_0">Send message</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 to_animate" data-animation="scaleAppear">
                    <ul class="list1 no-bullets no-top-border no-bottom-border">
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-shop highlight fontsize_18"></i> </div>
                                <div class="media-body">
                                    <h6 class="media-heading grey">Postal Address:</h6> PO Box 97845 Some str. 567, Los Angeles, California, United States </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-phone5 highlight fontsize_18"></i> </div>
                                <div class="media-body">
                                    <h6 class="media-heading grey">Phone:</h6> 8(800) 123-12345 </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-stack4 highlight fontsize_18"></i> </div>
                                <div class="media-body">
                                    <h6 class="media-heading grey">Fax:</h6> 8(800) 123-12345 </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="media-left"> <i class="rt-icon2-mail highlight fontsize_18"></i> </div>
                                <div class="media-body greylinks">
                                    <h6 class="media-heading grey">Email:</h6> <a href="https://html.modernwebtemplates.com/cdn-cgi/l/email-protection#3c4553494e7c515d5550125f5351"><span class="__cf_email__" data-cfemail="96e5e3e6e6f9e4e2d6eff9e3e4f8f7fbf3b8f5f9fb">[email&#160;protected]</span></a> </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection