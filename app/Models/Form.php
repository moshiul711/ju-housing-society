<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    use HasFactory;
    public static $form,$directory, $image, $imageName, $imageUrl;
    public static function formStore($request)
    {
        self::$imageUrl = self::getImageUrl($request);
        self::$form = new Form();
        self::$form->title = $request->title;
        self::$form->form = self::$imageUrl;
        self::$form->save();
    }

    public static function getImageUrl($request)
    {
        self::$image = $request->file('form');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/forms/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }
}
