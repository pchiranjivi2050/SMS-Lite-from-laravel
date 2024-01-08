<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->


<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Roll Generate</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <form method="post" action="{{route('student.roll.store')}}">
                        @csrf
                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>ID No</th>
                                    <th>Father Name</th>
                                    <th>Mother Name</th>
                                    <th>Year</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Roll</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($allData as $key => $student )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $student['student']['name'] }}</td>
                                    <td>{{ $student->id_no }}</td>
                                    <td>{{ $student['student']['fname'] }}</td>
                                    <td>{{ $student['student']['mname'] }}</td>
                                    <td>{{ $student['student_year']['name'] }}</td>
                                    <td>{{ $student['student_class']['name'] }}</td>
                                    <td>{{ $student['student_section']['name'] }}</td>
                                    <td><input type="text" class="form-control form-control-sm" name="roll[]" value="{{$student->roll}}"></td>
                                    <input type="hidden" class="form-control form-control-sm" name="student_id[]" value="{{$student->student_id}}">
                                    <input type="hidden" class="form-control form-control-sm" name="year_id" value="{{$student->year_id}}">
                                    <input type="hidden" class="form-control form-control-sm" name="class_id" value="{{$student->class_id}}">
                                    <input type="hidden" class="form-control form-control-sm" name="section_id" value="{{$student->section_id}}">
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div>






















@include('admin.body.footer')

