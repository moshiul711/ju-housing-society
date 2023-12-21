<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view("admin.about.index", compact("abouts"));
    }

    // public function createAbout()
    // {
    //     return view("admin.about.create");
    // }
     
    // public function storeAbout(Request $request)
    // {
    //     About::aboutStore($request);
    //     return back()->with("message","About Created Successfuly");
    // } 

    public function editAbout(Request $request,$id)
    {
        $about = About::find($id);
        return view("admin.about.edit", compact("about"));
    }

    public function updateAbout(Request $request, $id)
    {
        About::aboutUpdate($request, $id);
        return redirect('/about/manage')->with("message","Updated");
    }
}
