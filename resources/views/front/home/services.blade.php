@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_100 section_padding_bottom_100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Community Services:</h3>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs color2" role="tablist">
                        <li class="active"><a href="#tab4" role="tab" data-toggle="tab"></i> Internet</a></li>
                        <li ><a href="#tab5" role="tab" data-toggle="tab"></i> Comfort</a></li>
                        <li><a href="#tab6" role="tab" data-toggle="tab"></i>Results</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content top-color-border color2">
                        <div class="tab-pane fade in active" id="tab4">
                            The Internet is a collection of interconnected computers, sharing data and services. A service is a program running on a computer that allows you to perform a useful activity such as:
                            browsing the World Wide Web (WWW)
                            sending and receiving email
                            downloading video and music files
                            communicating with friends and family using voice and video.
                        Many of the services supported by the Internet operate as client/servers. This allows one device (server) to provide a service to a requesting device (client):
                    
                    Figure 1
                    
                        In many smaller networks, devices operate as peers. This is where devices can behave as either client or server, depending on which services they are using. This operation is referred to as peer-to-peer, and is commonly found in home networks as it is easily configured. The mode of operation is difficult to use within larger networks, but it is often used within Internet-based file sharing services.
                    
                    Figure 2
                    2  The WWW as a service
                    
                        The WWW operates using clients and servers. Web pages are stored on servers connected to the Internet, and your PC uses a web browser acting as a client to access pages stored on the servers:
                    
                    Figure 3                        </div>
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

