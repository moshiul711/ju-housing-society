<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    use HasFactory;
    public static $notice,$directory, $image, $imageName, $imageUrl;
    public static function noticeStore($request)
    {
        self::$imageUrl = self::getImageUrl($request);
        self::$notice = new Notice();
        self::$notice->title = $request->title;
        self::$notice->image = self::$imageUrl;
        self::$notice->save();
    }
    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/notice/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
}
