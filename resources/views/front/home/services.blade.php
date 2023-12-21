@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Community Services:</h3>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs color2" role="tablist">
                        @foreach ($services as $service)
                        <li  class={{ $service->id == 1 ? "active" :'' }}><a href="#tab{{ $service->id }}" role="tab" data-toggle="tab"></i> {{ $service->name }}</a></li>
                        @endforeach
                    
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content top-color-border color2">
                        @foreach ($services as $service)
                        <div class="tab-pane fade active" id="tab{{ $service->id }}">
                            {!! $service->description !!}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

