<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoanPay extends Model
{
    public function employee(){
        return $this->belongsTo(User::class, 'employee_id','id');
    }
    public function designation(){
        return $this->belongsTo(Designation::class, 'designation_id','id');
    }
    public function loan(){
        return $this->belongsTo(EmployeeLoan::class, 'loan_no','loan_no');
    }
}
