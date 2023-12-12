<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherPaymentStatus extends Model
{
    use HasFactory;
    public static $teachers,$payment_status;
    public static function storePaymentStatus($service_id)
    {
        self::$teachers = Teacher::all();
        foreach (self::$teachers as $teacher)
        {
            self::$payment_status = new TeacherPaymentStatus();
            self::$payment_status->service_detail_id = $service_id;
            self::$payment_status->teacher_id = $teacher->id;
            self::$payment_status->save();
        }
    }

    public function service()
    {
        return $this->hasOne(ServiceDetail::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
