@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Members Bill Details</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Members Bill Detail</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap table-hover" id="basic-datatable">
                            <thead>
                            <tr>
                                <th>##</th>
                                <th>Service Year</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>Member Name</th>
                                <th>Member No</th>
                                <th>Plot No</th>
                                <th>Charge</th>
                                <th>Paid</th>
                                <th>Due</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($service_bills as $bill)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $bill->service_year }}</td>
                                    <td>
                                        @if($bill->payment_status == 'Due')
                                            <a class="btn btn-danger">DUE</a>
                                        @else
                                            <a class="btn btn-success">Paid</a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('bill.edit',$bill->id) }}" class="btn btn-warning">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{ route('bill.invoice',$bill->id) }}" class="btn btn-purple-gradient">
                                            <i class="fa fa-book"></i>
                                        </a>
                                        <a href="{{ route('bill.print',$bill->id) }}" class="btn btn-success">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </td>
                                    <td>{{ $bill->name }}</td>
                                    <td>{{ $bill->member_no }}</td>
                                    <td>{{ $bill->plot_no }}</td>
                                    <td>{{ $bill->total_charge }}</td>
                                    <td>{{ $bill->paid_amount }}</td>
                                    <td>{{ $bill->due_amount }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection