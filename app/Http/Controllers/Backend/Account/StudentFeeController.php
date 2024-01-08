<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\ExamType;
use App\Models\StudentSection;
use App\Models\StudentReg;
use App\Models\StudentFee;
use App\Models\FeeRemark;
use App\Models\FeeCategoryAmount;
use App\Models\AccountFeeCategory;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;
class StudentFeeController extends Controller
{
    public function FeeCollection(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;

        $data['feeCategorys'] = AccountFeeCategory::all();
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['sections'] = StudentSection::all();
        return view('backend.account.fee_amount.fee_amount_add_view',$data);
    }//
    public function FeeGetStudent(Request $request){
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $fee_category_id = $request->fee_category_id;

        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];

        $bills = DB::table('student_fees')->orderBy('bill_no', 'DESC')->first();
        $billcng = substr($bills->bill_no, 0, 4);
        if($bills == null){
            $billno = $nepaliYear . 0 . 0 . 0 . 1 ;
        }elseif($billcng == $nepaliYear){
            $billno = $bills->bill_no + '1' ;
        }else{
            $billno = $nepaliYear . 0 . 0 . 0 . 1 ;
        }
        
        $finalBill = $billno;
        $data['classes'] = StudentClass::where('id',$class_id)->get();
        $data['years'] = StudentYear::where('id',$year_id)->get();
        $data['sections'] = StudentSection::where('id',$section_id)->get();
        $data['exams'] = ExamType::all(); 
        $data['feetypes'] = AccountFeeCategory::where('id',$fee_category_id)->get();
        $data['students'] = StudentReg::where('year_id',$year_id)->where('class_id',$class_id)->where('section_id',$section_id)->get();
        $data['feeCategorys'] = FeeCategoryAmount::where('class_id',$class_id)->where('fee_category_id',$fee_category_id)->get();

        return view('backend.account.fee_amount.fee_amount_add',$data,compact('finalBill'));
    }//End Method
    public function FeeBillStore(Request $request){
        
        $data = DB::table('student_fees')->where('month',$request->month)->where('exam_type_id',$request->exam_type_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('fee_category_id',$request->fee_category_id)->where('student_id',$request->student_id)->first();
        if($data == false){
            $data = new StudentFee;
            $data->bill_no = $request->bill_no;
            $data->date = $request->date;
            $data->year_id = $request->year_id;
            $data->class_id = $request->class_id;
            $data->section_id = $request->section_id;
            $data->fee_category_id = $request->fee_category_id;
            $data->student_id = $request->student_id;
            $data->month = $request->month;
            $data->exam_type_id = $request->exam_type_id;
            $data->amount = $request->amount;
            $data->discount = $request->discount;
    
            $discount = ($request->discount / 100) * $request->amount;        
            $data->total_amount = $request->amount - $discount;
            $data->remarks = $request->remarks;
            $data->save();
            $notification = array(
                'message' => 'Student Fee Inserted Successfully',
                'alert-type' => 'info'
            );
            $billData = StudentFee::where('id',$data->id)->first();
            $pdf = PDF::loadView('backend.account.fee_amount.fee_account_pdf', compact('billData'));
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('StudentBill.pdf')->with($notification);
            return redirect()->back()->with($notification);   
        }else{
            $notification = array(
                'message' => 'Student Fee Already Inserted',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);   
    
        }//end if

        
    }

}
