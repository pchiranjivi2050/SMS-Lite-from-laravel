<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\EmployeeAttend;
use App\Models\EmployeeLoan;
use App\Models\Designation;
use App\Models\LoanPay;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class LoanPayController extends Controller
{
    public function EmployeeLoanPay($loan_no, $employee_id,$designation_id){
        $loanAmount = DB::table('loan_pays')->where('loan_no',$loan_no)->get();
        $allData = User::where('id',$employee_id)->where('designation_id',$designation_id)->first();
        $data['designations'] = Designation::all();
        $editData = EmployeeLoan::where('loan_no',$loan_no)->first();
        return view('backend.account.employee_loan.employee_loan_pay',$data,compact('allData','editData'));
    }//end Method
    public function LoanPayStore(Request $request){
        $data  = new LoanPay;
        $data->loan_no = $request->loan_no;
        $data->id_no = $request->id_no;
        $data->employee_id  = $request->employee_id;
        $data->designation_id = $request->designation_id;
        $data->monthly_loan_paid = $request->monthly_loan_paid;
        $loanAmount = DB::table('loan_pays')->where('loan_no',$request->loan_no)->orderBy('id','DESC')->first();
        if(!empty($loanAmount)){
            $remain_amount = $loanAmount->remain_amount - $request->monthly_loan_paid;
        }else{
            $remain_amount = $request->loan_amount - $request->monthly_loan_paid;
        }
        $data->remain_amount = $remain_amount;
        $data->paid_date = date('Y-m-d',strtotime($request->paid_date));
        $data->save();

        $notification = array(
            'message' => 'Loan Amount Paid',
            'alert-type' => 'info'
        );
        return redirect()->route('employee.loan.view')->with($notification);
    }
    public function LoanPayDetail($loan_no, $employee_id,$designation_id){
        $data['allData'] = LoanPay::where('loan_no',$loan_no)->get();
        return view('backend.account.employee_loan.employee_loan_detail',$data);
    }
}
