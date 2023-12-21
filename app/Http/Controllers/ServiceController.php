<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function createCommunityService()
    {
        return view('admin.service.create');
    }

    public function storeCommunityService(Request $request)
    {
        Service::serviceStore($request);
        return back()->with('message','Service Created Successfully');
    }

    public function createCategory()
    {
        return view('admin.category.create');
    }

    public function storeCategory(Request $request)
    {
        Category::categoryStore($request);
        return back()->with('message','Category Created Successfully');
    }
}
