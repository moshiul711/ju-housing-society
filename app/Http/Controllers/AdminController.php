<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use App\Models\ServiceDetail;
use App\Models\Teacher;
use App\Models\TeacherPaymentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public $teacher,$teachers,$service_details,$service_detail, $payment_status,$service_bills,$service_bill,$payments;
    public function index()
    {
        return view('admin.dashboard');
    }

    public function createService()
    {
        return view('admin.service_details.create');
    }

    public function storeService(Request $request)
    {
        $this->service_details = ServiceDetail::all();
        foreach ($this->service_details as $detail)
            if ($detail->service_year == $request->service_year)
            {
                return redirect('/service-details/create')->with('error','Service Year already added. You Cannot add this.');
            }
        $this->service_detail = ServiceDetail::storeServiceDetails($request);
        $this->payment_status = TeacherPaymentStatus::storePaymentStatus($this->service_detail->id);
        return back()->with('message','Service Details Store Successfully');
    }

    public function manageService()
    {
        return view('admin.service_details.manage',['service_details'=>ServiceDetail::orderBy('id','desc')->get()]);
    }

    public function editService($id)
    {
        $this->service_detail = ServiceDetail::find($id);
        return view('admin.service_details.edit',['service_detail'=>$this->service_detail]);
    }

    public function updateService(Request $request,$id)
    {
        $this->service_detail = ServiceDetail::updateServiceDetails($request,$id);
        $this->payments = ServiceDetail::updatePaymentStatus($this->service_detail->id);

        return redirect('/service-details/manage')->with('message','Service Details update Successfully');
    }






    public function billDetails()
    {
        $this->service_bills = DB::table('teacher_payment_statuses')
            ->join('service_details', 'service_details.id', '=', 'teacher_payment_statuses.service_detail_id')
            ->join('teachers', 'teachers.id', '=', 'teacher_payment_statuses.teacher_id')
            ->select('teacher_payment_statuses.*','service_details.service_year', 'teachers.name','teachers.member_no','teachers.plot_no')
            ->get();
//        $this->service_bills = Schema::getColumnListing('service_details');
        return view('admin.service_bill.index',['service_bills'=>$this->service_bills]);
    }
    public function billEdit($id)
    {
        $this->service_bill = TeacherPaymentStatus::find($id);
        return view('admin.service_bill.edit',['bill'=>$this->service_bill]);
    }
    public function billupdate(Request $request,$id)
    {
        TeacherPaymentStatus::updatePaymentStatus($request,$id);
        return redirect('/bill/details')->with('message','Bill Status Updated Successfully');
    }
    public function billInvoice($id)
    {
        $this->service_bill = DB::table('teacher_payment_statuses')
            ->join('service_details', 'service_details.id', '=', 'teacher_payment_statuses.service_detail_id')
            ->join('teachers', 'teachers.id', '=', 'teacher_payment_statuses.teacher_id')
            ->select('teacher_payment_statuses.*', 'service_details.*', 'teachers.*')
            ->where('teacher_payment_statuses.id',$id)
            ->first();
//        $this->service_bills = Schema::getColumnListing('service_details');
        return view('admin.service_bill.invoice',['bill'=>$this->service_bill]);
    }
    public function billPrint($id)
    {
        $this->service_bills = DB::table('teacher_payment_statuses')
            ->join('service_details', 'service_details.id', '=', 'teacher_payment_statuses.service_detail_id')
            ->join('teachers', 'teachers.id', '=', 'teacher_payment_statuses.teacher_id')
            ->select('teacher_payment_statuses.*', 'service_details.*', 'teachers.*')
            ->where('teacher_payment_statuses.id',$id)
            ->first();
//        $this->service_bills = Schema::getColumnListing('service_details');
    }



    public function createMember()
    {
        return view('admin.member.create');
    }

    public function storeMember(Request $request)
    {
        Teacher::teacherCreate($request);
        return back()->with('message','New Member Create Successfully');
    }

    public function createIndex()
    {
        $this->teachers = Teacher::all();
        return view('admin.member.index',['teachers'=>$this->teachers]);
    }

    public function editMember($id)
    {
        $this->teacher = Teacher::find($id);
        return view('admin.member.edit',['teacher'=>$this->teacher]);
    }
    public function updateMember(Request $request,$id)
    {
        Teacher::teacherUpdate($request,$id);
        return redirect('/member/index')->with('message','Member Info Updated Successfully');
    }

    public function getServiceDetailsByYear()
    {
        return response()->json(ServiceDetail::where('id', $_GET['id'])->get());
    }

    public function createCommunityService()
    {
        return view('admin.service.create');
    }

    public function storeCommunityService(Request $request)
    {
        Service::serviceStore($request);
    }
}
