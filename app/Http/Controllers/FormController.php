<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public $forms;
    public function index()
    {
        $this->forms = Form::all();
        return view('admin.form.index',['forms'=>$this->forms]);
    }

    public function createForm()
    {
        return view('admin.form.create');
    }

    public function storeForm(Request $request)
    {
        Form::formStore($request);
        return back()->with('message', 'Form Stored Successfully');
    }
    public function deleteForm($id)
    {
        $form = Form::find($id)->delete();
        return back()->with('message', 'Form Deleted Successfully');
    }
}
