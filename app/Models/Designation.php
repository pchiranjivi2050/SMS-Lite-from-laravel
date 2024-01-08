<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function designation(){
        return $this->belongsTo(User::class, 'id','designation_id');
    }
}
