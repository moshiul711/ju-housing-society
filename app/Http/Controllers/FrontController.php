<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public $services,$about;
    public function index()
    {
        return view('front.home.index');
    }

    public function contact()
    {
        return view('front.home.contact');
    }

    public function about()
    {
        return view('front.home.about');
    }

    public function photo()
    {
        return view('front.home.photo');
    }

    public function forms()
    {
        return view('front.home.forms');
    }

    public function services()
    {
        $this->services = Service::all();
        return view('front.home.services',['services'=>$this->services]);
    }

}
