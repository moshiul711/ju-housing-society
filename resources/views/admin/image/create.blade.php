@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Image</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Gallery</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Image Gallery Create</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputPassword2">Image Title</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Select Image</label>
                            <input class="form-control" type="file" multiple name="image[]">
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection