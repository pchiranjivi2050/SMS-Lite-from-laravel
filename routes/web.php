<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ActiveDeactiveController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\Setup\StudentYearController;
use App\Http\Controllers\Backend\Setup\StudentClassController;
use App\Http\Controllers\Backend\Setup\StudentSectionController;
use App\Http\Controllers\Backend\Setup\StudentGroupController;
use App\Http\Controllers\Backend\Setup\StudentShiftController;
use App\Http\Controllers\Backend\Setup\AccountFeeCategoryController;
use App\Http\Controllers\Backend\Setup\AccountFeeAmountController;
use App\Http\Controllers\Backend\Setup\SchoolSubjectController;
use App\Http\Controllers\Backend\Setup\AssignSubjectController;
use App\Http\Controllers\Backend\Setup\ExamTypeController;
use App\Http\Controllers\Backend\Setup\DesignationController;

use App\Http\Controllers\Backend\Student\StudentRegController;
use App\Http\Controllers\Backend\Student\StudentRollController;
use App\Http\Controllers\Backend\Student\StudentAttendController;
use App\Http\Controllers\Backend\Student\StudentExamController;
use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\Student\GradeController;

use App\Http\Controllers\Backend\Employee\EmployeeAddController;
use App\Http\Controllers\Backend\Employee\EmployeePromotionController;
use App\Http\Controllers\Backend\Employee\EmployeeAttendController;
use App\Http\Controllers\Backend\Employee\EmployeeLeaveController;

use App\Http\Controllers\Backend\Account\StudentFeeController;
use App\Http\Controllers\Backend\Account\EmployeeLoanController;
use App\Http\Controllers\Backend\Account\LoanPayController;
use App\Http\Controllers\Backend\Account\EmployeeSalaryController;
use App\Http\Controllers\Backend\Account\ExtraIncomeController;
use App\Http\Controllers\Backend\Account\ExtraCostController;

use App\Http\Controllers\Backend\Report\ExamReportController;
use App\Http\Controllers\Backend\Report\StdAttendReportController;
use App\Http\Controllers\Backend\Report\StdFeeReportController;

use App\Http\Controllers\Frontend\FrontEndController;
use App\Http\Controllers\Frontend\PortfolioController;



use App\Http\Controllers\SmsController;

use App\Http\Controllers\Backend\Assignment\AssignmentController;

