<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    private static $about;

    // public static function aboutStore($request)
    // {
    //     self::$about = new About();
    //     self::$about->description = $request->description;
    //     self::$about->save();
    // }

    public static function aboutUpdate($request, $id)
    {
        self::$about = About::find($id); 
        self::$about->description = $request->description;
        self::$about->save();
    }
}
