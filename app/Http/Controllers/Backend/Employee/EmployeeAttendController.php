<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmployeeAttend;
use App\Models\Designation;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class EmployeeAttendController extends Controller
{
    public function EmployeeAttendView(){
        $data['allData'] = EmployeeAttend::select('date')->groupBy('date')->orderBy('id','DESC')->get();
        return view('backend.employee.employee_attend.employee_attend_view',$data);
    }//end method
    public function EmployeeAttendAdd(){
        $data['allData'] = User::where('usertype', 'Employee')->get();
        $data['deg'] = Designation::all();
        return view('backend.employee.employee_attend.employee_attend_add',$data);
    }//end method
    public function EmployeeAttendStore(Request $request){
        EmployeeAttend::where('date',date('Y-m-d',strtotime($request->date)))->delete();
        $countemployee = count($request->employee_id);
        for ($i=0; $i < $countemployee; $i++) { 
            $attend_status = 'attend_status'.$i;
            $attend = new EmployeeAttend();
            $attend->date = date('Y-m-d',strtotime($request->date));
            $attend->attend_status = $request->$attend_status;
            $attend->employee_id = $request->employee_id[$i];
            $attend->designation_id = $request->designation_id[$i];
            $attend->id_no = $request->id_no[$i];
            $attend->save();
        }//end for loop
        $notification = array(
            'message' => 'Employee Attendance Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('employee.attend.view')->with($notification);
    }//end Method
    public function EmployeeAttendEdit($date){
        $data['allData'] = User::where('usertype', 'Employee')->get();
        $data['deg'] = Designation::all();
        $finaldate = $date;
        $data['editData'] = EmployeeAttend::where('date',$date)->get();
        return view('backend.employee.employee_attend.employee_attend_edit',$data,compact('finaldate'));
    }
}
