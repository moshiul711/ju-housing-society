@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Notice Board</h3>
                    <!-- Nav tabs -->
                    <div class="row masonry-feed columns_padding_1 padding_10">
                        @foreach($notices as $notice)
                            <div class="col-xs-12 col-md-4">
                                <div class="vertical-item closest-event content-absolute text-center ds">
                                    <div class="item-media"> <img src="{{ asset($notice->image) }}" alt=""> </div>
                                    <div class="item-content darken_gradient">
                                        <h3 class="entry-title"> <a href="">{{ $notice->title }}</a> </h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

