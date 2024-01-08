<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentMark extends Model
{
    public function student(){
        return $this->belongsTo(User::class, 'id_no', 'id_no');
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
    public function exam_type(){
        return $this->belongsTo(ExamType::class, 'exam_type_id', 'id');
    }
    public function subjects(){
        return $this->belongsTo(AssignSubject::class, 'assign_subject_id', 'id');
    }
}
