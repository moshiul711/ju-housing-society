<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    public static $service;
    public static function serviceStore($request)
    {
        self::$service = new Service;
        self::$service->name = request()->name;
        self::$service->description = request()->description;   
        self::$service->save();
    }
    public static function serviceUpdate($request,$id)
    {
        self::$service = Service::find($id);
        self::$service->name = request()->name;
        self::$service->description = request()->description;   
        self::$service->save();
    }
    public static function serviceDelete($id)
    {
        self::$service = Service::find($id);
        self::$service->delete();
    }
}
