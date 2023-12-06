@extends('front.master')


@section('main-content')

    <section class="section_padding_top_50 section_padding_bottom_50 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-danger padding_10">{{ Session('message') }}</p>
                    <div class="card" style="width: 50%; margin: auto">
                        <form action="{{ route('teacher.login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email_phone" placeholder="Enter Phone Number or Email" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password" required>
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="theme_button color2 margin_0" style="width: 100%">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection