<?php

namespace App\Http\Controllers;

use App\Models\Committee;
use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function createCommittee()
    {
        return view('admin.committee.create');
    }

    public function storeCommittee(Request $request)
    {
        Committee::committeeStore($request);
        return back()->with('message','Committee Member Added sucessfully');
    }
}
