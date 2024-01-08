<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmployeeAttend;
use App\Models\EmployeeLeave;
use App\Models\Designation;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;


class EmployeeLeaveController extends Controller
{
    public function EmployeeLeaveView(){
        $data['allData'] = User::where('usertype','Employee')->get();
        $data['designations'] = Designation::all();
        $data['leaves'] = EmployeeLeave::all();
        return view('backend.employee.employee_leave.employee_leave_view',$data);
    }//end Method
    public function EmployeeLeaveGet(Request $request){
        $allData = User::where('id',$request->employee_id)->where('designation_id',$request->designation_id)->first();
        $data['designations'] = Designation::all();
        return view('backend.employee.employee_leave.employee_leave_add',$data,compact('allData'));
    }//End Method
    public function EmployeeLeaveStore(Request $request){
        $data = new EmployeeLeave;
        $data->employee_id = $request->employee_id;
        $data->id_no = $request->id_no;
        $data->designation_id = $request->designation_id;
        $data->start_date = date('Y-m-d',strtotime($request->start_date));
        $data->end_date = date('Y-m-d',strtotime($request->end_date));
        $data->reason = $request->reason;
        $data->save();

        $notification = array(
            'message' => 'Employee Leave Insert Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('employee.leave.view')->with($notification);
    }//end Method
    public function EmployeeLeaveEdit($employee_id){
        $allData = User::where('id',$employee_id)->first();
        $data['designations'] = Designation::all();
        $leave = EmployeeLeave::where('employee_id',$employee_id)->first();
        return view('backend.employee.employee_leave.employee_leave_edit',$data,compact('allData','leave'));
    }//end method
    public function EmployeeLeaveUpdate(Request $request,$id){
        $data = EmployeeLeave::find($id);
        $data->start_date = date('Y-m-d',strtotime($request->start_date));
        $data->end_date = date('Y-m-d',strtotime($request->end_date));
        $data->reason = $request->reason;
        $data->save();

        $notification = array(
            'message' => 'Employee Leave Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('employee.leave.view')->with($notification);
    }
}
