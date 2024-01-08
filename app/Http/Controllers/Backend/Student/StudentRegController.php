<?php

namespace App\Http\Controllers\Backend\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentClass;
use App\Models\StudentYear;
use App\Models\StudentGroup;
use App\Models\StudentShift;
use App\Models\StudentSection;
use App\Models\StudentReg;
use Nilambar\NepaliDate\NepaliDate;
use DB;
use PDF;
use Auth;


class StudentRegController extends Controller
{
    public function StudentRegView(){
        $obj = new NepaliDate();
        $year= date('Y');
        $month = date('m');
        $day = date('d');
        $dates = $obj->convertAdToBs($year, $month, $day);
        $nepaliYear = $dates['year'];
        $data['dates'] = $nepaliYear;
        $date = StudentYear::where('name',$nepaliYear)->first();
        $finalDate = $date->id;
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        $usertype = $user->usertype;
        if($usertype == 'Admin'){
            $data['allData'] = StudentReg::with(['student'])->orderBy('id','Desc')->get();
        }else{
        $data['allData'] = StudentReg::with(['student'])->where('year_id',$finalDate)->orderBy('id','Desc')->get();
        }//end if
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();
        return view('backend.student.student_reg.student_reg_view',$data);
    }// end method
    public function StudentStore(Request $request){
        DB::transaction(function() use($request){
        $checkYear = StudentYear::find($request->year_id)->name;
        $student = User::where('usertype','Student')->orderBy('id','DESC')->first();

        if ($student == null) {
            $firstReg = 0;
            $studentId = $firstReg+1;
            if ($studentId < 10) {
                $id_no = '000'.$studentId;
            }elseif ($studentId < 100) {
                $id_no = '00'.$studentId;
            }elseif ($studentId < 1000) {
                $id_no = '0'.$studentId;
            }
        }else{
        $student = User::where('usertype','Student')->orderBy('id','DESC')->first()->id;
        $studentId = $student+1;
        if ($studentId < 10) {
                $id_no = '000'.$studentId;
            }elseif ($studentId < 100) {
                $id_no = '00'.$studentId;
            }elseif ($studentId < 1000) {
                $id_no = '0'.$studentId;
            }

        } // end else

        $final_id_no = $checkYear.$id_no;
        $user = new user();
        $user->id_no = $final_id_no;
        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->dob = date('Y-m-d',strtotime($request->dob));
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->avatar = 0;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $user['image'] = $filename;
        }
        $code = rand(0000,9999);
        $user->code = $code;
        $user->password = bcrypt($code);
        $user->usertype = 'Student';
        $user->save();


        $assign_student = new StudentReg();
        $assign_student->student_id = $user->id;
        $assign_student->class_id = $request->class_id;
        $assign_student->year_id = $request->year_id;
        $assign_student->section_id = $request->section_id;
        $assign_student->group_id = $request->group_id;
        $assign_student->shift_id = $request->shift_id;
        $assign_student->id_no = $user->id_no;
        $assign_student->pre_school = $request->pre_school;
        $assign_student->pre_school_address = $request->pre_school_address;
        $assign_student->reason = $request->reason;
        $assign_student->pre_class = $request->pre_class;
        $assign_student->health = $request->health;
        $assign_student->transport = $request->transport;
        $assign_student->reg_date  = date('Y-m-d',strtotime($request->reg_date));
        $assign_student->pre_leaving  = date('Y-m-d',strtotime($request->pre_leaving));
        $assign_student->pre_admission  = date('Y-m-d',strtotime($request->pre_admission));
        if($request->file('birth_certificate')){
            $file = $request->file('birth_certificate');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_image/birth_certificate'),$filename);
            $assign_student['birth_certificate'] = $filename;
        }
        if($request->file('pre_marksheet')){
            $file = $request->file('pre_marksheet');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_image/pre_marksheet'),$filename);
            $assign_student['pre_marksheet'] = $filename;
        }
        $assign_student->save();
    });

