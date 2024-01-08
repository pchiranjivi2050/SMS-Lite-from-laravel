<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\StudentShift;
class StudentShiftController extends Controller
{
    public function StudentShiftView(){
        $data['allData'] = StudentShift::all();
        return view('backend.setup.shift.shift_view',$data);
    }//end method
    public function ShiftStore(Request $request){
        $data = new StudentShift();
         //Validator
         $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_shifts|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Student Shift Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Student Shift Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.shift.view')->with($notification);
    }// End Method
    public function ShiftEdit($id){
        $editData = StudentShift::find($id);
        return view('backend.setup.shift.shift_edit',compact('editData'));
    }// End Mehtod
    public function ShiftUpdate(Request $request,$id){
        $data = StudentShift::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_shifts|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Student Shift Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Student Shift Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.shift.view')->with($notification);
    }//end method


    public function ShiftDelete($id){
        $data = StudentShift::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Student Shift Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
