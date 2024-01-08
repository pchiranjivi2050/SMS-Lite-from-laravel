<?php

namespace App\Http\Controllers\Backend\Assignment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\StudentSection;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;


class AssignmentController extends Controller
{
    public function StudentAssignView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['date'] = $nepaliYear;
        $data['classes'] = StudentClass::all();
        $data['years'] = StudentYear::all();
        $data['sections'] = StudentSection::all();
        return view('backend.assign.student_assign.student_assign_view',$data);
    }
    public function StudentAssignStore(){
        return view('backend.assign.student_assign.student_assign_store');
    }
}
