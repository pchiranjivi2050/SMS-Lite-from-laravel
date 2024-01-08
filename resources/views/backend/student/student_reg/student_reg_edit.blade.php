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
                <div class="panel-heading block"> Student Registration Edit Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">          
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <form method="POST" action="{{route('student.update',$editData->student_id)}}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Student Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="name" id="name" value="{{$editData['student']['name']}}" placeholder="Student Name" required="">
                                                <input type="hidden" class="form-control"name="id" id="id" value="{{$editData->id}}" placeholder="Student Name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="fname" name="fname" value="{{$editData['student']['fname']}}" placeholder="Father Name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Mother Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="mname" name="mname" value="{{$editData['student']['mname']}}" placeholder="Mother Name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Birth Of Date</strong><span class="text-danger">*</span></h5>
                                                <input type="date" class="form-control" id="dob" name="dob" value="{{$editData['student']['dob']}}"  required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="address" name="address" value="{{$editData['student']['address']}}" placeholder="Address" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Mobile</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{$editData['student']['mobile']}}" placeholder="Mobile No" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$editData['student']['email']}}" placeholder="Email" data-error="Bruh, that email address is invalid" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Gender</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="gender" id="gender" required="" class="form-control" >
                                                        <option value="Male" {{($editData['student']['gender'] == 'Male') ? 'selected':""}}>Male</option>
                                                        <option value="Female"{{($editData['student']['gender'] == 'Female') ? 'selected':""}}>Female</option>
                                                        <option value="Other" {{($editData['student']['gender'] == 'Other') ? 'selected':""}}>Other</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Blood Group</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$editData['student']['blood_group']}}" placeholder="Blood Group" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Health Problem</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="health" name="health" value="{{$editData->health}}" placeholder="Health Problem" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Religion</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="religion" id="religion" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Hinduism" {{($editData['student']['religion'] == 'Hinduism') ? 'selected':""}}>Hinduism</option>
                                                        <option value="Buddhism"{{($editData['student']['religion'] == 'Buddhism') ? 'selected':""}}>Buddhism</option>
                                                        <option value="Islam" {{($editData['student']['religion'] == 'Islam') ? 'selected':""}}>Islam</option>
                                                        <option value="Kiratism" {{($editData['student']['religion'] == 'Kiratism') ? 'selected':""}}>Kiratism</option>
                                                        <option value="Christianity" {{($editData['student']['religion'] == 'Christianity') ? 'selected':""}}>Christianity</option>
                                                        <option value="Other" {{($editData['student']['religion'] == 'Other') ? 'selected':""}}>Other</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Registration Date</strong><span class="text-danger">*</span></h5>
                                                <input type="date" class="form-control" id="reg_date" name="reg_date" value="{{$editData->reg_date}}"  required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Year</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="year_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Year</option>
                                                            @foreach($years as $year)
                                                            <option value="{{ $year->id }}" {{($editData->year_id == $year->id) ? 'selected':''}}>{{ $year->name }}</option>
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
                                                            <option value="{{ $class->id }}" {{($editData->class_id == $class->id)? 'selected':''}}>{{ $class->name }}</option>
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
                                                        <select name="section_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Section</option>
                                                            @foreach($sections as $section)
                                                            <option value="{{ $section->id }}" {{($editData->section_id == $section->id)? 'selected':''}}>{{ $section->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Shift</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="shift_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Shift</option>
                                                            @foreach($shifts as $shift)
                                                            <option value="{{ $shift->id }}" {{($editData->shift_id == $shift->id)? 'selected':''}}>{{ $shift->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Group</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="group_id"  required="" class="form-control">
                                                            <option value="" selected="" disabled="">Select Student Group</option>
                                                            @foreach($groups as $group)
                                                            <option value="{{ $group->id }}" {{($editData->group_id == $group->id)? 'selected':''}}>{{ $group->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Transport</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="transport" id="transport" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select Transport Use</option>
                                                        <option value="Yes" {{$editData->transport = "yes" ? 'selected':''}}>Yes</option>
                                                        <option value="No" {{$editData->transport = "No" ? 'selected':''}}>No</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5><strong>Student Photo</strong><span class="text-danger">*</span></h5>
                                                    <input type="file" class="form-control" id="image" name="image" >
                                                    <img id="showImage" src="{{(!empty($editData['student']['image']))? url('upload/student_image/image/'.$editData['student']['image']):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">                                                
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5><strong>Birth Certificate</strong><span class="text-danger">*</span></h5>
                                                    <input type="file" class="form-control" id="birth_certificate" name="birth_certificate" >
                                                    <img id="show_birth_certificate" src="{{(!empty($editData->birth_certificate))? url('upload/student_image/birth_certificate/'.$editData->birth_certificate):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                            </div><!-- /.col-sm-4 inside form -->
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
                                                                                <h5><strong>Previous School Name</strong><span class="text-danger">*</span></h5>
                                                                                <input type="text" class="form-control" id="pre_school" name="pre_school" value="{{$editData->pre_school}}" placeholder="Previous School Name" >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>Previous School Address</strong><span class="text-danger">*</span></h5>
                                                                                <input type="text" class="form-control" id="pre_school_address" name="pre_school_address" value="{{$editData->pre_school_address}}" placeholder="Previous School Address" >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>School Leaving Reason</strong><span class="text-danger">*</span></h5>
                                                                                <input type="text" class="form-control" id="reason" name="reason" value="{{$editData->reason}}" placeholder="Reason" >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>Previous School Class</strong><span class="text-danger">*</span></h5>
                                                                                <input type="text" class="form-control" id="pre_class" name="pre_class" value="{{$editData->pre_class}}" placeholder="Previous School Class" >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>School Admission Date</strong><span class="text-danger">*</span></h5>
                                                                                <input type="date" class="form-control" id="pre_admission" name="pre_admission" value="{{$editData->pre_admission}}"  >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>School Leaving Date</strong><span class="text-danger">*</span></h5>
                                                                                <input type="date" class="form-control" id="pre_leaving" name="pre_leaving" value="{{$editData->pre_leaving}}"  >
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>Previous School Marksheet</strong><span class="text-danger">*</span></h5>
                                                                                <input type="file" class="form-control" id="pre_marksheet" name="pre_marksheet" value="{{asset('upload/student_image/pre_marksheet/'.$editData->pre_marksheet)}}" >
                                                                                <img id="show_pre_marksheet" src="{{(!empty($editData->pre_marksheet))? url('upload/student_image/pre_marksheet/'.$editData->pre_marksheet):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
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
        $('#pre_marksheet').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show_pre_marksheet').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>




   <!-- Add User -->
   <script type="application/javascript">
         //auto clicked Block
     $(document).ready(function(){
     $('#blockbtn1').click(function(){
     });
            // set time out 5 sec
      setTimeout(function(){
         $('#blockbtn1').trigger('click');
     }, 100);
     });

     //auto clicked Block
     $(document).ready(function(){
     $('#minimize1').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize1').trigger('click');
     }, 100);
     });

    </script>