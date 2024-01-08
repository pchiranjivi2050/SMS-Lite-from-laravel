<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row"><!-- /row form  Add User Form-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success ">
                <div class="panel-heading block"> Student Fee Collection
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="get" action="{{route('employee.leave.get')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5><strong>Employee Name</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="employee_id" id="employee_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Employee</option>
                                                @foreach($allData as $employee)
                                                <option value="{{ $employee->id}}">{{ $employee->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5><strong>Designation</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="designation_id" id="designation_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Designation</option>
                                                @foreach($designations as $designation)
                                                <option value="{{ $designation->id}}">{{ $designation->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                            </div><!-- /.row -->  
                            <br>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                                </div>
                        </form>         
                    </div><!-- /.panel-body -->
                </div><!-- /.panel-wrapper collapse in -->
            </div><!-- /.panel panel-success -->
        </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- /.row form  Add User Form -->
</div>

<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Employee Loan List </h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%" >
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Father Name</th>
                                <th>Designation</th>
                                <th>start Date</th>
                                <th>End Date</th>
                                <th>Reason</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($leaves as $key => $leave )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $leave['employee']['name'] }}</td>
                                <td>{{ $leave['employee']['id_no'] }}</td>
                                <td>{{ $leave['employee']['fname'] }}</td>
                                <td>{{ $leave['designation']['name'] }}</td>
                                <td>{{ date('M-d-Y',strtotime($leave->start_date)) }}</td>
                                <td>{{ date('M-d-Y',strtotime($leave->end_date)) }}</td>
                                <td>{{ $leave->reason }}</td>
                                <td>
                                    <a href="{{route('employee.leave.edit',$leave->employee_id)}}" class="btn btn-rounded btn-info" title="Pay Lone"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div>



@include('admin.body.footer')



    