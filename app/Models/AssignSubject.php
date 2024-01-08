<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    public function subjects(){
        return $this->belongsTo(SchoolSubject::class, 'subject_id','id');
    }
    public function classes(){
        return $this->belongsTo(StudentClass::class, 'class_id','id');
    }
}
