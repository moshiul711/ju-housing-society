<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher;
    public static function teacherLogin($request)
    {
        self::$teacher = Teacher::where('phone',$request->email_phone)->orWhere('email',$request->email_phone)->first();
        return self::$teacher;
    }
}
