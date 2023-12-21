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
                        <li  class={{ $service->id == 1 ? "active" :'' }}><a href="#tab4" role="tab" data-toggle="tab"></i> {{ $service->name }}</a></li>
                        @endforeach
                    
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content top-color-border color2">
                        <div class="tab-pane fade in active" id="tab4">
                            {!! $service->description !!}
                        </div>
                        <div class="tab-pane fade" id="tab5">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, enim saepe libero iure tenetur optio nisi aliquam molestias ratione magnam ab ut quod possimus hic suscipit doloremque, deleniti ipsa quia!</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, enim saepe libero iure tenetur optio nisi aliquam molestias ratione magnam ab ut quod possimus hic suscipit doloremque, deleniti ipsa quia!</p>
                        </div>
                        <div class="tab-pane fade" id="tab6">
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis est, dolores, ex ducimus cumque iusto ipsam odit voluptatum autem error impedit obcaecati quisquam molestiae, optio porro inventore nostrum deleniti cupiditate.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis est, dolores, ex ducimus cumque iusto ipsam odit voluptatum autem error impedit obcaecati quisquam molestiae, optio porro inventore nostrum deleniti cupiditate.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

