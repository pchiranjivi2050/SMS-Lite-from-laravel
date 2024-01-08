@extends('admin.index_master')
@section('admin')
@php
$id = Auth::user()->id;
$user = App\Models\User::find($id);
$systemData = App\Models\System::all();
@endphp
@foreach($systemData as $system)

@endforeach
<div class="container">
<div class="row">
    <div class="col-md-3 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-user bg-megna"></i>
                <div class="bodystate">
                    @php
                        $f_student = App\Models\User::where('usertype','Student')->where('gender','Female')->count();
                    @endphp
                    <h4>{{$f_student}}</h4>
                    <span class="text-muted">Total Female Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-user bg-info"></i>
                <div class="bodystate">
                    @php
                    $m_student = App\Models\User::where('usertype','Student')->where('gender','Female')->count();
                    @endphp
                    <h4>{{$m_student}}</h4>
                    <span class="text-muted">Total Male Student</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-user bg-success"></i>
                <div class="bodystate">
                    @php
                    $f_employee = App\Models\User::where('usertype','employee')->where('gender','Female')->count();
                    @endphp
                    <h4>{{$f_employee}}</h4>
                    <span class="text-muted">Total Female Employee</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6">
        <div class="white-box">
            <div class="r-icon-stats">
                <i class="ti-user bg-inverse"></i>
                <div class="bodystate">
                    @php
                    $m_employee = App\Models\User::where('usertype','employee')->where('gender','Male')->count();
                    @endphp
                    <h4>{{$m_employee}}</h4>
                    <span class="text-muted">Total Male Employee</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/row -->
<!-- .row -->
<div class="row">
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title"><small class="pull-right m-t-10 text-success"></small> New Student This Year</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h6>Total</h6>
                    <b>80.40%</b></div>
                <div class="stat-item">
                    <h6>Female</h6>
                    <b>15.40%</b></div>
                <div class="stat-item">
                    <h6>Male</h6>
                    <b>5.50%</b></div>
            </div>
            <div id="sparkline8" class="minus-mar"></div>
        </div>
    </div>
    <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title"><small class="pull-right m-t-10 text-danger"></small>New Employee This Year</h3>
            <div class="stats-row">
                <div class="stat-item">
                    <h6>Total</h6>
                    <b>80.40%</b></div>
                <div class="stat-item">
                    <h6>Female</h6>
                    <b>15.40%</b></div>
                <div class="stat-item">
                    <h6>Male</h6>
                    <b>5.50%</b></div>
            </div>
            <div id="sparkline9" class="minus-mar"></div>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <div class="row">
                <div class="col-sm-8">
                    <!-- Start of nepali patro badge -->
                    <script type="text/javascript"> <!--
                        var nc_cb_width = 'responsive';
                        var nc_cb_height = 311;
                        var nc_cb_shadow = 'false';
                        var nc_cb_api_id = 58220210713382; //-->
                    </script>
                    <script type="text/javascript" src="https://www.ashesh.com.np/nepali-calendar/widget/cb.js"></script><div id="ncwidgetlink">© <a href="https://www.ashesh.com.np/nepali-calendar/" id="nclink" title="Nepali calendar" target="_blank">Nepali Calendar</a></div>
                    <!-- End of nepali patro badge -->
                </div>
                <div class="col-sm-4">
                    <!-- Start of upcoming event widget -->
                    <script type="text/javascript"> <!--
                        var nc_ev_width = 'responsive';
                        var nc_ev_height = 311;
                        var nc_ev_def_lan = 'np';
                        var nc_ev_api_id = 60920210713234; //-->
                    </script>
                    <script type="text/javascript" src="https://www.ashesh.com.np/calendar-event/ev.js"></script><div id="ncwidgetlink">© <a href="https://www.ashesh.com.np/nepali-calendar/" id="nclink" title="Nepali calendar" target="_blank">Nepali Calendar</a></div>
                    <!-- End of upcoming event widget -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->

