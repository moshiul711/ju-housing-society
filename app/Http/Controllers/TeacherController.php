<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\TeacherPaymentStatus;
use Illuminate\Http\Request;
use Session;

class TeacherController extends Controller
{
    public $teacher;
    public function index()
    {
        return view('teacher.login');
    }

    public function dashboard()
    {
        $this->teacher = Teacher::find(Session::get('teacher_id'));
        return view('teacher.dashboard',['teacher'=>$this->teacher]);
    }

    public function profile()
    {
        $this->teacher = Teacher::find(Session::get('teacher_id'));
        return view('teacher.profile',['teacher'=>$this->teacher]);
    }

    public function profileUpdate(Request $request,$id,$name)
    {
        $this->teacher = Teacher::teacherProfileUpdate($request,$id,$name);
        return back()->with('message', 'Your Profile has been Updated');
    }

    public function payment()
    {
        $histories = TeacherPaymentStatus::where('teacher_id',Session::get('teacher_id'))->get();
        return view('teacher.payment',['histories'=>$histories]);
    }

    public function allTeacher()
    {
        $teachers = Teacher::all();
        return view('teacher.lists',['teachers'=>$teachers]);
    }






    public function login(Request $request)
    {
        $this->teacher = Teacher::teacherLogin($request);
        if ($this->teacher)
        {
            if (password_verify($request->password,$this->teacher->password))
            {
                Session::put('teacher_id',$this->teacher->id);
                Session::put('teacher_name',$this->teacher->name);
                return redirect('/teacher-dashboard');
            }
            else
            {
                return back()->with('message','Sorry !! Your Password is Invalid, Check it Again');
            }
        }
        else
        {
            return back()->with('message','Sorry !! Your Information is Invalid, Check it Again');
        }
    }

    public function logout()
    {
        Session::forget('teacher_id');
        return redirect('/teacher-login');
    }
}
