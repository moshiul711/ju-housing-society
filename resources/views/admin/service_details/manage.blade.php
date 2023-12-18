@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Service Details</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Service Details</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
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
                                <th>Total Charge</th>
                                <th>Service Year</th>
                                <th>Membership Fees</th>
                                <th>Share Certificate Fees</th>
                                <th>Land Value</th>
                                <th>Development Fees</th>
                                <th>Electric Line Fees</th>
                                <th>Savings Deposit Fees</th>
                                <th>Administration Fees</th>
                                <th>Plot Transfer Fees</th>
                                <th>Garbage Bill</th>
                                <th>Employee Welfare Trust</th>
                                <th>Late Fees</th>
                                <th>Service Charge</th>
                                <th>Others Bill</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($service_details as $detail)
                            <tr>
                                <td>{{ number_format($detail->total_charge) }}</td>
                                <td>{{ $detail->service_year }}</td>
                                <td>{{ $detail->membership }}</td>
                                <td>{{ $detail->share_certificate }}</td>
                                <td>{{ $detail->land_value }}</td>
                                <td>{{ $detail->development }}</td>
                                <td>{{ $detail->electric_line }}</td>
                                <td>{{ $detail->savings_deposit }}</td>
                                <td>{{ $detail->administration }}</td>
                                <td>{{ $detail->plot_transfer }}</td>
                                <td>{{ $detail->garbage }}</td>
                                <td>{{ $detail->employee_welfare }}</td>
                                <td>{{ $detail->late_fees }}</td>
                                <td>{{ $detail->service }}</td>
                                <td>{{ $detail->others }}</td>
                                <td>
                                    <a href="{{ route('service.details.edit',$detail->id) }}" class="btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
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