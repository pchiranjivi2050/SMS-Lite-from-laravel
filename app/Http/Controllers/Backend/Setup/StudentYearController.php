<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\StudentYear;
class StudentYearController extends Controller
{
    public function StudentYearView(){
        $data['allData'] = StudentYear::all();
        return view('backend.setup.year.year_view',$data);
    }//end method
    public function YearStore(Request $request){
        $data = new StudentYear();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_years|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Year Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Year Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('student.year.view')->with($notification);
    }//end method
    public function YearEdit($id){
        $data['editData'] = StudentYear::find($id);
        return view('backend.setup.year.year_edit',$data);
    }
    public function YearUpdate(Request $request,$id){
        $data = StudentYear::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:student_years|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Year Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Year Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.year.view')->with($notification);
    }//end method
    public function YearDelete($id){
        $data = StudentYear::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Year Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('student.year.view')->with($notification);
    }//end method
}
