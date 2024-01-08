<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentSection;
use App\Models\StudentReg;
use App\Models\StudentAttend;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class StdAttendReportController extends Controller
{
    public function AttendReportView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        return view('backend.report.std_attend_report.attend_report_view',$data,compact('nepaliYear'));
     }//end method
     public function StudentAttendReport(Request $request){
        $data['allData'] = StudentAttend::whereBetween('date',array($request->start_date,$request->end_date))->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->orderBy('date','asc')->get();
        //dd($allData);
        //$data['allData'] = StudentAttend::whereBetween('date',array($request->start_date,$request->end_date))->where('id_no',$request->id_no)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->orderBy('date','asc')->get();
        $count = StudentAttend::whereBetween('date',array($request->start_date,$request->end_date))->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->count();
        $finalcount = $count/2;
        return view('backend.report.std_attend_report.student_attend_report',$data,compact('finalcount'));
    }//end method
}
