@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="isotope_container isotope row masonry-layout columns_margin_bottom_20" data-filters=".isotope_filters">
                        @foreach($images as $image)
                        <div class="isotope-item col-lg-4 col-md-6 col-sm-12 category-{{ $image->id }}">
                            <div class="vertical-item gallery-item content-absolute text-center ds">
                                <div class="item-media"> <img src="{{ asset($image->image) }}" alt="">
                                    <div class="media-links">
                                        <div class="links-wrap"> <a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="{{ asset($image->image) }}"></a> </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h4> <a href="gallery-single.html">{{ $image->title }}</a> </h4>
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

