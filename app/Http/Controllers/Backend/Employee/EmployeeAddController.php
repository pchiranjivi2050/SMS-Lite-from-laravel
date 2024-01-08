<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\User;
use DB;
use App\Models\Employee;
class EmployeeAddController extends Controller
{
    public function EmployeeView(){
        $data['designations'] = Designation::all();
        $data['allData'] = Employee::orderBy('id','DESC')->get();
        return view('backend.employee.employee_add.employee_add_view',$data);
    }
    public function EmployeeStore(Request $request){
        $ids = DB::table('employees')->orderBy('id', 'DESC')->first();
        if($ids == null){
            $id_no = '1';
        }else{
            $id_no = $ids->id + 1 ;
        }

        $user = new user();
        $user->id_no = $id_no;
        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->dob = date('Y-m-d',strtotime($request->dob));
        $user->join_date  = date('Y-m-d',strtotime($request->join_date));
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->designation_id = $request->designation_id;
        $user->salary = $request->salary;
        $user->marital_status = $request->marital_status;
        $user->qualification = $request->qualification;
        $user->gender = $request->gender;
        $user->avatar = 0;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $user['image'] = $filename;
        }
        $code = rand(0000,9999);
        $user->code = $code;
        $user->password = bcrypt($code);
        $user->usertype = 'Employee';
        $user->save();


        $assign_employee = new Employee();
        $assign_employee->employee_id = $user->id;
        $assign_employee->designation_id = $request->designation_id;
        $assign_employee->id_no = $user->id_no;
        $assign_employee->bank_name = $request->bank_name;
        $assign_employee->bank_branch = $request->bank_branch;
        $assign_employee->account_name = $request->account_name;
        $assign_employee->account_no = $request->account_no;
        $assign_employee->pre_school = $request->pre_school;
        $assign_employee->pre_school_address = $request->pre_school_address;
        $assign_employee->reason = $request->reason;
        $assign_employee->pre_designation = $request->pre_designation;
        $assign_employee->health = $request->health;
        $assign_employee->join_date  = date('Y-m-d',strtotime($request->join_date));
        $assign_employee->pre_join_date  = date('Y-m-d',strtotime($request->pre_join_date));
        $assign_employee->pre_leave_date  = date('Y-m-d',strtotime($request->pre_leave_date));
        if($request->file('cti_dri_image')){
            $file = $request->file('cti_dri_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/cti_dri_image'),$filename);
            $assign_employee['cti_dri_image'] = $filename;
        }
        if($request->file('pre_letter')){
            $file = $request->file('pre_letter');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/pre_letter'),$filename);
            $assign_employee['pre_letter'] = $filename;
        }
        if($request->file('cv')){
            $file = $request->file('cv');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/employee_cv'),$filename);
            $assign_employee['cv'] = $filename;
        }
        $assign_employee->save();

    $notification = array(
        'message' => 'Employee Add Successfully',
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);
    }//end method
    public function EmployeeEdit($employee_id){
        $data['designations'] = Designation::all();
        $data['editData'] = Employee::with(['employee'])->where('employee_id',$employee_id)->first();
        return view('backend.employee.employee_add.employee_edit',$data);
    }//end method
    public function EmployeeUpdate(Request $request,$employee_id){
        $assign_employee = Employee::where('id',$request->id)->where('employee_id',$employee_id)->first();
        $assign_employee->designation_id = $request->designation_id;
        $assign_employee->word = $request->word;
        $assign_employee->bank_name = $request->bank_name;
        $assign_employee->bank_branch = $request->bank_branch;
        $assign_employee->account_name = $request->account_name;
        $assign_employee->account_no = $request->account_no;
        $assign_employee->pre_school = $request->pre_school;
        $assign_employee->pre_school_address = $request->pre_school_address;
        $assign_employee->reason = $request->reason;
        $assign_employee->pre_designation = $request->pre_designation;
        $assign_employee->health = $request->health;
        $assign_employee->join_date  = date('Y-m-d',strtotime($request->join_date));
        $assign_employee->pre_join_date  = date('Y-m-d',strtotime($request->pre_join_date));
        $assign_employee->pre_leave_date  = date('Y-m-d',strtotime($request->pre_leave_date));
        if($request->file('cti_dri_image')){
            $file = $request->file('cti_dri_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/cti_dri_image'),$filename);
            $assign_employee['cti_dri_image'] = $filename;
        }
        if($request->file('pre_letter')){
            $file = $request->file('pre_letter');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/pre_letter'),$filename);
            $assign_employee['pre_letter'] = $filename;
        }
        if($request->file('cv')){
            $file = $request->file('cv');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/employee/employee_cv'),$filename);
            $assign_employee['cv'] = $filename;
        }
        $assign_employee->save();

        $user = User::where('id',$employee_id)->first();
        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->dob = date('Y-m-d',strtotime($request->dob));
        $user->join_date  = date('Y-m-d',strtotime($request->join_date));
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->designation_id = $request->designation_id;
        $user->salary = $request->salary;
        $user->marital_status = $request->marital_status;
        $user->qualification = $request->qualification;
        $user->gender = $request->gender;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $user['image'] = $filename;
        }
        $user->save();
        $notification = array(
            'message' => 'Employee update Successfully',
            'alert-type' => 'success'
        );
    
        return redirect()->route('employee.view')->with($notification);

    }
}
