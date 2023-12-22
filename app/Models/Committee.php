<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Committee extends Model
{
    use HasFactory;
    public static $committee,$directory, $image, $imageName, $imageUrl;
    public static function committeeStore($request)
    {
        self::$committee = self::getImageUrl($request);
        self::$committee = new Committee();
        self::$committee->name = $request->name;
        self::$committee->role = $request->role;
        self::$committee->phone = $request->phone;
        self::$committee->image = self::$imageUrl;
        self::$committee->save();
    }

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/committee/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
}
