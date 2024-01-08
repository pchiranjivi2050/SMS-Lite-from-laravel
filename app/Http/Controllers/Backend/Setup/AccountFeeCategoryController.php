<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\AccountFeeCategory;

class AccountFeeCategoryController extends Controller
{
    public function FeeCategoryView(){
        $data['allData'] = AccountFeeCategory::all();
        return view('backend.setup.fee.fee_category_view',$data);
    }// end Method\
    public function FeeCategoryStore(Request $request){
        $data = new AccountFeeCategory();

        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:account_fee_categories|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Fee Category Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if
        $data->name = $request->name;
        $data->save();

        $notification = array(
            'message' => 'Fee Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }// end method
    public function FeeCategoryEdit($id){
        $data['editData'] = AccountFeeCategory::find($id);
        return view('backend.setup.fee.fee_category_edit',$data);
    }//end method
    public function FeeCategoryUpdate(Request $request, $id){
        $data = AccountFeeCategory::find($id);
        //Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:account_fee_categories|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Fee Category Already Exist.',
                'alert-type' => 'info'
            );
            return redirect()->back()->with($notification);
        }//end if

        $data->name = $request->name;
        $data->save();
        $notification = array(
            'message' => 'Fee Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('account.fee.category.view')->with($notification);
    }//end method
    public function FeeCategoryDelete($id){
        $data = AccountFeeCategory::find($id);
        $data->delete();
        $notification = array(
            'message' => 'Fee Category Delete Successfully',
            'alert-type' => 'info'
        );
        return redirect()->back()->with($notification);
    }
}
