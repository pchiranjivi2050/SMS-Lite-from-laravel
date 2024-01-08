<?php

namespace App\Http\Controllers\Backend\Report;

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

class StdFeeReportController extends Controller
{
    public function FeeReportView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['feeCategorys'] = AccountFeeCategory::all();
        $data['sections'] = StudentSection::all();
        return view('backend.report.std_fee_report.fee_report_view',$data,compact('nepaliYear'));   
     }//end Method
     public function FeeReportGet(Request $request){
         $year_id = $request->year_id;
         $class_id = $request->class_id;
         $section_id = $request->section_id;
         $fee_category_id = $request->fee_category_id;
         $data['allData'] = StudentFee::where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('fee_category_id',$request->fee_category_id)->get();
         return view('backend.report.std_fee_report.fee_report_get',$data,compact('year_id','class_id','section_id','fee_category_id'));   
     }//End Method
     public function FeeBillGet($id){
        $billData = StudentFee::where('id',$id)->first();
        $pdf = PDF::loadView('backend.report.std_fee_report.fee_bill_get', compact('billData'));
		$pdf->SetProtection(['copy', 'print'], '', 'pass');
		return $pdf->stream('StudentBill.pdf');
     }
}
