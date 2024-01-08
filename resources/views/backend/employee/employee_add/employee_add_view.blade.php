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
               <div class="panel-heading block"> Employee Add Form
                   <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
               </div><!-- /.panel-heading block5 -->
               <div class="panel-wrapper collapse in" aria-expanded="true">
                   <div class="panel-body">
                       <div class="row">          
                           <div class="col-sm-12">
                               <div class="white-box">
                                   <form method="POST" action="{{route('employee.store')}}" enctype="multipart/form-data">
                                       @csrf
                                       <!-- /.1st row inside form -->
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Employee Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control"name="name" id="name" valu="" placeholder="Employee Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="fname" name="fname" value="" placeholder="Father Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mother Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mname" name="mname" value="" placeholder="Mother Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Birth Of Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="dob" name="dob" value=""  required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="address" name="address" value="" placeholder="Address" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mobile</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mobile" name="mobile" value="" placeholder="Mobile No" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                               <input type="email" class="form-control" id="email" name="email" value="" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Qualification</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="qualification" name="qualification" value="" placeholder="Qualification" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">                  
                                            <h5><strong>Marital Status</strong><span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <select name="marital_status" id="marital_status" required="" class="form-control">
                                                    <option value="" selected="" disabled="">Select User Type</option>
                                                    <option value="Single" >Single</option>
                                                    <option value="Engaged" >Engaged</option>
                                                    <option value="Married" >Married</option>
                                                    <option value="Divorced" >Divorced</option>
                                                </select>
                                                <div class="help-block with-errors"></div>
                                            </div>                         
                                        </div><!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">
                                            <div class="form-group">
                                                <h5><strong>Designation</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="designation_id"  required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Employee Designation</option>
                                                        @foreach($designations as $designation)
                                                        <option value="{{ $designation->id }}" >{{ $designation->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div><!-- End Form Group -->
                                        </div><!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Joining Salary</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="salary" name="salary" value="" placeholder="Salary" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">                  
                                               <h5><strong>Gender</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="gender" id="gender" required="" class="form-control">
                                                       <option value="" selected="" disabled="">Select User Type</option>
                                                       <option value="Male">Male</option>
                                                       <option value="Female">Female</option>
                                                       <option value="Other">Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                           </div><!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Blood Group</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="blood_group" name="blood_group" value="" placeholder="Blood Group" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Health Problem</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="health" name="health" value="" placeholder="Health Problem" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">                  
                                               <h5><strong>Religion</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="religion" id="religion" required="" class="form-control">
                                                       <option value="" selected="" disabled="">Select User Type</option>
                                                       <option value="Hinduism">Hinduism</option>
                                                       <option value="Buddhism">Buddhism</option>
                                                       <option value="Islam">Islam</option>
                                                       <option value="Kiratism">Kiratism</option>
                                                       <option value="Christianity">Christianity</option>
                                                       <option value="Other">Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                           </div><!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Join Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="join_date" name="join_date" value="{{now()->toDateString('Y-m-d')}}"  required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <hr width="90%">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                                   <h5><strong>Employee Photo</strong><span class="text-danger">*</span></h5>
                                                   <input type="file" class="form-control" id="image" name="image" >
                                                   <img id="showImage" src="{{asset('upload/no_image.jpg')}}" width="100px" height="100px" alt="">                                                
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                            <div class="form-group">
                                                <h5><strong>Citizenship/Driving License</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="birth_certificate" name="cti_dri_image" >
                                                <img id="show_birth_certificate" src="{{asset('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                            </div>
                                        </div><!-- /.col-sm-4 inside form --><div class="col-sm-4">
                                            <div class="form-group">
                                                <h5><strong>CV</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="cv" name="cv" >
                                            </div>
                                        </div><!-- /.col-sm-4 inside form -->
                                        <hr width="90%">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Bank Name</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="bank_name" name="bank_name" value="" placeholder="Bank Name" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Branch</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" value="" placeholder="Branch" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Account Holder Name</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="account_name" name="account_name" value="" placeholder="Account Holder Name" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Account Number</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="account_no" name="account_no" value="" placeholder="Account Number" required="">
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                       </div><!-- /.1st row inside form -->
                                       <hr style="border:1px solid black">
                                       <div class="row"><!-- /row form  Add User Form-->
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="panel panel-success ">
                                                   <div class="panel-heading block1"> Previous School Details
                                                       <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize1"></i></strong><strong><i class="ti-minus" id="minimize1"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                                                   </div><!-- /.panel-heading block5 -->
                                                   <div class="panel-wrapper collapse in" aria-expanded="true">
                                                       <div class="panel-body">
                                                           <div class="row">          
                                                               <div class="col-sm-12">
                                                                   <div class="white-box">
                                                                           <!-- /.1st row inside form -->
                                                                   <div class="row">
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous Working School/Company</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="pre_school" name="pre_school" value="" placeholder="Previous School Name" >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Address</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="pre_school_address" name="pre_school_address" value="" placeholder="Previous School Address" >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Leaving Reason</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="reason" name="reason" value="" placeholder="Reason" >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Designation</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="pre_designation" name="pre_designation" value="" placeholder="Previous School Designation" >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Join Date</strong><span class="text-danger">*</span></h5>
                                                                               <input type="date" class="form-control" id="pre_join_date" name="pre_join_date" value=""  >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Leaving Date</strong><span class="text-danger">*</span></h5>
                                                                               <input type="date" class="form-control" id="pre_leave_date" name="pre_leave_date" value=""  >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Experience Letter</strong><span class="text-danger">*</span></h5>
                                                                               <input type="file" class="form-control" id="pre_letter" name="pre_letter" >
                                                                               <img id="show_pre_letter" src="{{asset('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                   </div><!-- /.1st row inside form -->                                                        
                                                                   </div><!-- /.white-box -->
                                                               </div><!-- /.col-sm-12 -->
                                                           </div><!-- /.row -->
                                                       </div><!-- /.panel-body -->
                                                       </div><!-- /.panel-wrapper collapse in -->
                                               </div><!-- /.panel panel-success -->
                                           </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
                                       </div><!-- /.row form  Previous School Details -->
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
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $user['employee']['name'] ?? '' }}</td>
                                <td>{{ $user['employee']['id_no'] ?? '' }}</td>
                                 <td>{{ $user['employee']['fname'] ?? '' }}</td>
                                <td>{{ $user->join_date ?? '' }}</td>
                                 <td>{{ $user['designation']['name'] ?? '' }}</td>
                               <td>{{ $user['employee']['email'] ?? '' }}</td>
                                  <td>{{ $user['employee']['code'] ?? '' }}</td>
                                    <td>
        <a href="{{ route('employee.edit', $user->employee_id) }}" class="btn btn-rounded btn-info" title="Edit">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        </a>
        <a href="{{ route('employee.promotion', $user->employee_id) }}" class="btn btn-rounded btn-danger ml-2" title="Promotion">
            <i class="fa fa-plus-square" aria-hidden="true"></i>
        </a>
        <a href="{{ route('student.details', $user->employee_id) }}" class="btn btn-rounded btn-danger ml-2" title="Details" target="_blank">
            <i class="fa fa-info-circle" aria-hidden="true"></i>
        </a>
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
    $(document).ready(function(){
        $('#birth_certificate').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show_birth_certificate').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    $(document).ready(function(){
        $('#pre_letter').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show_pre_letter').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>




   <!-- Add User -->
   <script type="application/javascript">
       

     //auto clicked Block
     $(document).ready(function(){
     $('#minimize1').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize1').trigger('click');
     }, 100);
     });

     $(document).ready(function(){
     $('#minimize').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize').trigger('click');
     }, 100);
     });
    </script> 