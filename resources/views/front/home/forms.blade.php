@extends('front.master')

@section('main-content')
    <section class="ls page_portfolio section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                @foreach($forms as $form)
                <div class="col-sm-4">
                    <ul class="list2 color2 checklist greylinks">
                        <li>
                            <a target="_blank" href="{{ asset($form->form) }}">{{ $form->title }}</a>
                        </li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

