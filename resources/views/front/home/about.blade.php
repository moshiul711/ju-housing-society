@extends('front.master')

@section('main-content')
    <section id="about" class="ls section_padding_top_110 columns_padding_30">
        <div class="container">
            <div class="row">
                <div class="col-md-4" data-animation="fadeInUp" data-delay="600">
                    <div class="embed-responsive embed-responsive-3by2"> <a href="https://www.youtube.com/embed/xKxrkht7CpY" class="embed-placeholder">
                            <img src="{{ asset('/') }}front/images/gallery/01.jpg" alt="">
                        </a> </div>
                </div>
                <div class="col-md-8" data-animation="fadeInRight" data-delay="300">
                    <h2 class="section_header color4"> What is Our Co-Operative Housing Society </h2>
                    @foreach ($abouts as $about)
                    <p class="section-excerpt grey">
                        {!! $about->description !!}
                    </p>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection