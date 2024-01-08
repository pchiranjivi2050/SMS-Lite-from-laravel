<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\FeeCategoryAmount;
use App\Models\StudentClass;
use App\Models\AccountFeeCategory;
class AccountFeeAmountController extends Controller
{
    public function FeeAmountView(){
        $data['allData'] = FeeCategoryAmount::select('fee_category_id')->groupBy('fee_category_id')->get();
        $data['fee_categories'] = AccountFeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.fee_amount_view',$data);
    }//end method
    public function FeeAmountAdd(Request $request){
        $countClass = count($request->class_id);
        if ($countClass != NULL) {
            for ($i=0; $i < $countClass ; $i++) { 
                $fee_amount = new FeeCategoryAmount();
                $fee_amount->fee_category_id = $request-> fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();
            }// End For Loop
        } // End If Condition
        $notification = array(
            'message' => 'Fee Amount Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('fee.amount.view')->with($notification);
    }//end method
    public function FeeAmountEdit($fee_category_id){
        $data['editData'] = FeeCategoryAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
        $data['detailsData'] = FeeCategoryAmount::where('fee_category_id',$fee_category_id)->orderBy('class_id','asc')->get();
        //dd($data['editData']->toArray());
        $data['fee_categories'] = AccountFeeCategory::all();
        $data['classes'] = StudentClass::all();
        return view('backend.setup.fee_amount.edit_fee_amount',$data);
    }//end method
    public function FeeAmountUpdate(Request $request,$fee_category_id){
        if ($request->class_id == Null) {
           
            $notification = array(
                'message' => 'Sorry you do not Select any class amount',
                'alert-type' => 'error'
            );
            return redirect()->route('fee.amount.edit',$fee_category_id)->with($notification);
       
        }else {
            
            $countClass = count($request->class_id);
            FeeCategoryAmount::where('fee_category_id',$fee_category_id)->delete();
            for ($i=0; $i < $countClass ; $i++) { 
                $fee_amount = new FeeCategoryAmount();
                $fee_amount->fee_category_id = $request-> fee_category_id;
                $fee_amount->class_id = $request->class_id[$i];
                $fee_amount->amount = $request->amount[$i];
                $fee_amount->save();

               
              }// End For Loop

        }//end else condition
        $notification = array(
            'message' => 'Data Updated SuccessFully. ',
            'alert-type' => 'success'
        );
        return redirect()->route('fee.amount.view')->with($notification);
    }// end method
    
}
