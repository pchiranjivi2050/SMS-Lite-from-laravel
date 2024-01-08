<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Designation;
class DesignationController extends Controller
{
    public function DesignationView(){
        $data['allData'] = Designation::all();
        return view('backend.setup.designation.designation_view',$data);
    }//end method
    public function DesignationStore(Request $request){
        $data = new Designation();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:designations|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Designation Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Designation Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('designation.view')->with($notification);
    }//end method
    public function DesignationEdit($id){
        $data['editData'] = Designation::where('id',$id)->first();
        return view('backend.setup.designation.designation_edit',$data);
    }//end method
    public function DesignationUpdate(Request $request,$id){
        $data = Designation::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:designations|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Designation Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Designation Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('designation.view')->with($notification);
    }//end method
    public function DesignationDelete($id){
        $data = Designation::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Designation Delete Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('designation.view')->with($notification);
    }

}