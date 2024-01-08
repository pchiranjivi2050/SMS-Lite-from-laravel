<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentFee extends Model
{
    public function student(){
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
    public function assign_student(){
        return $this->belongsTo(StudentReg::class, 'id_no', 'id_no');
    }
    public function student_year(){
        return $this->belongsTo(StudentYear::class, 'year_id', 'id');
    }
    public function student_class(){
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }
    public function student_section(){
        return $this->belongsTo(StudentSection::class, 'section_id', 'id');
    }
    public function fee_category_amount(){
        return $this->belongsTo(FeeCategoryAmount::class, 'fee_category_id', 'id');
    }
    public function fee_category(){
        return $this->belongsTo(AccountFeeCategory::class, 'fee_category_id', 'id');
    }
    public function fee_remark(){
        return $this->belongsTo(FeeRemark::class, 'bill_no', 'bill_no');
    }
    public function exam_type(){
        return $this->belongsTo(ExamType::class, 'exam_type_id', 'id');
    }
}
