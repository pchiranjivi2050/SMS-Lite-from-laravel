<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    public function StudentClassView(){
        $data['allData'] = StudentClass::all();
        return view('backend.setup.class.class_view',$data);
    }//end method
    public function ClassStore(Request $request){
        $data = new StudentClass();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_classes|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Class Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Class Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.class.view')->with($notification);
    }//end method
    
    public function ClassEdit($id){
        $data['editData'] = StudentClass::find($id);
        return view('backend.setup.class.class_edit',$data);
    }
    public function ClassUpdate(Request $request,$id){
        $data = StudentClass::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_classes|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Class Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Class Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.class.view')->with($notification);
    }//end method
    public function ClassDelete($id){
        $data = StudentClass::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Class Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.class.view')->with($notification);
    }


}
