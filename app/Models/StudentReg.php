<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentReg extends Model
{
    public function student(){
        return $this->belongsTo(User::class,'student_id','id');
    }
    public function student_class(){
        return $this->belongsTo(StudentClass::class,'class_id','id');
    }
    public function student_year(){
        return $this->belongsTo(StudentYear::class,'year_id','id');
    }
    public function student_group(){
        return $this->belongsTo(StudentGroup::class,'group_id','id');
    }
    public function student_shift(){
        return $this->belongsTo(StudentShift::class,'shift_id','id');
    }
    public function student_section(){
        return $this->belongsTo(StudentSection::class,'section_id','id');
    }
}
