<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){
        $data['allData'] = User::all();
        return view('backend.user.view_user',$data);
    }

    public function StoreUser(Request $request){

        $data = new User();
        //Validator
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|unique:users|max:255',
        // ]);
        // if ($validator->fails()) {
        //     $notification = array(
        //         'message' => 'Email Already Exist.',
        //         'alert-type' => 'info'
        //     );
        //     return redirect()->back()->with($notification);
        // }//end if
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->avatar = 0;
        $data->password = bcrypt($request->password);
        $data->save();


        $notification = array(
            'message' => 'User Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('user.view')->with($notification);
    }

    public function UserEdit($id){
        $editData = User::find($id);
        return view('backend.user.edit_user',compact('editData'));
    }

    public function UpdateUser(Request $request, $id){
        $data = User::find($id);
        //Validator
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|unique:users|max:255',
        // ]);
        // if ($validator->fails()) {
        //     $notification = array(
        //         'message' => 'Email Already Exist.',
        //         'alert-type' => 'info'
        //     );
        //     return redirect()->back()->with($notification);
        // }//end if
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.view')->with($notification);
    }
    public function UserDelete($id){
        $data = User::find($id);
        $data->delete();
        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('user.view')->with($notification);

    }
}
