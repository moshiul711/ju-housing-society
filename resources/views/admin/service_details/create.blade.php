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
                
                    <form class="form-horizontal" action="{{ route('service.details.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <label for="" class="col-md-2"> Service Year : </label>
                            <div class="form-group col-md-10">
                                <select name="service_year" class="form-control" id="" required>
                                    <option value="">---Select Service Year---</option>
                                    <option value="2030">2030</option>
                                    <option value="2029">2029</option>
                                    <option value="2028">2028</option>
                                    <option value="2027">2027</option>
                                    <option value="2026">2026</option>
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                </select>
                            </div>
                            <p class="text-bold text-center text-danger">{{ session('error') }}</p>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Membership Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="membership" class="form-control" id="inputName" placeholder="Membership Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Share Certificate Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="share_certificate" class="form-control" id="inputName" placeholder="Share Certificate Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Land Value : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="land_value" class="form-control" id="inputName" placeholder="Land Value">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Development Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="development" class="form-control" id="inputName" placeholder="Development Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Electric Line Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="electric_line" class="form-control" id="inputName" placeholder="Electric Line Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Savings Deposit Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="savings_deposit" class="form-control" id="inputName" placeholder="Savings Deposit Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Administration Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="administration" class="form-control" id="inputName" placeholder="Administration Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Plot Transfer Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="plot_transfer" class="form-control" id="inputName" placeholder="Plot Transfer Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"> Garbage Bill : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="garbage" class="form-control" id="inputName" placeholder="Garbage Bill">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Employee Welfare Trust : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="employee_welfare" class="form-control" id="inputName" placeholder="Employee Welfare Trust">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Late Fees : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="late_fees" class="form-control" id="inputName" placeholder="Late Fees">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Service Charge : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="service" class="form-control" id="inputName" placeholder="Service Charge">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2">Others Bill : </label>
                            <div class="form-group col-md-10">
                                <input type="number" name="others" class="form-control" id="inputName" placeholder="Others Bill">
                            </div>
                        </div>
                        <div class="row">
                            <label for="" class="col-md-2"></label>
                            <div class="form-group col-md-10">
                                <button style="display: block; width: 100%;" type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection