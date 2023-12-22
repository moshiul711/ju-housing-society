<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use App\Models\Form;
use App\Models\Notice;
use App\Models\Photo;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\About;
use Mockery\Matcher\Not;

class FrontController extends Controller
{
    public $services,$about,$images;
    public function index()
    {
        $committees = Committee::all();
        $notices = Notice::orderBy('id','desc')->get();
        return view('front.home.index',[
            'committees' => $committees,
            'notices' => $notices
        ]);
    }

    public function contact()
    {
        return view('front.home.contact');
    }

    public function about()
    {
        $this->about = About::all();
        return view('front.home.about',['abouts'=>$this->about]);
    }

    public function photo()
    {
        $this->images = Photo::orderBy('id','desc')->get();
        return view('front.home.photo',['images'=>$this->images]);
    }

    public function forms()
    {
        $forms = Form::all();
        return view('front.home.forms',['forms'=>$forms]);
    }

    public function services()
    {
        $this->services = Service::all();
        return view('front.home.services',['services'=>$this->services]);
    }

    public function committee()
    {
        $committee = Committee::all();
        return view("front.home.committee",['committees' => $committee]);
    }

    public function notice()
    {
        $notices = Notice::all();
        return view('front.home.notice',['notices'=>$notices]);
    }

}
