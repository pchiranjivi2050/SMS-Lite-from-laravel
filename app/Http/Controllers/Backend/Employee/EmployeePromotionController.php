<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\User;
use DB;
use App\Models\Employee;
use App\Models\EmployeePromotion;
class EmployeePromotionController extends Controller
{
    public function EmployeePromotion($employee_id){
        $data['designations'] = Designation::all();
        $data['editData'] = Employee::with(['employee'])->where('employee_id',$employee_id)->first();
        return view('backend.employee.employee_add.employee_promotion',$data);
    }
    public function PromotionStore(Request $request){
        $data = new EmployeePromotion();
        $data->employee_id = $request->employee_id;
        $data->id_no = $request->id_no;
        $data->pre_designation_id = $request->pre_designation_id;
        $data->designation_id = $request->designation_id;
        $data->salary = $request->salary;
        $data->increase_salary = $request->increase_salary;
        $total_salary = $request->increase_salary + $request->salary;
        $data->total_salary = $total_salary;
        $data->promotion_date = date('Y-m-d',strtotime($request->promotion_date));
        $data->save();

        $assign_employee = Employee::where('id',$request->id)->where('employee_id',$request->employee_id)->first();
        $assign_employee->designation_id = $request->designation_id;
        $assign_employee->save();


        $user = User::where('id',$request->employee_id)->first();
        $user->designation_id = $request->designation_id;
        $user->salary = $total_salary;
        $user->save();
        $notification = array(
            'message' => 'Employee update Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('employee.view')->with($notification);

    }
}
