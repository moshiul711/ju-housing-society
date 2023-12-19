@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Membership</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Member</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="container-login100">
                    <div class="wrap-login100 p-0">
                        <div class="card-body">
                            <form action="{{ route('member.update',$teacher->id) }}" method="post" class="login100-form validate-form">
                                @csrf
                                <div class="wrap-input100 validate-input">
                                    <label for="" class="">Member Name : </label>
                                    <input value="{{ $teacher->name }}" type="text" class="form-control input100" name="name">
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <label for="" class="">Membership No : </label>
                                    <input value="{{ $teacher->member_no }}" type="text" class="form-control input100" name="member_no">
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <label for="" class="">Plot No : </label>
                                    <input value="{{ $teacher->plot_no }}" type="text" class="form-control input100" name="plot_no">
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <label for="" class="">Email : </label>
                                    <input value="{{ $teacher->email }}" type="text" class="form-control input100" name="email">
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <label for="" class="">Phone No : </label>
                                    <input value="{{ $teacher->phone }}" type="text" class="form-control input100" name="phone">
                                </div>

                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn-primary">
                                        Update Member
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div class="row row-sm">--}}
    {{--<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">--}}
    {{--<div class="card box-shadow-0">--}}
    {{--<div class="card-body">--}}

    {{--<form class="form-horizontal" action="{{ route('invoice.store') }}" method="post">--}}
    {{--@csrf--}}
    {{--<div class="row">--}}
    {{--<label for="col-md-2" class=""> Select Member No : </label>--}}
    {{--<select name="service_year" class="form-control col-md-3" id="">--}}
    {{--<option value="">---Select Member No---</option>--}}
    {{--@foreach($teachers as $teacher)--}}
    {{--<option value="{{ $teacher->id }}">{{ $teacher->member_no }}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}

    {{--<label for="" class="col-md-2"> Select Service Year : </label>--}}
    {{--<select name="service_year" class="form-control col-md-3" id="">--}}
    {{--<option value="">---Select Service Year---</option>--}}
    {{--@foreach($service_details as $service_detail)--}}
    {{--<option value="{{ $service_detail->id }}">{{ $service_detail->service_year }}</option>--}}
    {{--@endforeach--}}
    {{--</select>--}}

    {{--<button style="display: block; width: 100%;" type="submit" class="btn btn-primary col-md-2">Create Invoice</button>--}}

    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"> Membership Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->membership }}" name="membership" class="form-control" id="inputName" placeholder="Membership Fees" readonly>--}}
    {{--</div>--}}

    {{--<label for="" class="col-md-2"> Share Certificate Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->share_certificate }}" name="share_certificate" class="form-control" id="inputName" placeholder="Share Certificate Fees" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"> Land Value : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->land_value }}" name="land_value" class="form-control" id="inputName" placeholder="Land Value" readonly>--}}
    {{--</div>--}}
    {{--<label for="" class="col-md-2"> Development Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->development }}" name="development" class="form-control" id="inputName" placeholder="Development Fees" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"> Electric Line Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->electric_line }}" name="electric_line" class="form-control" id="inputName" placeholder="Electric Line Fees" readonly>--}}
    {{--</div>--}}

    {{--<label for="" class="col-md-2"> Savings Deposit Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->savings_deposit }}" name="savings_deposit" class="form-control" id="inputName" placeholder="Savings Deposit Fees" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"> Administration Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->administration }}" name="administration" class="form-control" id="inputName" placeholder="Administration Fees" readonly>--}}
    {{--</div>--}}

    {{--<label for="" class="col-md-2"> Plot Transfer Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->plot_transfer }}" name="plot_transfer" class="form-control" id="inputName" placeholder="Plot Transfer Fees" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"> Garbage Bill : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->garbage }}" name="garbage" class="form-control" id="inputName" placeholder="Garbage Bill" readonly>--}}
    {{--</div>--}}

    {{--<label for="" class="col-md-2">Employee Welfare Trust : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->employee_welfare }}" name="employee_welfare" class="form-control" id="inputName" placeholder="Employee Welfare Trust" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2">Late Fees : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->late_fees }}" name="late_fees" class="form-control" id="inputName" placeholder="Late Fees" readonly>--}}
    {{--</div>--}}

    {{--<label for="" class="col-md-2">Service Charge : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->service }}" name="service" class="form-control" id="inputName" placeholder="Service Charge" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2">Others Bill : </label>--}}
    {{--<div class="form-group col-md-4">--}}
    {{--<input type="number" value="{{ $service_detail->others }}" name="others" class="form-control" id="inputName" placeholder="Others Bill" readonly>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<label for="" class="col-md-2"></label>--}}
    {{--<div class="form-group col-md-10">--}}
    {{--<button style="display: block; width: 100%;" type="submit" class="btn btn-primary">Create Invoice</button>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}



@endsection