<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<form method="post" action="{{route('student.attend.store')}}">
@csrf
<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-sm-3">
            <div class="form-group">
            <h5><strong>Select Attendence Date</strong><span class="text-danger">*</span></h5>
            <input type="date" class="form-control" id="date" name="date" value="{{$editData['0']['date']}}"  required="" style="padding:2px;">
            <div class="help-block with-errors"></div>
            </div>
        </div> <!-- /.col-sm-4 inside form -->
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Student Attendence Edit</h3>
                <div class="table-responsive">                    
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">SL</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;"> Name</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">ID No</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">Year</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">Class</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">Section</th>
                            <th rowspan="2" class="text-center" style="vertical-align: middle;">Roll</th>
                            <th colspan="4" class="text-center" style="vertical-align: middle; width: 16%;">Attendance Status</th>
                        </tr>
                        <tr>
                            <th class="text-center btn present_all" style="display: table-cell; background-color: #000000;">Present</th>
                            <th class="text-center btn leave_all" style="display: table-cell; background-color: #000000;">Absent</th>
                            <th class="text-center btn Half_day_all" style="display: table-cell; background-color: #000000;">Half Day</th>
                            <th class="text-center btn Late_all" style="display: table-cell; background-color: #000000;">Late</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($editData as $key => $student )
                        <tr id="div{{ $student->id }}" class="text-center">
                        <input type="hidden" name="student_id[]" value="{{ $student->student_id }}">
                        <input type="hidden" name="year_id" value="{{ $student->year_id }}">
                        <input type="hidden" name="class_id" value="{{ $student->class_id }}">
                        <input type="hidden" name="section_id" value="{{ $student->section_id }}">
                        <input type="hidden" name="id_no[]" value="{{ $student->id_no }}">
                            <td class="text-center">{{ $key+1 }}</td>
                            <td class="text-center">{{ $student['student']['name'] }}</td>
                            <td class="text-center">{{ $student->id_no }}</td>
                            <td class="text-center">{{ $student['student_year']['name'] }}</td>
                            <td class="text-center">{{ $student['student_class']['name'] }}</td>
                            <td class="text-center">{{ $student['student_section']['name'] }}</td>
                            <td class="text-center">{{ $student['student_reg']['roll'] }}</td>
                            <td colspan="4">
                                <div class="switch-toggle switch-3 switch-candy">
                                <input type="radio" name="attend_status{{$key}}" value="Present" id="present{{$key}}" checked="checked" {{ ($student->attend_status == 'Present'?'checked':'') }}>
                                <label for="present{{ $key }}">Present</label>
                                <input type="radio" name="attend_status{{$key}}" value="Absent" id="absent{{$key}}" {{ ($student->attend_status == 'Absent'?'checked':'') }}>
                                <label for="absent{{$key}}">Absent</label>
                                <input type="radio" name="attend_status{{$key}}" value="Halfday" id="halfday{{$key}}"  {{ ($student->attend_status == 'Halfday'?'checked':'') }}>
                                <label for="halfday{{ $key }}">Half Day</label>
                                <input type="radio" name="attend_status{{$key}}" value="Late" id="late{{$key}}" {{ ($student->attend_status == 'Late'?'checked':'') }}>
                                <label for="late{{$key}}">Late</label>                                
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group">
                    <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                </div>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div>
</form>






















@include('admin.body.footer')

