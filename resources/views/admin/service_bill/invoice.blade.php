@extends('layouts.app')

@section('main-content')
    <div class="col-lg-12 col-md-12">
        <div class="page-header">
            <div>
                <h1 class="page-title">Payment Invoice</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Member </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                </ol>
            </div>
        </div>
    </div>
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 17px;
            line-height: 15px;
            color: #333;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
            text-align: justify;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
        .container {
            position: relative;
        }
        .containerbackground {
            margin: -10px;
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 30px;
            bottom: 0;
            z-index: -1;
            transform: rotate(330deg);
            -webkit-transform: rotate(330deg);
            color: #c6afaf;
        }
    </style>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2>Jahangirnagar Co-Operative Housing Society Limited</h2>
                                <p>Bhatpara, Post: BPATC, Savar, Dhaka-1343. Phone - 7743064</p>
                                <br>
                                Invoice No. {{ rand(1111,99999).'      ' }}       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Established : 07/03/1977, Reg. No - 55, (Amended Reg. No - 37)
                                <hr>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <div class="container">
                <div class="containerbackground">
                    @if($bill->payment_status == 'Paid')
                        <p style="color: darkgreen; text-shadow: 4px 4px 18px green;font-weight: bold">Paid</p>
                    @else
                        <p style="color: darkred; text-shadow: 4px 4px 18px red;font-weight: bold">Due</p>
                    @endif
                </div>
            </div>
            <tr class="information">

                <td colspan="2">
                    <table>
                        <tr style="font-weight: bold">
                            <td style="text-align: left">
                                Membership : {{ $bill->member_no }}
                            </td>
                            <td style="text-align: center">
                                Plot No : {{ $bill->plot_no }}
                            </td>
                            <td style="text-align: center">
                                Name : {{ $bill->name }}
                            </td>
                            <td style="text-align: right">
                                Date : {{ $bill->payment_date }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>Payment Medium</td>

                <td>Total</td>
            </tr>

            <tr class="details">
                <td>{{ $bill->payment_medium }}</td>

                <td>{{ $bill->total_charge }}</td>
            </tr>

            <tr class="heading">
                <td>Service Name</td>

                <td>Service Charge</td>
            </tr>

            <tr class="item">
                <td>Membership Fee</td>
                <td>{{ $bill->membership }}</td>
            </tr>

            <tr class="item">
                <td>Share Certificate Fee</td>
                <td>{{ $bill->share_certificate }}</td>
            </tr>

            <tr class="item">
                <td>Land Value</td>
                <td>{{ $bill->land_value }}</td>
            </tr>

            <tr class="item">
                <td>Development Cost</td>
                <td>{{ $bill->development }}</td>
            </tr>

            <tr class="item">
                <td>Electric Line Fees</td>
                <td>{{ $bill->electric_line }}</td>
            </tr>

            <tr class="item">
                <td>Savings Deposit Fees</td>
                <td>{{ $bill->savings_deposit }}</td>
            </tr>

            <tr class="item">
                <td>Administration Fees</td>
                <td>{{ $bill->administration }}</td>
            </tr>

            <tr class="item">
                <td>Plot Transfer Fees </td>
                <td>{{ $bill->plot_transfer }}</td>
            </tr>

            <tr class="item">
                <td>Garbage Bill</td>
                <td>{{ $bill->garbage }}</td>
            </tr>

            <tr class="item">
                <td>Employee Welfare Trust </td>
                <td>{{ $bill->employee_welfare }}</td>
            </tr>

            <tr class="item">
                <td>Late Fees</td>
                <td>
                    {{ $bill->late_amount }}
                </td>
            </tr>

            <tr class="item">
                <td>Service Charge</td>
                <td>{{ $bill->service }}</td>
            </tr>

            <tr class="item">
                <td>Others Bill</td>
                <td>{{ $bill->others }}</td>
            </tr>

            <tr class="heading">
                <td>Total:</td>

                <td> {{ $bill->total_charge }}</td>
            </tr>


        </table>

    </div>

@endsection
















