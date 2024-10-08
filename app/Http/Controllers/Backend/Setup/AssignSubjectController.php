<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssignSubject;
use App\Models\StudentClass;
use App\Models\SchoolSubject;

class AssignSubjectController extends Controller
{
    public function AssignSubjectView(){
        $data['allData'] = AssignSubject::select('class_id')->groupby('class_id')->get();
        $data['subjects'] = SchoolSubject::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.assign_subject.assign_subject_view',$data);
    }//end method
    public function AssignSubjectStore(Request $request){
        $subjectCount = count($request->subject_id);
        if ($subjectCount !=NULL) {
            for ($i=0; $i < $subjectCount ; $i++) { 
                $assign_subject = new AssignSubject();
                $assign_subject->class_id = $request->class_id;
                $assign_subject->subject_id = $request->subject_id[$i];
                $assign_subject->full_mark = $request->full_mark[$i];
                $assign_subject->pass_mark = $request->pass_mark[$i];
                $assign_subject->save();

            } // End For Loop
        }// End If Condition

        $notification = array(
            'message' => 'Subject Assign Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('assign.subject.view')->with($notification);
    }//end Method
    public function AssignSubjectEdit($class_id){
        $data['editData'] = AssignSubject::where('class_id',$class_id)->orderBy('subject_id','asc')->get();
        $data['detailsData'] = AssignSubject::where('class_id',$class_id)->orderBy('subject_id','asc')->get();
        //dd($data['editData']->toArray());
        $data['subjects'] = SchoolSubject::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.assign_subject.edit_assign_subject',$data);
    }//end method
    public function AssignSubjectUpdate(Request $request,$class_id){
        if ($request->subject_id == Null) {
           
            $notification = array(
                'message' => 'Sorry you do not Select any Subject',
                'alert-type' => 'error'
            );
            return redirect()->route('assign.subject.edit',$class_id)->with($notification);
       
        }else {
            
            $countClass = count($request->subject_id);
            AssignSubject::where('class_id',$class_id)->delete();
            for ($i=0; $i < $countClass ; $i++) { 
                $assign_subject = new AssignSubject();
                $assign_subject->class_id = $request->class_id;
                $assign_subject->subject_id = $request->subject_id[$i];
                $assign_subject->full_mark = $request->full_mark[$i];
                $assign_subject->pass_mark = $request->pass_mark[$i];
                $assign_subject->save();               
                
            }// End For Loop
        }//end else condition
        $notification = array(
            'message' => 'Data Updated SuccessFully. ',
            'alert-type' => 'success'
        );
            return redirect()->route('assign.subject.view')->with($notification);
    }//end Method
}
