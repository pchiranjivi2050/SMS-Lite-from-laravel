<?php

namespace App\Http\Controllers\Backend\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use App\Models\ExtraIncome;
class ExtraIncomeController extends Controller
{
    public function ExtraIncomeView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];

        $bills = DB::table('student_fees')->orderBy('bill_no', 'DESC')->first();
        $billcng = substr($bills->bill_no, 0, 4);
        if($bills == null){
            $billno = $nepaliYear . 0 . 0 . 0 . 1 ;
        }elseif($billcng == $nepaliYear){
            $billno = $bills->bill_no + '1' ;
        }else{
            $billno = $nepaliYear . 0 . 0 . 0 . 1 ;
        }
        
        $finalBill = $billno;
        $data['allData'] = ExtraIncome::all();
        return view('backend.account.extra_income.extra_income_view',$data,compact('finalBill'));
    }//end method
    public function ExtraIncomeStore(Request $request){
        $countItem = count($request->item_name);
        for ($i=0; $i < $countItem; $i++) { 
            $data = new ExtraIncome;
            $data->bill_no = $request->bill_no;
            $data->date = date('Y-m-d',strtotime($request->date));
            $data->amount = $request->total_price;
            $data->discount = $request->discount;
            $data->total_amount = $request->total_amount;
            $data->remarks = $request->description;

            $data->item_name = $request->item_name[$i];
            $data->quantity = $request->quantity[$i];
            $data->price = $request->price[$i];
            $data->save();
        }//end loop
        $notification = array(
            'message' => 'Bill Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('extra.income.view')->with($notification);
    }
}
