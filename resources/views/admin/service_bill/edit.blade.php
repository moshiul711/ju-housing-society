@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Payment Status</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Payment </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Status Update</li>
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
                            <form action="{{ route('bill.update',$bill->id) }}" method="post" class="login100-form validate-form">
                                @csrf
                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Plot No. : {{ $bill->teacher->plot_no }}</label>
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Membership No. : {{ $bill->teacher->member_no }}</label>
                                </div>
                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Member Name : {{ $bill->teacher->name }}</label>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Total Charge : </label>
                                    <input type="text" id="total" value="{{ $bill->total_charge }}" class="form-control input100" readonly>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Paid Amount : </label>
                                    <input type="number" id="paid" name="paid_amount" value="{{ $bill->paid_amount }}" placeholder="0" min="0" max="{{ $bill->total_charge }}" class="form-control input100">
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Payment Medium  : </label>
                                    <select name="payment_medium" class="form-control input100" id="" required>
                                        <option value="">Select Payment Medium</option>
                                        <option value="Cash">Cash</option>
                                        <option value="Cheque">Cheque</option>
                                        <option value="Pay Order">Pay Order</option>
                                        <option value="DD">DD</option>
                                    </select>
                                </div>

                                <div class="wrap-input100 validate-input">
                                    <label for="" class=""> Service Status  : </label>
                                    <select name="payment_status" class="form-control input100" id="" required>
                                        <option value="">Select Service Charge Status</option>
                                        <option value="Paid">Paid</option>
                                        <option value="Due">Due</option>
                                    </select>
                                </div>

                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn btn-primary">
                                        Update Status
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection