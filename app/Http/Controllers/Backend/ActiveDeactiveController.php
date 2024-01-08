<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ActiveDeactiveController extends Controller
{
    public function ActiveDeactiveView(){
        $data['allData'] = User::all();
        return view('backend.user.user_status.user_status_view',$data);
    }//end method
    public function ActiveDeactiveStore(Request $request){
        $data = User::find($request->id);
        $data->status = $request->status;
        $data->save();
    if($request->status == '0'){
        $notification = array(
            'message' => 'User Deactive Successfully',
            'alert-type' => 'success'
        );
    }else{
        $notification = array(
            'message' => 'User Active Successfully',
            'alert-type' => 'success'
        );
    }

    return redirect()->route('active.user.view')->with($notification);
    }
}
