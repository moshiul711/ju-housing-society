@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Service</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">
                    <form action="{{ route('service.update',$service->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail2">Service Name</label>
                            <input type="text" name="name" value="{{ $service->name }}" class="form-control" id="exampleInputEmail2" placeholder="Enter Service Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Service Description</label>
                            <textarea class="form-control"  id="summernote" name="description" placeholder="Service Description">{{ $service->description }}</textarea>           
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Service</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection