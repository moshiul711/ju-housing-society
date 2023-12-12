@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Service Details</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Service Details</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row row-sm">
        <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
            <div class="card box-shadow-0">
                <div class="card-body">

                    <form class="form-horizontal" action="{{ route('service.details.update',$service_detail->id) }}" method="post">
                        @csrf
                        <div class="row">
                            <label for="" class="col-md-2"> Membership Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->membership }}" name="membership" class="form-control" id="inputName" placeholder="Membership Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Share Certificate Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->share_certificate }}" name="share_certificate" class="form-control" id="inputName" placeholder="Share Certificate Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Land Value : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->land_value }}" name="land_value" class="form-control" id="inputName" placeholder="Land Value">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Development Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->development }}" name="development" class="form-control" id="inputName" placeholder="Development Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Electric Line Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->electric_line }}" name="electric_line" class="form-control" id="inputName" placeholder="Electric Line Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Savings Deposit Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->savings_deposit }}" name="savings_deposit" class="form-control" id="inputName" placeholder="Savings Deposit Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Administration Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->administration }}" name="administration" class="form-control" id="inputName" placeholder="Administration Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Plot Transfer Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->plot_transfer }}" name="plot_transfer" class="form-control" id="inputName" placeholder="Plot Transfer Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Garbage Bill : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->garbage }}" name="garbage" class="form-control" id="inputName" placeholder="Garbage Bill">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Employee Welfare Trust : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->employee_welfare }}" name="employee_welfare" class="form-control" id="inputName" placeholder="Employee Welfare Trust">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Late Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->late_fees }}" name="late_fees" class="form-control" id="inputName" placeholder="Late Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Service Charge : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->service }}" name="service" class="form-control" id="inputName" placeholder="Service Charge">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Others Bill : </label>
                            <div class="form-group col-md-10">
                                <input type="number" value="{{ $service_detail->others }}" name="others" class="form-control" id="inputName" placeholder="Others Bill">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"></label>
                            <div class="form-group col-md-10">
                                <button style="display: block; width: 100%;" type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection