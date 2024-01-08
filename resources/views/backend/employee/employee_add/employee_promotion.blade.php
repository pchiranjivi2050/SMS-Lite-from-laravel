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
               <div class="panel-heading block"> Student Registration Form
                   <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
               </div><!-- /.panel-heading block5 -->
               <div class="panel-wrapper collapse in" aria-expanded="true">
                   <div class="panel-body">
                       <div class="row">          
                           <div class="col-sm-12">
                               <div class="white-box">
                                   <form method="POST" action="{{route('promotion.store')}}" enctype="multipart/form-data">
                                       @csrf
                                       <!-- /.1st row inside form -->
                                       <div class="row">
                                           <div class="col-sm-2">
                                            <div class="form-group">
                                                <h5><strong>ID No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="id_no" id="id_no" value="{{$editData['employee']['id_no']}}" placeholder="Employee Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                           </div>
                                       </div><!-- end row -->
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Employee Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control"name="name" id="name" value="{{$editData['employee']['name']}}" placeholder="Employee Name" required="" readonly>
                                               <input type="hidden" class="form-control"name="id" id="id" value="{{$editData->id}}" placeholder="Employee Name" required="">
                                               <input type="hidden" class="form-control"name="employee_id" id="employee_id" value="{{$editData->employee_id}}" placeholder="Employee Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="fname" name="fname" value="{{$editData['employee']['fname']}}" placeholder="Father Name" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mother Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mname" name="mname" value="{{$editData['employee']['mname']}}" placeholder="Mother Name" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Birth Of Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="dob" name="dob" value="{{$editData['employee']['dob']}}"  required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="address" name="address" value="{{$editData['employee']['address']}}" placeholder="Address" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mobile</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mobile" name="mobile" value="{{$editData['employee']['mobile']}}" placeholder="Mobile No" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                               <input type="email" class="form-control" id="email" name="email" value="{{$editData['employee']['email']}}" placeholder="Email" data-error="Bruh, that email address is invalid" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Qualification</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="qualification" name="qualification" value="{{$editData['employee']['qualification']}}" placeholder="Qualification" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">                  
                                                <h5><strong>Marital Status</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="marital_status" id="marital_status" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Single" {{($editData['employee']['marital_status'] == 'Single')? 'selected':'' }}>Single</option>
                                                        <option value="Engaged" {{($editData['employee']['marital_status'] == 'Engaged')? 'selected':'' }}>Engaged</option>
                                                        <option value="Married" {{($editData['employee']['marital_status'] == 'Married')? 'selected':'' }}>Married</option>
                                                        <option value="Divorced" {{($editData['employee']['marital_status'] == 'Divorced')? 'selected':'' }}>Divorced</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                               <h5><strong>Gender</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="gender" id="gender" required="" class="form-control" readonly>
                                                       <option value="" selected="" disabled="">Select Employee Gender</option>
                                                       <option value="Male" {{($editData['employee']['gender'] == 'Male')? 'selected':'' }}>Male</option>
                                                       <option value="Female" {{($editData['employee']['gender'] == 'Female')? 'selected':'' }}>Female</option>
                                                       <option value="Other" {{($editData['employee']['gender'] == 'Other')? 'selected':'' }}>Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Blood Group</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$editData['employee']['blood_group']}}" placeholder="Blood Group" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Health Problem</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="health" name="health" value="{{$editData->health}}" placeholder="Health Problem" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                               <h5><strong>Religion</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="religion" id="religion" required="" class="form-control" readonly>
                                                       <option value="" selected="" disabled="">Select User Type</option>
                                                       <option value="Hinduism" {{($editData['employee']['religion'] == 'Hinduism')? 'selected':'' }}>Hinduism</option>
                                                       <option value="Buddhism" {{($editData['employee']['religion'] == 'Buddhism')? 'selected':'' }}>Buddhism</option>
                                                       <option value="Islam" {{($editData['employee']['religion'] == 'Islam')? 'selected':'' }}>Islam</option>
                                                       <option value="Kiratism" {{($editData['employee']['religion'] == 'Kiratism')? 'selected':'' }}>Kiratism</option>
                                                       <option value="Christianity" {{($editData['employee']['religion'] == 'Christianity')? 'selected':'' }}>Christianity</option>
                                                       <option value="Other" {{($editData['employee']['religion'] == 'Other')? 'selected':'' }}>Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Join Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="join_date" name="join_date" value="{{$editData->join_date}}"  required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <hr width="90%">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Previous Designation</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="pre_designation_id"  required="" class="form-control" readonly>
                                                            <option value="" selected="" disabled="">Select Employee Designation</option>
                                                            @foreach($designations as $designation)
                                                            <option value="{{$designation->id }}" {{($designation->id == $editData['employee']['designation_id'])? 'selected':'' }} >{{ $designation->name }}</option>
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
                                                        <select name="designation_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Employee Designation</option>
                                                            @foreach($designations as $designation)
                                                            <option value="{{$designation->id }}">{{ $designation->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Joining Salary</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="salary" name="salary" value="{{$editData['employee']['salary']}}" placeholder="Salary" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Increase Salary</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="increase_salary" name="increase_salary" value="" placeholder="Salary">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Promotion Date</strong><span class="text-danger">*</span></h5>
                                                <input type="date" class="form-control" id="promotion_date" name="promotion_date" value="{{now()->toDateString('Y-m-d')}}"  required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                             </div> <!-- /.col-sm-4 inside form -->
                                            <hr width="90%">
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                                   <h5><strong>Employee Photo</strong><span class="text-danger">*</span></h5>
                                                   <input type="file" class="form-control" id="image" name="image" readonly>
                                                   <img id="showImage" src="{{(!empty($editData['employee']['image']))? url('upload/user_image/'.$editData['employee']['image']):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">                                                
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                            <div class="form-group">
                                                <h5><strong>Citizenship/Driving License</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="birth_certificate" name="cti_dri_image" readonly>
                                                <img id="show_birth_certificate" src="{{(!empty($editData->cti_dri_image))? url('upload/employee/cti_dri_image/'.$editData->cti_dri_image):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                            </div>
                                        </div><!-- /.col-sm-4 inside form --><div class="col-sm-4">
                                            <div class="form-group">
                                                <h5><strong>CV</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="cv" name="cv" readonly>
                                                <a href="{{ asset('upload/employee/employee_cv/' . $editData->cv) }}" class="btn btn-rounded btn-info" target="_black" style="margin-top: 10px;color:black;"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                            </div>
                                        </div><!-- /.col-sm-4 inside form -->
                                        <hr width="90%">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Bank Name</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{$editData->bank_name}}" placeholder="Bank Name" required="" readonly>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Branch</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="bank_branch" name="bank_branch" value="{{$editData->bank_branch}}" placeholder="Branch" required="" readonly>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Account Holder Name</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="account_name" name="account_name" value="{{$editData->account_name}}" placeholder="Account Holder Name" required="" readonly>
                                            <div class="help-block with-errors"></div>
                                            </div>
                                        </div> <!-- /.col-sm-4 inside form -->
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                            <h5><strong>Account Number</strong><span class="text-danger">*</span></h5>
                                            <input type="text" class="form-control" id="account_no" name="account_no" value="{{$editData->account_no}}" placeholder="Account Number" required="" readonly>
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
                                                                               <input type="text" class="form-control" id="pre_school" name="pre_school" value="{{$editData->pre_school}}" placeholder="Previous School Name" readonly>
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Address</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="pre_school_address" name="pre_school_address" value="{{$editData->pre_school_address}}" placeholder="Previous School Address" readonly>
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Leaving Reason</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="reason" name="reason" value="{{$editData->reason}}" placeholder="Reason" readonly>
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Designation</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="pre_designation" name="pre_designation" value="{{$editData->pre_designation}}" placeholder="Previous School Designation" readonly>
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Join Date</strong><span class="text-danger">*</span></h5>
                                                                               <input type="date" class="form-control" id="pre_join_date" name="pre_join_date" value="{{$editData->pre_join_date}}" readonly >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>School/Company Leaving Date</strong><span class="text-danger">*</span></h5>
                                                                               <input type="date" class="form-control" id="pre_leave_date" name="pre_leave_date" value="{{$editData->pre_leave_date}}" readonly >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Previous School/Company Experience Letter</strong><span class="text-danger">*</span></h5>
                                                                               <input type="file" class="form-control" id="pre_letter" name="pre_letter"  readonly>
                                                                               <img id="show_pre_letter" src="{{(!empty($editData->pre_letter))? url('upload/employee/pre_letter/'.$editData->pre_letter):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
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


