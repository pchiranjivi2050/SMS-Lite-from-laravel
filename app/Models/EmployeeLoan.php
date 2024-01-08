<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLoan extends Model
{
    public function employee(){
        return $this->belongsTo(User::class, 'employee_id','id');
    }
    public function designation(){
        return $this->belongsTo(Designation::class, 'designation_id','id');
    }
}
