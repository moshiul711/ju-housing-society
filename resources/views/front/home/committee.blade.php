@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_50 section_padding_bottom_100">
        <div class="container">
            <div class="row">

                    <h3>Executive Committee Member(s):</h3>
                @foreach($committees as $committee)
                <div class="col-md-4">
                        <article class="vertical-item content-padding bottom_color_border">
                            <div class="item-media"> <img src="{{ asset($committee->image) }}" alt=""> </div>
                            <div class="item-content">
                                <header class="entry-header">
                                    <h4 class="entry-title small bottommargin_0"> <a href="#">{{ $committee->name }}</a> </h4> <span class="small-text highlight">{{ $committee->role }}</span> </header>
                                <p class="member-social greylinks">
                                    {{ $committee->phone }}
                                </p>
                            </div>
                        </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

