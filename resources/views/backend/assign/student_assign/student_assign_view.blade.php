<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->


<div class="container">
    <!-- /row form  Add User Form-->
   <div class="row">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!--<a class="btn btn-rounded bg-success btn-outline m-b-20" id="unblockbtn">Edit Setting</a> <a class="btn btn-outline m-b-20 m-r-20 invisible" id="blockbtn">Custom Message</a>-->
           <div class="panel panel-success ">
               <div class="panel-heading block"> Student Assignment Add Form
                   <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
               </div><!-- /.panel-heading block5 -->
               <div class="panel-wrapper collapse in" aria-expanded="true">
                   <div class="panel-body">
                       <div class="row">
                           <div class="col-sm-12">
                               <div class="white-box">
                                   <form method="POST" action="{{route('student.assign.store')}}" enctype="multipart/form-data">
                                       @csrf
                                       <!-- /.1st row inside form -->
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Assignment Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="assign_date" name="assign_date" value="{{now()->toDateString('Y-m-d')}}"  required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><strong>Year</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="year_id" id="year_id" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Student Year</option>
                                                        @foreach($years as $year)
                                                        <option value="{{ $year->id }}" {{($date == $year->name) ? 'selected':''}}>{{ $year->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Class</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="class_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Class</option>
                                                            @foreach($classes as $class)
                                                            <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Section</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="section_id"  class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Section</option>
                                                            @foreach($sections as $section)
                                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <hr>

                                       </div><!-- /.1st row inside form -->
                                       <div class="form-group">
                                           <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                                       </div>
                                   </form>
                               </div><!-- /.white-box -->
                           </div><!-- /.col-sm-12 -->
                       </div><!-- /.row -->
                   </div><!-- /.panel-body -->
                   </div><!-- /.panel-wrapper collapse in -->
           </div><!-- /.panel panel-success -->
           <hr>
       </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
   </div>
       <!-- /.row form  Add User Form -->
</div>


{{--
<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 -->
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Employee List </h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%" >
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Father Name</th>
                                <th>Join Date</th>
                                <th>Designation</th>
                                <th>Email</th>
                                <th>Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $user )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $user['employee']['name'] }}</td>
                                <td>{{ $user['employee']['id_no'] }}</td>
                                <td>{{ $user['employee']['fname'] }}</td>
                                <td>{{ $user->join_date }}</td>
                                <td>{{ $user['designation']['name'] }}</td>
                                <td>{{ $user['employee']['email'] }}</td>
                                <td>{{ $user['employee']['code'] }}</td>
                                <td>
                                <a href="{{route('employee.edit',$user->employee_id)}}" class="btn btn-rounded btn-info" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{route('employee.promotion',$user->employee_id)}}" class="btn btn-rounded btn-danger ml-2" title="Promotion"><i class="fa fa-plus-square" aria-hidden="true"></i></a>
                                <a href="{{route('student.details',$user->employee_id)}}" class="btn btn-rounded btn-danger ml-2" title="Details" target="_blank"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div> --}}


















@include('admin.body.footer')



<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


