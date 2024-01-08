<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmployeeAttend;
use App\Models\EmployeeLoan;
use App\Models\Designation;
use App\Models\EmployeeSalary;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class EmployeeSalaryController extends Controller
{
    public function EmployeeSalaryView(){
        $data['allData'] = User::where('usertype','Employee')->get();
        $data['designations'] = Designation::all();
        $data['editData'] = EmployeeSalary::all();
        return view('backend.account.employee_salary.employee_salary_view',$data);
    }// end method
    public function EmployeeSalaryGet(Request $request){
        $employee_id = $request->employee_id;
        $designation_id = $request->designation_id;
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $allData = User::where('id',$employee_id)->where('designation_id',$designation_id)->first();
        $data['designations'] = Designation::all();

        $totalattend = EmployeeAttend::whereBetween('date',array($start_date,$end_date))->where('employee_id',$employee_id)->get();
        $absentcount = count($totalattend->where('attend_status','Absent'));

        $salary = $allData->salary;
        $salaryperday = (float)$salary/30;
        $totalsalaryminus = (float)$absentcount*(float)$salaryperday;
        $totalsalary = (float)$salary-(float)$totalsalaryminus;

        return view('backend.account.employee_salary.employee_salary_add',$data,compact('allData','absentcount','salaryperday','totalsalary'));
    }//end method
    public function EmployeeSalaryStore(Request $request){

        $check = EmployeeSalary::where('employee_id',$request->employee_id)->where('month',$request->month)->first();
        if($check == Null){
            $data = new EmployeeSalary;
            $data->employee_id = $request->employee_id;
            $data->id_no = $request->id_no;
            $data->designation_id = $request->designation_id;
            $data->month = $request->month;
            $data->date = date('Y-m-d',strtotime($request->date));
            $data->salary = $request->salary;
            $data->paid_salary = $request->paid_salary;
            $data->save();
    
            $notification = array(
                'message' => 'Employee Salary Added Successfully',
                'alert-type' => 'info'
            );
            return redirect()->route('employee.salary.view')->with($notification);   
        }elseif($check->employee_id == $request->employee_id AND $check->month == $request->month){
            $notification = array(
                'message' => 'Employee Salary Already Added',
                'alert-type' => 'info'
            );
            return redirect()->route('employee.salary.view')->with($notification);   
        }else{
        $data = new EmployeeSalary;
        $data->employee_id = $request->employee_id;
        $data->id_no = $request->id_no;
        $data->designation_id = $request->designation_id;
        $data->month = $request->month;
        $data->date = date('Y-m-d',strtotime($request->date));
        $data->salary = $request->salary;
        $data->paid_salary = $request->paid_salary;
        $data->save();

        $notification = array(
            'message' => 'Employee Salary Added Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('employee.salary.view')->with($notification);   
        }//end if
    }//end method
}
