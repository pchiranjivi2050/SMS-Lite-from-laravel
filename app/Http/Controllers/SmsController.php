<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeSalary;
use DB;
use Illuminate\Notifications\Notifiable;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function EmployeeSalarySms($id){
        $salary = DB::table('employee_salaries')->where('id',$id)->first();
        $paid_salary = $salary->paid_salary;
        //dd($paid_salary);

        Nexmo::message()->send([
            'to'   => '9779862133755',
            'from' => '9779814358885',
            'text' => 'Your Monthly Salary This Month is '.$paid_salary.'.'
        ]);
        $notification = array(
            'message' => 'Sms Sent Successfully',
            'alert-type' => 'success'
        );
            return redirect()->back()->with($notification);
    }
}
