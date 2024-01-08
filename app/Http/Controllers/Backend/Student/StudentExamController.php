<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\ExamType;
use App\Models\StudentSection;
use App\Models\AssignSubject;
use App\Models\SchoolSubject;
use App\Models\StudentReg;
use App\Models\StudentMark;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class StudentExamController extends Controller
{
    public function MarkEntryView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['examtypes'] = ExamType::all();
        return view('backend.mark.mark_entry.mark_entry_view',$data);
    }//end Method
    public function MarkEntryAdd(Request $request){
        $assign_subject_id = $request->assign_subject_id;
        $subject_ids= AssignSubject::where('id',$assign_subject_id)->get();
        foreach($subject_ids as $subject_id){
           $subject_name_id =  $subject_id->subject_id;
        }
        $finalSubjectName = SchoolSubject::where('id',$subject_name_id)->get();
        $exam_type_id =$request->exam_type_id;
        $allData = StudentReg::where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
        return view('backend.mark.mark_entry.mark_entry_add',compact('allData','exam_type_id','assign_subject_id','finalSubjectName'));
        
    }//end Method
   
    public function MarkEntryStore(Request $request){
        StudentMark::where('exam_type_id',$request->exam_type_id)->where('assign_subject_id',$request->assign_subject_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->delete();
        $countemployee = count($request->student_id);
            for ($i=0; $i < $countemployee; $i++) { 
                $markentey = new StudentMark();
                $markentey->exam_type_id =$request->exam_type_id;
                $markentey->assign_subject_id =$request->assign_subject_id;
                $markentey->student_id = $request->student_id[$i];
                $markentey->id_no = $request->id_no[$i];
                $markentey->year_id = $request->year_id;
                $markentey->class_id = $request->class_id;
                $markentey->section_id = $request->section_id;
                $markentey->marks = $request->marks[$i];
                $markentey->practical_marks = $request->practical_marks[$i];
                $markentey->save();
            }//end for loop
        $notification = array(
            'message' => 'Student Marks Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('mark.entry.view')->with($notification);
    }//end Method
    public function MarkEntryEdit(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['examtypes'] = ExamType::all();
        return view('backend.mark.mark_entry.mark_entry_edit',$data);
    }//end Method
    public function MarkEntryEditAdd(Request $request){
        $assign_subject_id = $request->assign_subject_id;
        $subject_ids= AssignSubject::where('id',$assign_subject_id)->get();
        foreach($subject_ids as $subject_id){
           $subject_name_id =  $subject_id->subject_id;
        }
        $finalSubjectName = SchoolSubject::where('id',$subject_name_id)->get();
        $exam_type_id =$request->exam_type_id;
        //$allData = StudentReg::where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
        $allData = StudentMark::with(['student','assign_student'])->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('assign_subject_id',$assign_subject_id)->where('exam_type_id',$exam_type_id)->get();
        return view('backend.mark.mark_entry.mark_entry_update',compact('allData','exam_type_id','assign_subject_id','finalSubjectName'));    
    }//end method
    public function MarkEntryUpdate(Request $request){
        StudentMark::where('exam_type_id',$request->exam_type_id)->where('assign_subject_id',$request->assign_subject_id)->where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->delete();
        $countemployee = count($request->student_id);
            for ($i=0; $i < $countemployee; $i++) { 
                $markentey = new StudentMark();
                $markentey->exam_type_id =$request->exam_type_id;
                $markentey->assign_subject_id =$request->assign_subject_id;
                $markentey->student_id = $request->student_id[$i];
                $markentey->id_no = $request->id_no[$i];
                $markentey->year_id = $request->year_id;
                $markentey->class_id = $request->class_id;
                $markentey->section_id = $request->section_id;
                $markentey->marks = $request->marks[$i];
                $markentey->practical_marks = $request->practical_marks[$i];
                $markentey->save();
            }//end for loop
        $notification = array(
            'message' => 'Student Marks Update Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('mark.entry.edit')->with($notification);
    }
}
