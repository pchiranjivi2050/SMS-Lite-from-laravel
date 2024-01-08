<?php

namespace App\Http\Controllers\Backend\Student;

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

class StudentAttendController extends Controller
{
    public function StudentAttendView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;
        $data['years']= StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['allData'] = StudentAttend::select('year_id','class_id','section_id')->groupBy('year_id')->groupBy('class_id')->groupBy('section_id')->orderBy('id','DESC')->get();
        return view('backend.student.student_attend.student_attend_view',$data);
    }// end method
    public function StudentAttendAdd(Request $request){
        $data['allData'] = StudentReg::where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
        return view('backend.student.student_attend.student_attend_add',$data);
    }//end Method
    public function StudentAttendStore(Request $request){
        StudentAttend::where('date',date('Y-m-d',strtotime($request->date)))->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->delete();
        $countemployee = count($request->student_id);
        for ($i=0; $i < $countemployee; $i++) { 
            $attend_status = 'attend_status'.$i;
            $attend = new StudentAttend();
            $attend->date = date('Y-m-d',strtotime($request->date));
            $attend->attend_status = $request->$attend_status;
            $attend->student_id = $request->student_id[$i];
            $attend->id_no = $request->id_no[$i];
            $attend->year_id = $request->year_id;
            $attend->class_id = $request->class_id;
            $attend->section_id = $request->section_id;
            $attend->save();
        }//end for loop
        $notification = array(
            'message' => 'Employee Attendance Data Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//end method
    public function AttendClasswiseEdit($year_id,$class_id,$section_id){
        $data['allData'] = StudentAttend::select('date','year_id','class_id','section_id')->groupBy('date')->groupBy('year_id')->groupBy('class_id')->groupBy('section_id')->where('year_id',$year_id)->where('class_id',$class_id)->where('section_id',$section_id)->orderBy('id','DESC')->get();
        return view('backend.student.student_attend.attend_classwise_edit',$data);
    }//end Method
    public function AttendDatewiseEdit($year_id,$class_id,$section_id,$date){
        $data['editData'] = StudentAttend::where('year_id',$year_id)->where('class_id',$class_id)->where('section_id',$section_id)->where('date',$date)->get();
        return view('backend.student.student_attend.student_attend_edit',$data);
    }//end method
}
