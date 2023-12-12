<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Charge;
use App\Models\ServiceDetail;
use App\Models\Teacher;
use App\Models\TeacherPaymentStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class AdminController extends Controller
{
    public $teachers,$service_details,$service_detail, $payment_status,$service_bills,$service_bill;
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
        ServiceDetail::updateServiceDetails($request,$id);
        return redirect('/service-details/manage')->with('message','Service Details update Successfully');
    }






    public function billDetails()
    {
        $this->service_bills = DB::table('teacher_payment_statuses')
            ->join('service_details', 'service_details.id', '=', 'teacher_payment_statuses.service_detail_id')
            ->join('teachers', 'teachers.id', '=', 'teacher_payment_statuses.teacher_id')
            ->select('teacher_payment_statuses.*', 'service_details.*', 'teachers.*')
            ->get();
//        $this->service_bills = Schema::getColumnListing('service_details');
        return view('admin.service_bill.index',['service_bills'=>$this->service_bills]);
    }
    public function billEdit($id)
    {
        $this->service_bill = TeacherPaymentStatus::find($id)->first();
        return view('admin.service_bill.edit',['bill'=>$this->service_bill]);
    }


    public function createInvoice()
    {
        $this->teachers = Teacher::all();
        $this->service_details = ServiceDetail::all();
        return view('admin.payment_invoice.create',[
            'teachers' => $this->teachers,
            'service_details' => $this->service_details
        ]);
    }
    public function storeInvoice(Request $request)
    {
        return $request;
    }


    public function getServiceDetailsByYear()
    {
        return response()->json(ServiceDetail::where('id', $_GET['id'])->get());
    }
}