<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\ExamType;
use App\Models\StudentSection;
use App\Models\AssignSubject;
use App\Models\StudentReg;
use App\Models\StudentMark;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;

class DefaultController extends Controller
{
    public function MarkGetSubject(Request $request){
        $class_id = $request->class_id;
        $allData = AssignSubject::with(['subjects'])->where('class_id',$class_id)->get();
        return response()->json($allData);
    }
}
