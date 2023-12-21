<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public $services, $service;

    public function createCommunityService()
    {
        return view('admin.service.create');
    }

    public function storeCommunityService(Request $request)
    {
        Service::serviceStore($request);
        return back()->with('message','Service Created Successfully');
    }

    public function manageCommunityService()   
    {
        $this->services = Service::all();
        return view('admin.service.index',['services'=> $this->services]);
    }

    public function editCommunityService($id)
    {
        $this->service = Service::findOrFail($id);
        return view('admin.service.edit',['service'=> $this->service]);
    }

    public function updateCommunityService(Request $request,$id)
    {
        Service::serviceUpdate($request,$id);
        return redirect('/service/manage')->with('message','Service Updated Successfully');
    }

    public function destroyCommunityService($id)
    {
        Service::serviceDelete($id);
        return redirect('/service/manage')->with('message','Service Deleted Successfully');
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
