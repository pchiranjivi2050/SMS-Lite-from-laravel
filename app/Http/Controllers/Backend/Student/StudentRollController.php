<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentReg;
use App\Models\User;
use App\Models\DiscountStudent;
use App\Models\StudentYear;
use App\Models\StudentClass;
use App\Models\StudentGroup;
use App\Models\StudentSection;
use App\Models\StudentShift;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class StudentRollController extends Controller
{
    public function StudentRollView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;
        
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['sections'] = StudentSection::all();
        
    	return view('backend.student.roll_generate.roll_generate_view',$data);
    }//end method
    public function RollGetStudent(Request $request){
      $data['allData'] = StudentReg::where('year_id',$request->year_id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
      return view('backend.student.roll_generate.roll_generate_add',$data);

    }

    public function StudentRollStore(Request $request){
        $year_id = $request->year_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;
        if ($request->student_id != null) {
            for ($i=0; $i < count($request->student_id) ; $i++) { 
                StudentReg::where('year_id',$year_id)->where('class_id',$class_id)->where('section_id',$section_id)->where('student_id',$request->student_id[$i])->update(['roll' => $request->roll[$i]]);
            }//end forloop
        }else{
            $notification = array(
                'message' => 'Sorry There are no Student',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }//end if
        $notification = array(
            'message' => 'Well Done Roll Generate Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('student.roll.view')->with($notification);
    }
    
}