<!--row -->
<div class="row">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">School Income</h3>
            <ul class="list-inline text-center">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Fee Collection</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>Other Income</h5>
                </li>
            </ul>
            <div class="row">
                <div class="col-sm-5 rounded text-center mr-auto" style="background: #00bfc7;">
                    @php
                        $studentFee = App\Models\StudentFee::sum('total_amount');
                    @endphp
                    <h2><strong>Rs. {{number_format((float)$studentFee,2)}}</strong></h2>
                </div>
                <div class="col-sm-5 rounded text-center" style="background:#b4becb;">
                    @php
                        $extraIncome = App\Models\ExtraIncome::sum('total_amount');
                    @endphp
                    <h2><strong>Rs. {{number_format((float)$extraIncome,2)}}</strong></h2>
                </div>
            </div>        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">School Cost</h3>
            <ul class="list-inline text-center">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Employee Salary</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>Other Cost</h5>
                </li>
            </ul>
            <div class="row">
                <div class="col-sm-5 rounded text-center mr-auto" style="background: #00bfc7;">
                    @php
                        $employeeSalary = App\Models\EmployeeSalary::sum('paid_salary');
                    @endphp
                    <h2><strong>Rs. {{number_format((float)$employeeSalary,2)}}</strong></h2>
                </div>
                <div class="col-sm-5 rounded text-center" style="background:#b4becb;">
                    @php
                        $extraCost = App\Models\ExtraCost::sum('total_amount');
                    @endphp
                    <h2><strong>Rs. {{number_format((float)$extraCost,2)}}</strong></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="offset-md-3 col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="white-box">
            <h3 class="box-title">Profit</h3>
            <ul class="list-inline text-center">
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Total Income</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #b4becb;"></i>Total Cost</h5>
                </li>
                <li>
                    <h5><i class="fa fa-circle m-r-5" style="color: #0cf0ab;"></i>Profit</h5>
                </li>
            </ul>
            <div class="row">
                @php
                    $totalCost = $employeeSalary + $extraCost;
                    $totalIncome = $studentFee + $extraIncome;
                    $profit = $totalIncome - $totalCost;
                @endphp
                <div class="col-sm-5 rounded text-center mr-auto" style="background: #00bfc7;">
                    <h2><strong>Rs. {{number_format((float)$totalIncome,2)}}</strong></h2>
                </div>
                <div class="col-sm-5 rounded text-center" style="background:#b4becb;">
                    <h2><strong>Rs. {{number_format((float)$totalCost,2)}}</strong></h2>
                </div>
                
                <div class="offset-sm-3  col-sm-6 rounded text-center mt-3" style="background:#0cf0ab;">
                    <h2><strong>Rs. {{number_format((float)$profit,2)}}</strong></h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row -->
<!-- /row -->
<div class="row">
    <div class="col-sm-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">Top Student List</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Student Name</th>
                            <th>ID No</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                        </tr>
                    </thead>
                    @php
                        $allStudent = App\Models\User::where('usertype','Student')->get();
                    @endphp
                    <tbody>
                        @foreach($allStudent as $key => $student)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->id_no}}</td>
                            <td>{{$student->fname}}</td>
                            <td>{{$student->mname}}</td>
                        </tr>
                        @if($key == '4')
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="white-box">
            <h3 class="box-title m-b-0">New Employee List</h3>
            <div class="table-responsive">
                <table class="table table-hover" height="200px">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Mobile No</th>
                        </tr>
                    </thead>
                    @php
                        $allEmployee = App\Models\User::where('usertype','Employee')->get();
                    @endphp
                    <tbody>
                        @foreach($allEmployee as $key => $employee)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$employee->name}}</td>
                            @php
                                $designation = App\Models\Designation::where('id',$employee->designation_id)->first();
                            @endphp
                            <td>{{$designation->name}}</td>
                            <td>{{$employee->mobile}}</td>
                        </tr>
                        @if($key == '4')
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
</div>
 @endsection
