<?php

namespace App\Http\Controllers;

use App\Models\Notice;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function createNotice()
    {
        return view('admin.notice.create');
    }

    public function storeNotice(Request $request)
    {
        Notice::noticeStore($request);
        return back()->with('message','Created Successfully');
    }
}