    $notification = array(
        'message' => 'Student Registration Inserted Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('student.registration.view')->with($notification);
    }//end Method
    public function StudentEdit($student_id){
        $data['editData'] = StudentReg::with(['student'])->where('student_id',$student_id)->first();
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();
        return view('backend.student.student_reg.student_reg_edit',$data);
    }// End Method
    public function StudentUpdate(Request $request,$student_id){

        $assign_student = StudentReg::where('id',$request->id)->where('student_id',$student_id)->first();
        $assign_student->class_id = $request->class_id;
        $assign_student->year_id = $request->year_id;
        $assign_student->section_id = $request->section_id;
        $assign_student->group_id = $request->group_id;
        $assign_student->shift_id = $request->shift_id;
        $assign_student->pre_school = $request->pre_school;
        $assign_student->pre_school_address = $request->pre_school_address;
        $assign_student->reason = $request->reason;
        $assign_student->pre_class = $request->pre_class;
        $assign_student->health = $request->health;
        $assign_student->transport = $request->transport;
        $assign_student->reg_date  = date('Y-m-d',strtotime($request->reg_date));
        $assign_student->pre_leaving  = date('Y-m-d',strtotime($request->pre_leaving));
        $assign_student->pre_admission  = date('Y-m-d',strtotime($request->pre_admission));
        if($request->file('birth_certificate')){
            $file = $request->file('birth_certificate');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_image/birth_certificate'),$filename);
            $assign_student['birth_certificate'] = $filename;
        }
        if($request->file('pre_marksheet')){
            $file = $request->file('pre_marksheet');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/student_image/pre_marksheet'),$filename);
            $assign_student['pre_marksheet'] = $filename;
        }
        $assign_student->save();

        $user = User::where('id',$student_id)->first();
        $user->name = $request->name;
        $user->fname = $request->fname;
        $user->mname = $request->mname;
        $user->dob = date('Y-m-d',strtotime($request->dob));
        $user->address = $request->address;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->blood_group = $request->blood_group;
        $user->religion = $request->religion;
        if($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_image'),$filename);
            $user['image'] = $filename;
        }
        $user->save();

        $notification = array(
            'message' => 'Student Registration Updated Successfully',
            'alert-type' => 'info'
        );
        return redirect()->route('student.registration.view')->with($notification);
    }//end Method
    public function StudentDetails($student_id){
        $data['details'] = StudentReg::with(['student','student_year','student_class','student_section','student_group','student_shift'])->where('student_id',$student_id)->first();

		$pdf = PDF::loadView('backend.student.student_reg.student_details_pdf', $data);
		$pdf->SetProtection(['copy', 'print'], '', 'pass');
		return $pdf->stream('StudentReg.pdf');
    }//end Method
    public function StudentPromotion($student_id){
        $data['editData'] = StudentReg::with(['student'])->where('student_id',$student_id)->first();
        $data['years'] = StudentYear::all();
        $data['classes'] = StudentClass::all();
        $data['sections'] = StudentSection::all();
        $data['shifts'] = StudentShift::all();
        $data['groups'] = StudentGroup::all();
        return View('backend.student.student_reg.student_promotion',$data);
    }//
    public function StudentUpgrade(Request $request, $student_id){
        DB::transaction(function() use($request,$student_id){
        $assign_student = new StudentReg();
        $assign_student->id_no = $request->id_no;
        $assign_student->student_id = $student_id;
        $assign_student->class_id = $request->class_id;
        $assign_student->year_id = $request->year_id;
        $assign_student->section_id = $request->section_id;
        $assign_student->group_id = $request->group_id;
        $assign_student->shift_id = $request->shift_id;
        $assign_student->transport = $request->transport;
        $assign_student->reg_date  = date('Y-m-d',strtotime($request->reg_date));
        $assign_student->save();
    });

    $notification = array(
        'message' => 'Student Promotion To Next Class Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('student.registration.view')->with($notification);
    }
}
