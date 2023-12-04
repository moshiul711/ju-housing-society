@extends('front.master')


@section('main-content')

    <section class="section_padding_top_50 section_padding_bottom_50 columns_padding_25">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="width: 50%; margin: auto">
                        <form action="{{ route('user.login') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="form-control btn-info">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection