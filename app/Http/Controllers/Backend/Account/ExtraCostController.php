<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExtraCost;
use DB;
class ExtraCostController extends Controller
{
    public function ExtraCostView(){
        
        $ids = DB::table('extra_costs')->orderBy('id', 'DESC')->first();
        if($ids == null){
            $cost_id = '1';
        }else{
            $cost_id = $ids->cost_id + 1 ;
        }
        $finalCostid = $cost_id; 

        $data['allData'] = ExtraCost::select('cost_id','bill_no','vendor_name','total_amount','bill_date')->groupBy('cost_id')->groupBy('bill_date')->groupBy('bill_no')->groupBy('vendor_name')->groupBy('total_amount')->orderBy('id','DESC')->get();
        return view('backend.account.extra_cost.extra_cost_view',$data,compact('finalCostid'));
    }//end Method
    public function ExtraCostStore(Request $request){
        $countItem = count($request->item_name);

        for ($i=0; $i < $countItem; $i++) { 
            $data = new ExtraCost;
            $data->cost_id = $request->cost_id;
            $data->bill_no = $request->bill_no;
            $data->bill_date = date('Y-m-d',strtotime($request->bill_date));
            $data->vendor_name = $request->vendor_name;
            $data->pan_vat_no = $request->pan_vat_no;
            $data->total_price = $request->total_price;
            $data->discount = $request->discount;
            $data->total_amount = $request->total_amount;
            $data->description = $request->description;

            $data->item_name = $request->item_name[$i];
            $data->quantity = $request->quantity[$i];
            $data->price = $request->price[$i];
            $data->save();
        }//end loop
        $notification = array(
            'message' => 'Bill Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }//End Method
    public function ExtraCostEdit($cost_id){
        $data['editData'] = ExtraCost::where('cost_id',$cost_id)->get();
        return view('backend.account.extra_cost.extra_cost_edit',$data);
    }//end Method
    public function ExtraCostUpdate(Request $request){

        ExtraCost::where('cost_id',$request->cost_id)->delete();
        $countItem = count($request->item_name);
        for ($i=0; $i < $countItem; $i++) { 
            $data = new ExtraCost;
            $data->cost_id = $request->cost_id;
            $data->bill_no = $request->bill_no;
            $data->bill_date = date('Y-m-d',strtotime($request->bill_date));
            $data->vendor_name = $request->vendor_name;
            $data->pan_vat_no = $request->pan_vat_no;
            $data->total_price = $request->total_price;
            $data->discount = $request->discount;
            $data->total_amount = $request->total_amount;
            $data->description = $request->description;

            $data->item_name = $request->item_name[$i];
            $data->quantity = $request->quantity[$i];
            $data->price = $request->price[$i];
            $data->save();
        }//end loop
        $notification = array(
            'message' => 'Bill Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('extra.cost.view')->with($notification);
    }//End Method
}
