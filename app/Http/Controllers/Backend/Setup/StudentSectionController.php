<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\StudentSection;


class StudentSectionController extends Controller
{
    public function StudentSectionView(){
        $data['allData'] = StudentSection::all();
        return view('backend.setup.section.section_view',$data);
    }//end method
    public function ClassSectionStore(Request $request){
        $data = new StudentSection();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_sections|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Class Section Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Class Section Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.section.view')->with($notification);
    }//end method
    
    public function ClassSectionEdit($id){
        $data['editData'] = StudentSection::find($id);
        return view('backend.setup.section.section_edit',$data);
    }
    public function ClassSectionUpdate(Request $request,$id){
        $data = StudentSection::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_sections|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Class Section Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Class Section Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.section.view')->with($notification);
    }//end method
    public function ClassSectionDelete($id){
        $data = StudentSection::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Class Section Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.section.view')->with($notification);
    }
}
