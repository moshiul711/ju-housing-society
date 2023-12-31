<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPaymentStatus extends Model
{
    use HasFactory;
    public static $teachers,$payment_status, $service;
    public static function storePaymentStatus($service_id)
    {
        self::$service = ServiceDetail::find($service_id);
        self::$teachers = Teacher::all();
        foreach (self::$teachers as $teacher)
        {
            self::$payment_status = new TeacherPaymentStatus();
            self::$payment_status->service_detail_id = self::$service->id;
            self::$payment_status->teacher_id = $teacher->id;
            self::$payment_status->total_charge = self::$service->total;
//            self::$payment_status->paid_amount = $teacher->id;
//            self::$payment_status->due_amount = $teacher->id;
            self::$payment_status->save();
        }
    }

    public static function updatePaymentStatus($request,$id)
    {
        self::$payment_status = TeacherPaymentStatus::find($id);
        self::$payment_status->payment_status = $request->payment_status;
        self::$payment_status->paid_amount = $request->paid_amount;
        self::$payment_status->late_amount = $request->late_amount;
        self::$payment_status->payment_medium = $request->payment_medium;
        self::$payment_status->payment_date = date('d-m-Y');
        self::$payment_status->total_charge = self::$payment_status->total_charge + $request->late_amount;
        self::$payment_status->due_amount = self::$payment_status->total_charge - $request->paid_amount;
        self::$payment_status->save();
    }

    public function service()
    {
        return $this->belongsTo(ServiceDetail::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
