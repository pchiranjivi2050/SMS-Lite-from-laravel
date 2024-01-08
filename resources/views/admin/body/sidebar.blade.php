@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
$systemData = App\Models\System::all();
@endphp
@php
    $id = Auth::user()->id;
    $user = App\Models\User::find($id);
@endphp
 <!-- Left navbar-header -->
 @foreach($systemData as $system)
 <div class="navbar-default sidebar mt-2"  role="navigation">
            @endforeach
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{(!empty($user->image))? url('upload/user_image/'.$user->image):url('upload/no_image.jpg')}}" alt="user-img"  class="img-circle"> <span class="hide-menu" style="color:black;"><strong>{{$user->name}}</strong><span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('profile.view')}}" style="color:black;"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="{{ route('admin.logout') }}" style="color:black;"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <hr width="50%" style="border:0.5px solid;margin-top:0;margin-bottom:0;">
                    <!-- <li class="nav-small-cap">--- School Setup</li> -->
                    <li class="treeview {{($prefix == '/school_setup')?'active':''}}"> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="fa fa-mortar-board" style="color:black;"></i>  <span class="hide-menu" style="color:black;">Setup Management<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Student Management
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                <li class="{{($route == 'student.year.view')?'active':''}}" style="font-size:13px;"><a href="{{route('student.year.view')}}" style="color:black;">Student Year</a></li>
                                <li class="{{($route == 'student.class.view')?'active':''}}" style="font-size:13px;"><a href="{{route('student.class.view')}}" style="color:black;">Student Class</a></li>
                                <li class="{{($route == 'student.section.view')?'active':''}}" style="font-size:13px;"><a href="{{route('student.section.view')}}" style="color:black;">Student Class Section</a></li>
                                <li class="{{($route == 'student.group.view')?'active':''}}" style="font-size:13px;"><a href="{{route('student.group.view')}}" style="color:black;">Student Group</a></li>
                                <li class="{{($route == 'student.shift.view')?'active':''}}" style="font-size:13px;"><a href="{{route('student.shift.view')}}" style="color:black;">Student Shift</a></li>
                                <li class="{{($route == 'school.subject.view')?'active':''}}" style="font-size:13px;"><a href="{{route('school.subject.view')}}" style="color:black;">School Subject</a></li>
                                <li class="{{($route == 'assign.subject.view')?'active':''}}" style="font-size:13px;"><a href="{{route('assign.subject.view')}}" style="color:black;">Assign Subject</a></li>
                                <li class="{{($route == 'exam.type.view')?'active':''}}" style="font-size:13px;"><a href="{{route('exam.type.view')}}" style="color:black;">Exam Type</a></li>
                                </ul>
                            </li>
                            <li  style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Employee Management
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                <li class="{{($route == 'designation.view')?'active':''}}" style="font-size:13px;"><a href="{{route('designation.view')}}" style="color:black;">Designation</a></li>
                                </ul>
                            </li>
                            <li  style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Account Management
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                <li class="{{($route == 'account.fee.view')?'active':''}}" style="font-size:13px;"><a href="{{route('account.fee.category.view')}}" style="color:black;">Fee Category</a></li>
                                <li class="{{($route == 'fee.amount.view')?'active':''}}" style="font-size:13px;"><a href="{{route('fee.amount.view')}}" style="color:black;">Fee Amount</a></li>
                                </ul>
                            </li>

                            {{-- <li><a href="starter-page.html" style="color:black;">Extra Page</a></li> --}}
                        </ul>
                    </li>
                    <!-- <li class="nav-small-cap">---Student  Management</li> -->
                    <!--<li class="treeview {{($prefix == '/student')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-users" aria-hidden="true"></i>  <span class="hide-menu">Student Management<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                        <li class="{{($route == 'student.registration.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('student.registration.view')}}" style="color:black;">Student Registration</a> </li>
                        <li class="{{($route == 'student.roll.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('student.roll.view')}}" style="color:black;">Roll Generate</a> </li>
                        <li class="{{($route == 'student.attendence.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('student.attendence.view')}}" style="color:black;">Student Attendence</a> </li>
                        </ul>
                    </li> -->
                     <!-- <li class="nav-small-cap">---Assignment Management</li> -->
                   <!-- <li class="treeview {{($prefix == '/student_assign')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-user-secret" aria-hidden="true"></i>  <span class="hide-menu">Assignment Management<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                            <li class="{{($route == 'student.assign.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('student.assign.view')}}" style="color:black;">Student Assignment</a> </li>
                        </ul>
                    </li> -->
                    <!-- <li class="nav-small-cap">---Exam Management</li> -->
                    <!--<li class="treeview {{($prefix == '/marke')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  <span class="hide-menu">Exam Management<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                        <li class="{{($route == 'mark.entry.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('mark.entry.view')}}" style="color:black;">Marks Entry</a> </li>
                        <li class="{{($route == 'mark.entry.edit')?'active':''}}" style="font-size:13px;"> <a href="{{route('mark.entry.edit')}}" style="color:black;">Marks Edit</a> </li>
                        <li class="{{($route == 'mark.entry.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('mark.grade.view')}}" style="color:black;">Marks Grade</a> </li>
                        </ul>
                    </li> -->
                   <!-- <li class="nav-small-cap">---Employee Management</li> -->
                   <li class="treeview {{($prefix == '/employee')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-user-secret" aria-hidden="true"></i>  <span class="hide-menu">Employee Management<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                            <li class="{{($route == 'employee.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('employee.view')}}" style="color:black;">Employee Add</a> </li>
                            <!-- <li class="{{($route == 'employee.attend.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('employee.attend.view')}}" style="color:black;">Employee Attendence</a> </li> -->
                            <!--   <li class="{{($route == 'employee.leave.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('employee.leave.view')}}" style="color:black;">Employee Leave</a> </li> -->
                        </ul>
                    </li>
                    <!-- <li class="nav-small-cap">---School Account</li> -->
                    <!-- <li class="treeview {{($prefix == '/school_account')?'active':''}}"> <a href="#" class="waves-effect"><i data-icon="&#xe008;" class="fa fa-usd" style="color:black;"></i>  <span class="hide-menu" style="color:black;">School Account<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Student Fee
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                <li class="{{($route == 'student.fee.collection')?'active':''}}" style="font-size:13px;"><a href="{{route('student.fee.collection')}}" style="color:black;">Student Fee Collection</a></li>
                                </ul>
                            </li>
                            <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Extra Income
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li class="{{($route == 'extra.income.view')?'active':''}}" style="font-size:13px;"><a href="{{route('extra.income.view')}}" style="color:black;">Extra Income</a></li>
                                </ul>
                            </li>
                            <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Employee Salary/Loan
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                <li class="{{($route == 'employee.salary.view')?'active':''}}" style="font-size:13px;"><a href="{{route('employee.salary.view')}}" style="color:black;">Employee Salary</a></li>
                                <li class="{{($route == 'employee.loan.view')?'active':''}}" style="font-size:13px;"><a href="{{route('employee.loan.view')}}" style="color:black;">Employee Lone</a></li>
                                </ul>
                            </li>
                            <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Extra Cost
                                <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li class="{{($route == 'extra.cost.view')?'active':''}}" style="font-size:13px;"><a href="{{route('extra.cost.view')}}" style="color:black;">School Expansis</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->

                    <!-- <li class="nav-small-cap">---System User</li> -->
                    <li class="treeview {{($prefix == '/users')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-user-plus" aria-hidden="true"></i>  <span class="hide-menu">Manage User<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                            <li class="{{($route == 'user.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('user.view')}}" style="color:black;">View/Add User</a> </li>
                            <li class="{{($route == 'active.user.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('active.user.view')}}" style="color:black;">Active/Deactive User</a> </li>
                        </ul>
                    </li>
                    @if(Auth::user()->usertype=='Admin')
                    <!-- <li class="nav-small-cap">---System Setting</li> -->
                    <li class="treeview {{($prefix == '/system')?'active':''}}"> <a href="javascript:void(0)" class="waves-effect" style="color:black;"><i class="fa fa-cogs" aria-hidden="true"></i>  <span class="hide-menu">System Setting<span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level treeview-menu">
                            <li class="{{($route == 'general.setting.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('general.setting.view')}}" style="color:black;">General Setting</a> </li>
                        </ul>
                    </li>
                    @endif
                         <!-- <li class="nav-small-cap">---School Report</li> -->
                        <!-- <li class="treeview {{($prefix == '/report')?'active':''}}"> <a href="#" class="waves-effect" style="color:black;"><i class="fa fa-file" aria-hidden="true" ></i>  <span class="hide-menu" style="color:black;">School Report<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Student Report
                                    <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li class="{{($route == 'exam.report.view')?'active':''}}" style="font-size:13px;"><a href="{{route('exam.report.view')}}" style="color:black;">Student Exam Report</a></li>
                                        <li class="{{($route == 'attend.report.view')?'active':''}}" style="font-size:13px;"><a href="{{route('attend.report.view')}}" style="color:black;">Student Attend Report</a></li>
                                        <li class="{{($route == 'fee.report.view')?'active':''}}" style="font-size:13px;"><a href="{{route('fee.report.view')}}" style="color:black;">Student Fee Report</a></li>
                                    </ul>
                                </li>
                                <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Extra Income
                                    <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li class="{{($route == 'extra.income.view')?'active':''}}" style="font-size:13px;"><a href="{{route('extra.income.view')}}" style="color:black;">Extra Income</a></li>
                                    </ul>
                                </li>
                                <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Employee Salary/Loan
                                    <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                    <li class="{{($route == 'employee.salary.view')?'active':''}}" style="font-size:13px;"><a href="{{route('employee.salary.view')}}" style="color:black;">Employee Salary</a></li>
                                    <li class="{{($route == 'employee.loan.view')?'active':''}}" style="font-size:13px;"><a href="{{route('employee.loan.view')}}" style="color:black;">Employee Lone</a></li>
                                    </ul>
                                </li>
                                <li style="font-size:13px;"><a href="javascript:void(0)" class="waves-effect" style="color:black;">Extra Cost
                                    <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li class="{{($route == 'extra.cost.view')?'active':''}}" style="font-size:13px;"><a href="{{route('extra.cost.view')}}" style="color:black;">School Expansis</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <!-- <li class="nav-small-cap">---School Portfolio</li> -->
                        <li class="treeview {{($prefix == '/portfolio')?'active':''}}"> <a href="#" class="waves-effect" style="color:black;"><i class="fa fa-file" aria-hidden="true" ></i>  <span class="hide-menu" style="color:black;">Portfolio<span class="fa arrow"></span></span></a>
                            <ul class="nav nav-second-level">
                                <li class="{{($route == 'portfolio.setting.view')?'active':''}}" style="font-size:13px;"> <a href="{{route('portfolio.setting.view')}}" style="color:black;">Portfolio Setting</a> </li>
                            </ul>
                        </li>
                    <li><a href="{{ route('admin.logout') }}" class="waves-effect" style="color:black;"><i class="icon-logout fa-fw"></i> <span class="hide-menu">Log out</span></a></li>
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->


<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">

@php
    $systemData = App\Models\System::all();
    use Nilambar\NepaliDate\NepaliDate;
    $obj = new NepaliDate();
    $year= date('Y');
    $month = date('m');
    $day = date('d');
    $dates = $obj->convertAdToBs($year, $month, $day);
    $nepaliYear = $dates['year'];
    $nepaliMonth = $dates['month'];
    $nepaliday = $dates['day'];
@endphp
@foreach($systemData as $system)
<br>
<div class="row bg-title mt-5">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title ml-6 text-center text-sm-left font-weight-bold mb-4"> {{$user->usertype}} Dashboard 
        </h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="{{route('school.website')}}" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">School Website</a>
            <ol class="breadcrumb">
                <li>{{$system->name}}</li>
                <li class="active">{{ date("d M Y") }}</li>
                @if( $nepaliMonth == '1')
                <li class="active">{{$nepaliday}}-Baishakh-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '2')
                <li class="active">{{$nepaliday}}-Jestha-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '3')
                <li class="active">{{$nepaliday}}-Ashadh-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '4')
                <li class="active">{{$nepaliday}}-Shrawan-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '5')
                <li class="active">{{$nepaliday}}-Bhadau-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '6')
                <li class="active">{{$nepaliday}}-Asoj-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '7')
                <li class="active">{{$nepaliday}}-Kartik-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '8')
                <li class="active">{{$nepaliday}}-Mangsir-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '9')
                <li class="active">{{$nepaliday}}-Poush-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '10')
                <li class="active">{{$nepaliday}}-Magh-{{$nepaliYear}}</li>
                @elseif( $nepaliMonth == '11')
                <li class="active">{{$nepaliday}}-Falgun-{{$nepaliYear}}</li>
                @else
                <li class="active">{{$nepaliday}}-Chaitra-{{$nepaliYear}}</li>
                @endif
            </ol>
        </div>
    <!-- /.col-lg-12 -->
</div>
<!--row -->
@endforeach