use App\Http\Controllers\FullCalenderController;
use App\Http\Controllers\GalleryController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/login/view',[FrontEndController::class,'LoginView'])->name('login.view');
Route::get('/index',[FrontEndController::class,'SchoolWebsite'])->name('school.website');
Route::get('/team/view',[FrontEndController::class,'TeamView'])->name('team.view');
Route::get('/schoolprofile',[FrontEndController::class,'schoolprofileview'])->name('schoolprofile');



Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');
Route::group(['middleware' => 'auth'],function(){

//Profile All Route
Route::prefix('profile')->group(function(){
    Route::get('/general/setting',[SystemController::class,'GeneralSetting'])->name('general.setting.view');
    Route::post('/general/setting/update/{id}',[SystemController::class,'GeneralSettingUpdate'])->name('general.setting.update');
    Route::post('/update-school-details', 'SystemController@updateSchoolDetails')->name('updateSchoolDetails');

});


//User Management All Route
Route::prefix('users')->group(function(){
    Route::get('/user/view',[UserController::class,'UserView'])->name('user.view');
    Route::post('/user/store',[UserController::class,'StoreUser'])->name('user.store');
    Route::get('/user/edit/{id}',[UserController::class,'UserEdit'])->name('user.edit');
    Route::post('/user/Update/{id}',[UserController::class,'UpdateUser'])->name('update.user');
    Route::get('/user/delete/{id}',[UserController::class,'UserDelete'])->name('user.delete');
    //Active or Deactive User
    Route::get('/active/deactive/view',[ActiveDeactiveController::class,'ActiveDeactiveView'])->name('active.user.view');
    Route::post('/active/deactive/Store',[ActiveDeactiveController::class,'ActiveDeactiveStore'])->name('active.or.deactive');

});
//Profile All Route
Route::prefix('profile')->group(function(){
    Route::get('/Profile/view',[ProfileController::class,'ProfileView'])->name('profile.view');
    Route::post('/Profile/update',[ProfileController::class,'ProfileUpdate'])->name('profile.update');
    Route::post('/update-school-details', 'SystemController@updateSchoolDetails')->name('updateSchoolDetails');

});

//School Management All Route
Route::prefix('school_setup')->group(function(){
    //Student Year Routes
    Route::get('/student/year/view',[StudentYearController::class,'StudentYearView'])->name('student.year.view');
    Route::post('/year/store',[StudentYearController::class,'YearStore'])->name('year.store');
    Route::get('/year/edit/{id}',[StudentYearController::class,'YearEdit'])->name('year.edit');
    Route::post('/year/update/{id}',[StudentYearController::class,'YearUpdate'])->name('update.year');
    Route::get('/year/delete/{id}',[StudentYearController::class,'YearDelete'])->name('delete.year');
    //Student Class Routes
    Route::get('/student/class/view',[StudentClassController::class,'StudentClassView'])->name('student.class.view');
    Route::post('/class/store',[StudentClassController::class,'ClassStore'])->name('class.store');
    Route::get('/class/edit/{id}',[StudentClassController::class,'ClassEdit'])->name('class.edit');
    Route::post('/class/update/{id}',[StudentClassController::class,'ClassUpdate'])->name('update.class');
    Route::get('/class/delete/{id}',[StudentClassController::class,'ClassDelete'])->name('class.delete');
    //Student Class Section Routes
    Route::get('/student/section/view',[StudentSectionController::class,'StudentSectionView'])->name('student.section.view');
    Route::post('/class/section/store',[StudentSectionController::class,'ClassSectionStore'])->name('class.section.store');
    Route::get('/class/section/edit/{id}',[StudentSectionController::class,'ClassSectionEdit'])->name('class.section.edit');
    Route::post('/class/section/update/{id}',[StudentSectionController::class,'ClassSectionUpdate'])->name('update.class.section');
    Route::get('/class/section/delete/{id}',[StudentSectionController::class,'ClassSectionDelete'])->name('class.section.delete');
    //Student Group Routes
    Route::get('/student/group/view',[StudentGroupController::class,'StudentGroupView'])->name('student.group.view');
    Route::post('/group/store',[StudentGroupController::class,'GroupStore'])->name('group.store');
    Route::get('/group/edit/{id}',[StudentGroupController::class,'GroupEdit'])->name('group.edit');
    Route::post('/group/update/{id}',[StudentGroupController::class,'GroupUpdate'])->name('update.group');
    Route::get('/group/delete/{id}',[StudentGroupController::class,'GroupDelete'])->name('group.delete');
    //Student Shift Routes
    Route::get('/student/shift/view',[StudentShiftController::class,'StudentShiftView'])->name('student.shift.view');
    Route::post('/shift/store',[StudentShiftController::class,'ShiftStore'])->name('shift.store');
    Route::get('/shift/edit/{id}',[StudentShiftController::class,'ShiftEdit'])->name('shift.edit');
    Route::post('/shift/update/{id}',[StudentShiftController::class,'ShiftUpdate'])->name('update.shift');
    Route::get('/shift/delete/{id}',[StudentShiftController::class,'ShiftDelete'])->name('shift.delete');
    //Student Subject Routes
    Route::get('/school/subject/view',[SchoolSubjectController::class,'SchoolSubjectView'])->name('school.subject.view');
    Route::post('/school/subject/Store',[SchoolSubjectController::class,'SchoolSubjectStore'])->name('subject.store');
    Route::get('/school/subject/edit/{id}',[SchoolSubjectController::class,'SchoolSubjectEdit'])->name('subject.edit');
    Route::post('/school/subject/update/{id}',[SchoolSubjectController::class,'SchoolSubjectUpdate'])->name('subject.update');
    Route::get('/school/subject/delete/{id}',[SchoolSubjectController::class,'SchoolSubjectDelete'])->name('subject.delete');
    //Assign Subject Routes
    Route::get('/assign/subject/view',[AssignSubjectController::class,'AssignSubjectView'])->name('assign.subject.view');
    Route::post('/assign/subject/store',[AssignSubjectController::class,'AssignSubjectStore'])->name('assign.subject.store');
    Route::get('/assign/subject/edit/{class_id}',[AssignSubjectController::class,'AssignSubjectEdit'])->name('assign.subject.edit');
    Route::post('/assign/subject/update/{class_id}',[AssignSubjectController::class,'AssignSubjectUpdate'])->name('assign.subject.update');
    //Exam Type  Routes
    Route::get('/exam/type/view',[ExamTypeController::class,'ExamTypeView'])->name('exam.type.view');
    Route::post('/exam/type/add',[ExamTypeController::class,'ExamTypeStore'])->name('exam.type.store');
    Route::get('/exam/type/edit/{id}',[ExamTypeController::class,'ExamTypeEdit'])->name('exam.type.edit');
    Route::post('/exam/type/update/{id}',[ExamTypeController::class,'ExamTypeUpdate'])->name('exam.type.update');
    Route::get('/exam/type/delete/{id}',[ExamTypeController::class,'ExamTypeDelete'])->name('exam.type.delete');
    //Fee Category Routes
    Route::get('/fee/category/view',[AccountFeeCategoryController::class,'FeeCategoryView'])->name('account.fee.category.view');
    Route::post('/fee/category/store',[AccountFeeCategoryController::class,'FeeCategoryStore'])->name('fee.category.store');
    Route::get('/fee/category/edit/{id}',[AccountFeeCategoryController::class,'FeeCategoryEdit'])->name('fee.category.edit');
    Route::post('/fee/category/update/{id}',[AccountFeeCategoryController::class,'FeeCategoryUpdate'])->name('fee.category.update');
    Route::get('/fee/category/delete/{id}',[AccountFeeCategoryController::class,'FeeCategoryDelete'])->name('fee.category.delete');
    //Fee Category Amount Routes
    Route::get('/fee/amount/view',[AccountFeeAmountController::class,'FeeAmountView'])->name('fee.amount.view');
    Route::post('/fee/amount/add',[AccountFeeAmountController::class,'FeeAmountAdd'])->name('fee.amount.add');
    Route::get('/fee/amount/edit/{fee_category_id}',[AccountFeeAmountController::class,'FeeAmountEdit'])->name('fee.amount.edit');
    Route::post('/fee/amount/update/{fee_category_id}',[AccountFeeAmountController::class,'FeeAmountUpdate'])->name('fee.amount.update');
    //Fee Category Amount Routes
    Route::get('/designation/view',[DesignationController::class,'DesignationView'])->name('designation.view');
    Route::post('/designation/store',[DesignationController::class,'DesignationStore'])->name('designation.store');
    Route::get('/designation/edit/{id}',[DesignationController::class,'DesignationEdit'])->name('designation.edit');
    Route::post('/designation/update/{id}',[DesignationController::class,'DesignationUpdate'])->name('update.designation');
    Route::get('/designation/delete/{id}',[DesignationController::class,'DesignationDelete'])->name('designation.delete');

});
Route::prefix('student')->group(function(){
    //Student Registration Routes
    Route::get('/student/reg/view',[StudentRegController::class,'StudentRegView'])->name('student.registration.view');
    Route::post('/student/reg/store',[StudentRegController::class,'StudentStore'])->name('student.store');
    Route::get('/student/reg/edit/{student_id}',[StudentRegController::class,'StudentEdit'])->name('student.edit');
    Route::post('/student/reg/update/{student_id}',[StudentRegController::class,'StudentUpdate'])->name('student.update');
    Route::get('/student/reg/details/{student_id}',[StudentRegController::class,'StudentDetails'])->name('student.details');
    Route::get('/student/reg/promotion/{student_id}',[StudentRegController::class,'StudentPromotion'])->name('student.promotion');
    Route::post('/student/reg/upgrade/{student_id}',[StudentRegController::class,'StudentUpgrade'])->name('student.upgrade');
    //Student Registration Routes
    Route::get('/student/roll/view',[StudentRollController::class,'StudentRollView'])->name('student.roll.view');
    Route::get('/roll/get/student',[StudentRollController::class,'RollGetStudent'])->name('roll.get.student');
    Route::post('/student/roll/store',[StudentRollController::class,'StudentRollStore'])->name('student.roll.store');
    //Student Attendence Routes
    Route::get('/student/attendence/view',[StudentAttendController::class,'StudentAttendView'])->name('student.attendence.view');
    Route::get('/student/attendence/add',[StudentAttendController::class,'StudentAttendAdd'])->name('student.attend.add');
    Route::post('/student/attendence/store',[StudentAttendController::class,'StudentAttendStore'])->name('student.attend.store');
    Route::get('/attend/classwise/edit/{year_id}/{class_id}/{section_id}',[StudentAttendController::class,'AttendClasswiseEdit'])->name('attend.classwise.edit');
    Route::get('/attend/datewise/edit/{year_id}/{class_id}/{section_id}/{date}',[StudentAttendController::class,'AttendDatewiseEdit'])->name('attend.datewise.edit');

});
Route::prefix('student_assign')->group(function(){
    //Student Registration Routes
    Route::get('/student/assign/view',[AssignmentController::class,'StudentAssignView'])->name('student.assign.view');
    Route::get('/student/assign/add',[AssignmentController::class,'StudentAssignStore'])->name('student.assign.store');

});
Route::prefix('marke')->group(function(){
    //Student Marks Routes
    Route::get('/mark/entry/view',[StudentExamController::class,'MarkEntryView'])->name('mark.entry.view');
    Route::post('/mark/entry/add',[StudentExamController::class,'MarkEntryAdd'])->name('mark.entry.add');
    Route::post('/mark/entry/store',[StudentExamController::class,'MarkEntryStore'])->name('mark.entry.store');
    Route::get('/mark/entry/edit',[StudentExamController::class,'MarkEntryEdit'])->name('mark.entry.edit');
    Route::post('/mark/entryedit/add',[StudentExamController::class,'MarkEntryEditAdd'])->name('mark.entryedit.add');
    Route::post('/mark/entry/update',[StudentExamController::class,'MarkEntryUpdate'])->name('mark.entry.update');
    //Student Grade Routes
    Route::get('/mark/grade/view',[GradeController::class,'MarkGradeView'])->name('mark.grade.view');
    Route::post('/mark/grade/store',[GradeController::class,'MarkGradeStore'])->name('grade.store');
    Route::get('/mark/grade/edit/{id}',[GradeController::class,'MarkGradeEdit'])->name('grade.edit');
    Route::post('/mark/grade/update/{id}',[GradeController::class,'MarkGradeUpdate'])->name('grade.update');
    Route::get('/mark/grade/delete/{id}',[GradeController::class,'MarkGradeDelete'])->name('grade.delete');

});
//Student Marks Routes
Route::get('/mark/getsubject',[DefaultController::class,'MarkGetSubject'])->name('marks.getsubject');
//Employee Management All Route
Route::prefix('employee')->group(function(){
    Route::get('/employee/view',[EmployeeAddController::class,'EmployeeView'])->name('employee.view');
    Route::post('/employee/store',[EmployeeAddController::class,'EmployeeStore'])->name('employee.store');
    Route::get('/employee/edit/{employee_id}',[EmployeeAddController::class,'EmployeeEdit'])->name('employee.edit');
    Route::post('/employee/update/{employee_id}',[EmployeeAddController::class,'EmployeeUpdate'])->name('employee.update');
    //Employee Promotion Routes
    Route::get('/employee/promotion/{employee_id}',[EmployeePromotionController::class,'EmployeePromotion'])->name('employee.promotion');
    Route::post('/promotion/store',[EmployeePromotionController::class,'PromotionStore'])->name('promotion.store');
    //Employee Attendance
    Route::get('/employee/attend/view',[EmployeeAttendController::class,'EmployeeAttendView'])->name('employee.attend.view');
    Route::get('/employee/attend/add',[EmployeeAttendController::class,'EmployeeAttendAdd'])->name('employee.attend.add');
    Route::post('/employee/attend/store',[EmployeeAttendController::class,'EmployeeAttendStore'])->name('employee.attend.store');
    Route::get('/employee/attend/edit/{date}',[EmployeeAttendController::class,'EmployeeAttendEdit'])->name('employee.attend.edit');
     //Employee Leave
     Route::get('/employee/leave/view',[EmployeeLeaveController::class,'EmployeeLeaveView'])->name('employee.leave.view');
     Route::get('/employee/leave/get',[EmployeeLeaveController::class,'EmployeeLeaveGet'])->name('employee.leave.get');
     Route::post('/employee/leave/store',[EmployeeLeaveController::class,'EmployeeLeaveStore'])->name('employee.leave.store');
     Route::get('/employee/leave/edit/{employee_id}',[EmployeeLeaveController::class,'EmployeeLeaveEdit'])->name('employee.leave.edit');
     Route::post('/employee/leave/update/{id}',[EmployeeLeaveController::class,'EmployeeLeaveUpdate'])->name('employee.leave.update');


});
//Account Management All Route
Route::prefix('school_account')->group(function(){
    //Student Fee Routes
    Route::get('/student/fee/collection',[StudentFeeController::class,'FeeCollection'])->name('student.fee.collection');
    Route::get('/fee/get/student',[StudentFeeController::class,'FeeGetStudent'])->name('fee.get.student');
    Route::post('/fee/bill/store',[StudentFeeController::class,'FeeBillStore'])->name('fee.bill.store');
    //employee Loan Routes
    Route::get('/employee/loan/view',[EmployeeLoanController::class,'EmployeeLoanView'])->name('employee.loan.view');
    Route::get('/employee/loan/get',[EmployeeLoanController::class,'EmployeeLoanGet'])->name('employee.loan.get');
    Route::post('/employee/loan/store',[EmployeeLoanController::class,'EmployeeLoanStore'])->name('employee.loan.store');
    //Employee Loan Pay Routes
    Route::get('/employee/loan/pay/{loan_no}/{employee_id}/{designation_id}',[LoanPayController::class,'EmployeeLoanPay'])->name('employee.loan.pay');
    Route::post('/loan/pay/store',[LoanPayController::class,'LoanPayStore'])->name('loan.pay.store');
    Route::get('/loan/pay/detail/{loan_no}/{employee_id}/{designation_id}',[LoanPayController::class,'LoanPayDetail'])->name('loan.pay.detail');
    //employee Salary Routes
    Route::get('/employee/salary/view',[EmployeeSalaryController::class,'EmployeeSalaryView'])->name('employee.salary.view');
    Route::get('/employee/salary/get',[EmployeeSalaryController::class,'EmployeeSalaryGet'])->name('employee.salary.get');
    Route::post('/employee/salary/store',[EmployeeSalaryController::class,'EmployeeSalaryStore'])->name('employee.salary.store');

    Route::get('/salary/sms/send/{id}',[SmsController::class,'EmployeeSalarySms'])->name('salary.sms.send');
    //Extra Income Routes
    Route::get('/extra/income/view',[ExtraIncomeController::class,'ExtraIncomeView'])->name('extra.income.view');
    Route::post('/extra/income/store',[ExtraIncomeController::class,'ExtraIncomeStore'])->name('extra.income.store');
   //Extra Cost Routes
   Route::get('/extra/cost/view',[ExtraCostController::class,'ExtraCostView'])->name('extra.cost.view');
   Route::post('/extra/cost/store',[ExtraCostController::class,'ExtraCostStore'])->name('extra.cost.store');
   Route::get('/extra/cost/edit/{cost_id}',[ExtraCostController::class,'ExtraCostEdit'])->name('extra.cost.edit');
   Route::post('/extra/cost/update',[ExtraCostController::class,'ExtraCostUpdate'])->name('extra.cost.update');

});

//Report All Route
Route::prefix('report')->group(function(){
    //Student Exam Report Routes
    Route::get('/exam/report/view',[ExamReportController::class,'ExamReportView'])->name('exam.report.view');
    Route::get('/exam/report/get',[ExamReportController::class,'ExamReportGet'])->name('exam.report.get');
    //Student Attend Report Routes
    Route::get('/attend/report/view',[StdAttendReportController::class,'AttendReportView'])->name('attend.report.view');
    Route::get('student/attend/report',[StdAttendReportController::class,'StudentAttendReport'])->name('student.attend.report');
    //Student Attend Report Routes
    Route::get('/fee/report/view',[StdFeeReportController::class,'FeeReportView'])->name('fee.report.view');
    Route::get('/fee/report/get',[StdFeeReportController::class,'FeeReportGet'])->name('fee.report.get');
    Route::get('/fee/bill/get/{id}',[StdFeeReportController::class,'FeeBillGet'])->name('fee.bill.get');

});

//Portfolio All Route
Route::prefix('portfolio')->group(function(){
    //Student Exam Report Routes
    Route::get('/portfolio/setting',[PortfolioController::class,'PortfolioSetting'])->name('portfolio.setting.view');
    Route::post('/portfolio/update/{id}',[PortfolioController::class,'PortfolioUpdate'])->name('portfolio.setting.update');
    Route::post('/update-school-details', 'SystemController@updateSchoolDetails')->name('updateSchoolDetails');
    
    



});

});// End Middleare Auth Route
