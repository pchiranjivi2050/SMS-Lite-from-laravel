<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\ExamType;
use App\Models\StudentSection;
use App\Models\AssignSubject;
use App\Models\SchoolSubject;
use App\Models\StudentGrade;
use App\Models\StudentReg;
use App\Models\StudentMark;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class ExamReportController extends Controller
{
    public function ExamReportView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['examtypes'] = ExamType::all();
        return view('backend.report.exam_report.exam_report_view',$data,compact('nepaliYear'));
    }//end Method
    public function ExamReportGet(Request $request){
        $id_no = $request->id_no;
        $exam_type_id = $request->exam_type_id;
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        $subject = SchoolSubject::all();
        $data['grades'] = StudentGrade::all();
        $student = StudentReg::where('id_no',$id_no)->first();
        
        $data['allData'] = StudentMark::where('id_no',$id_no)->where('exam_type_id',$exam_type_id)->where('year_id',$year_id)->where('class_id',$class_id)->where('section_id',$section_id)->get();


        
		$pdf = PDF::loadView('backend.report.exam_report.exam_report_get', $data,compact('subject','student'));
		$pdf->SetProtection(['copy', 'print'], '', 'pass');
		return $pdf->stream('StudentMarks.pdf');
        // return view('backend.report.exam_report.exam_report_get',$data,compact('subject'));
    }//end Method
}
