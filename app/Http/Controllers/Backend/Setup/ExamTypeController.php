<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ExamType;
class ExamTypeController extends Controller
{
    public function ExamTypeView(){
        $data['allData'] = ExamType::all();
        return view('backend.setup.exam_type.exam_type_view',$data);
    }//end method
    public function ExamTypeStore(Request $request){
        $data = new ExamType();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:exam_types|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Exam Type Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Exam Type Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('exam.type.view')->with($notification);
    }//end method
    
    public function ExamTypeEdit($id){
        $data['editData'] = ExamType::find($id);
        return view('backend.setup.exam_type.exam_type_edit',$data);
    }
    public function ExamTypeUpdate(Request $request,$id){
        $data = ExamType::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:exam_types|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Exam Type Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Exam Type Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('exam.type.view')->with($notification);
    }//end method
    public function ExamTypeDelete($id){
        $data = ExamType::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Exam Type Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
