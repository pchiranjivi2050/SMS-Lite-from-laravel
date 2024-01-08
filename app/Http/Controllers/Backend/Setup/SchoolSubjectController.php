<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\SchoolSubject;
class SchoolSubjectController extends Controller
{
    public function SchoolSubjectView(){
        $data['allData'] = SchoolSubject::all();
        return view('backend.setup.subject.subject_view',$data);
    }// End Method
    public function SchoolSubjectStore(Request $request){
        $data = new SchoolSubject();
        $data->name = $request->name;

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:school_subjects|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Subject Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if


        $data->description = $request->description;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/subject_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/subject_image'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Class Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('school.subject.view')->with($notification);
    }// End Method
    public function SchoolSubjectEdit($id){
        $data['editData'] = SchoolSubject::find($id);
        return view('backend.setup.subject.subject_edit',$data);
    }//end method

    public function SchoolSubjectUpdate(Request $request,$id){
        $data = new SchoolSubject();
        $data->name = $request->name;
        $data->description = $request->description;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/subject_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/subject_image'),$filename);
            $data['photo'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Subject Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('school.subject.view')->with($notification);
    }// End Method
    public function SchoolSubjectDelete($id){
        $data = SchoolSubject::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Subject Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('school.subject.view')->with($notification);
    }
}
