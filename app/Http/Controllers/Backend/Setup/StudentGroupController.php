<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\StudentGroup;



class StudentGroupController extends Controller
{
    public function StudentGroupView(){
        $data['allData'] = StudentGroup::all();
        return view('backend.setup.group.group_view',$data);
    }// end Method



    public function GroupStore(Request $request){
        $data = new StudentGroup();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_groups|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Student Group Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Student Group Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.group.view')->with($notification);
    }//end method


    public function GroupEdit($id){
        $data['editData'] = StudentGroup::find($id);
        return view('backend.setup.group.group_edit',$data);
    }//end method

    public function GroupUpdate(Request $request, $id){
        $data = StudentGroup::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_groups|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Student Group Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Student Group Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.group.view')->with($notification);
    }//end method


    public function GroupDelete($id){
        $data = StudentGroup::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Student Group Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
