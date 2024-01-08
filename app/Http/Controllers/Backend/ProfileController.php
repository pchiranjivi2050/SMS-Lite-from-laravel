<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Designation;


class ProfileController extends Controller
{
    public function ProfileView(){
        $id = Auth::user()->id;
        $user = User::find($id);

        $userType = Auth::user()->usertype;
        
        $data['designations'] = Designation::all();
        if($userType == 'Admin'){
            return view('backend.user.view_profile',compact('user'));
        }elseif($userType == 'Employee'){
            return view('backend.user.view_employee_profile',$data,compact('user'));
        }else{
            return view('backend.user.view_student_profile',compact('user'));
        }
    }
    public function ProfileUpdate(Request $request){
        $data = User::find(Auth::user()->id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->gender = $request->gender;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->qualification = $request->qualification;
        $data->marital_status = $request->marital_status;
        $data->blood_group = $request->blood_group;
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->religion = $request->religion;
        $data->usertype = $request->usertype;

        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/user_image/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $data['image'] = $filename;
        }
        $data->save();
         
        $notification = array(
            'message' => 'User Profile Update Successfully',
            'alert-type' => 'success'
        );
            return redirect()->route('profile.view')->with($notification);
    }
    
    
}
