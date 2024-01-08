<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmployeeAttend;
use App\Models\EmployeeLoan;
use App\Models\Designation;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class EmployeeLoanController extends Controller
{
    public function EmployeeLoanView(){
        $data['allData'] = User::where('usertype','Employee')->get();
        $data['loans'] = EmployeeLoan::all();
        $data['designations'] = Designation::all();
        return view('backend.account.employee_loan.employee_loan_view', $data);
    }//end Method
    public function EmployeeLoanGet(Request $request){
        $employee_id = $request->employee_id;
        $designation_id = $request->designation_id;
        $loan = DB::table('employee_loans')->orderBy('id', 'DESC')->first();
        if($loan == null){
            $loan_no = '1';
        }else{
            $loan_no = $loan->loan_no + 1 ;
        }
        $finalLoan_no = $loan_no;


        $loanAmount = DB::table('loan_pays')->where('employee_id',$request->employee_id)->orderBy('id','DESC')->first();

        if($loanAmount->remain_amount != 0){
            $notification = array(
                'message' => 'Employee Already Has Loan',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }else{
        $allData = User::where('id',$employee_id)->where('designation_id',$designation_id)->first();
        $data['designations'] = Designation::all();
        return view('backend.account.employee_loan.employee_loan_add',$data,compact('allData','finalLoan_no'));
        }//end If
    }//End Method
    public function EmployeeLoanStore(Request $request){
        
        $data = new EmployeeLoan;
        $data->loan_no  = $request->loan_no;
        $data->employee_id = $request->employee_id;
        $data->id_no = $request->id_no;
        $data->designation_id = $request->designation_id;
        $data->monthly_loan_paid = $request->monthly_loan_paid;
        $data->loan_amount = $request->loan_amount;
        $data->loan_date = date('Y-m-d',strtotime($request->loan_date));
        $data->save();
        
        $notification = array(
            'message' => 'Employee Loan Added Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('employee.loan.view')->with($notification);   
     }
}
