<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    private static $teacher,$directory, $image, $imageName, $imageUrl;

    public static function teacherCreate($request)
    {
        self::$teacher = new Teacher();
        self::$teacher->name = $request->name;
        self::$teacher->member_no = $request->member_no;
        self::$teacher->plot_no = $request->plot_no;
        self::$teacher->save();
    }

    public static function teacherLogin($request)
    {
        self::$teacher = Teacher::where('phone',$request->email_phone)->orWhere('email',$request->email_phone)->first();
        return self::$teacher;
    }
    public static function teacherProfileUpdate($request,$id,$name)
    {
        self::$teacher = Teacher::where(['id'=>$id,'name'=>$name])->first();
        self::$teacher->name = $request->name;
        self::$teacher->email = $request->email;
        self::$teacher->phone = $request->phone;
        self::$teacher->about = $request->about;
        self::$teacher->address = $request->address;

        if ($request->file('image'))
        {
            if(file_exists(self::$teacher->image))
            {
                unlink(self::$teacher->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$teacher->image;
        }
        self::$teacher->image = self::$imageUrl;
        self::$teacher->save();
        return self::$teacher;
    }
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/teacher-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
}
