<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    public static $otherImage, $otherImages, $directory, $image, $imageName, $imageUrl;

    public static function getImageUrl($otherImage)
    {
        self::$imageName = $otherImage->getClientOriginalName();
        self::$directory = 'upload/images/';
        $otherImage->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newOtherImage($otherImages,$title)
    {
        foreach ($otherImages as $otherImage) {
            self::$imageUrl = self::getImageUrl($otherImage);
            self::$otherImage = new Photo();
            self::$otherImage->title = $title;
            self::$otherImage->image = self::$imageUrl;
            self::$otherImage->save();
        }
    }

}
