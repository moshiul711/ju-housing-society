<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceDetail extends Model
{
    use HasFactory;

    public static $service;

    public static function storeServiceDetails($request)
    {
        self::$service = new ServiceDetail();
        self::$service->service_year = $request->service_year;
        self::$service->membership = $request->membership;
        self::$service->share_certificate = $request->share_certificate;
        self::$service->land_value = $request->land_value;
        self::$service->development = $request->development;
        self::$service->electric_line = $request->electric_line;
        self::$service->savings_deposit = $request->savings_deposit;
        self::$service->administration = $request->administration;
        self::$service->plot_transfer = $request->plot_transfer;
        self::$service->garbage = $request->garbage;
        self::$service->employee_welfare = $request->employee_welfare;
        self::$service->late_fees = $request->late_fees;
        self::$service->service = $request->service;
        self::$service->others = $request->others;
        self::$service->total_charge = $request->service+$request->late_fees+$request->employee_welfare+$request->garbage+$request->plot_transfer+$request->membership+$request->share_certificate+$request->land_value+$request->development+$request->electric_line+$request->savings_deposit+$request->administration+$request->others;
        self::$service->save();
        return self::$service;
    }

    public static function updateServiceDetails($request,$id)
    {
        self::$service = ServiceDetail::find($id);
        self::$service->membership = $request->membership;
        self::$service->share_certificate = $request->share_certificate;
        self::$service->land_value = $request->land_value;
        self::$service->development = $request->development;
        self::$service->electric_line = $request->electric_line;
        self::$service->savings_deposit = $request->savings_deposit;
        self::$service->administration = $request->administration;
        self::$service->plot_transfer = $request->plot_transfer;
        self::$service->garbage = $request->garbage;
        self::$service->employee_welfare = $request->employee_welfare;
        self::$service->late_fees = $request->late_fees;
        self::$service->service = $request->service;
        self::$service->others = $request->others;
        self::$service->save();
        return self::$service;
    }
}
