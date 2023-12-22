<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function createImage()
    {
        return view('admin.image.create');
    }
    public function storeImage(Request $request)
    {
        Photo::newOtherImage($request->file('image'),$request->title);
        return back()->with('message','Image Uploaded Successfully');
    }

    public function manageImage()
    {
        $images = Photo::all();
        return view('admin.image.index',['images'=>$images]);
    }

    public function DeleteImage($id)
    {
        $image = Photo::find($id)->delete();
        return back()->with('message','Image Deleted Successfully');
    }
}
