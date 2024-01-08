<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGrade;
use Illuminate\Support\Facades\Validator;

class GradeController extends Controller
{
    public function MarkGradeView(){
        $data['allData'] = StudentGrade::all();
        return view('backend.mark.grade.grade_view',$data);
    }//End Method
    public function MarkGradeStore(Request $request){
        $data = new StudentGrade();

        //Validator
        $validator = Validator::make($request->all(), [
            'grade_name' => 'required|unique:student_grades|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Grade Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->grade_name = $request->grade_name;
        $data->grade_point = $request->grade_point;
        $data->start_marks = $request->start_marks;
        $data->end_marks = $request->end_marks;
        $data->start_point = $request->start_point;
        $data->end_point = $request->end_point;
        $data->remarks = $request->remarks;
        $data->save();

        $notification = array(
            'message' => 'Grade Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//end method
    public function MarkGradeEdit($id){
        $data['editData'] = StudentGrade::find($id);
        return view('backend.mark.grade.grade_edit',$data);
    }//end Method
    public function MarkGradeUpdate(Request $request,$id){
        $data =  StudentGrade::find($id);

        $data->grade_name = $request->grade_name;
        $data->grade_point = $request->grade_point;
        $data->start_marks = $request->start_marks;
        $data->end_marks = $request->end_marks;
        $data->start_point = $request->start_point;
        $data->end_point = $request->end_point;
        $data->remarks = $request->remarks;
        $data->save();

        $notification = array(
            'message' => 'Grade Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('mark.grade.view')->with($notification);
    }//end method
    public function MarkGradeDelete($id){
        $data = StudentGrade::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Grade Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('mark.grade.view')->with($notification);
    }
}
