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
               <div class="panel-heading block"> Employee Salary Form
                   <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
               </div><!-- /.panel-heading block5 -->
               <div class="panel-wrapper collapse in" aria-expanded="true">
                   <div class="panel-body">
                       <div class="row">          
                           <div class="col-sm-12">
                               <div class="white-box">
                                   <form method="POST" action="{{route('employee.salary.store')}}" enctype="multipart/form-data">
                                       @csrf
                                       <!-- /.1st row inside form -->
                                       <div class="row">
                                           <div class="col-sm-2">
                                            <div class="form-group">
                                                <h5><strong>ID No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="id_no" id="id_no" value="{{$allData->id_no}}" placeholder="Employee Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                           </div>
                                       </div><!-- end row -->
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Employee Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control"name="name" id="name" value="{{$allData->name}}" placeholder="Employee Name" required="" readonly>
                                               <input type="hidden" class="form-control"name="employee_id" id="employee_id" value="{{$allData->id}}" placeholder="Employee Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="fname" name="fname" value="{{$allData->fname}}" placeholder="Father Name" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mother Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mname" name="mname" value="{{$allData->mname}}" placeholder="Mother Name" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Birth Of Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="dob" name="dob" value="{{$allData->dob}}"  required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="address" name="address" value="{{$allData->address}}" placeholder="Address" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Mobile</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="mobile" name="mobile" value="{{$allData->mobile}}" placeholder="Mobile No" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                               <input type="email" class="form-control" id="email" name="email" value="{{$allData->email}}" placeholder="Email" data-error="Bruh, that email address is invalid" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Qualification</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="qualification" name="qualification" value="{{$allData->qualification}}" placeholder="Qualification" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-md-4">                  
                                                <h5><strong>Marital Status</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="marital_status" id="marital_status" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Single" {{($allData->marital_status == 'Single')? 'selected':'' }}>Single</option>
                                                        <option value="Engaged" {{($allData->marital_status == 'Engaged')? 'selected':'' }}>Engaged</option>
                                                        <option value="Married" {{($allData->marital_status == 'Married')? 'selected':'' }}>Married</option>
                                                        <option value="Divorced" {{($allData->marital_status == 'Divorced')? 'selected':'' }}>Divorced</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                               <h5><strong>Gender</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="gender" id="gender" required="" class="form-control" readonly>
                                                       <option value="" selected="" disabled="">Select Employee Gender</option>
                                                       <option value="Male" {{($allData->gender == 'Male')? 'selected':'' }}>Male</option>
                                                       <option value="Female" {{($allData->gender == 'Female')? 'selected':'' }}>Female</option>
                                                       <option value="Other" {{($allData->gender == 'Other')? 'selected':'' }}>Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Blood Group</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$allData->blood_group}}" placeholder="Blood Group" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Health Problem</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="health" name="health" value="{{$allData->health}}" placeholder="Health Problem" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                               <h5><strong>Religion</strong><span class="text-danger">*</span></h5>
                                               <div class="controls">
                                                   <select name="religion" id="religion" required="" class="form-control" readonly>
                                                       <option value="" selected="" disabled="">Select User Type</option>
                                                       <option value="Hinduism" {{($allData->religion == 'Hinduism')? 'selected':'' }}>Hinduism</option>
                                                       <option value="Buddhism" {{($allData->religion == 'Buddhism')? 'selected':'' }}>Buddhism</option>
                                                       <option value="Islam" {{($allData->religion == 'Islam')? 'selected':'' }}>Islam</option>
                                                       <option value="Kiratism" {{($allData->religion == 'Kiratism')? 'selected':'' }}>Kiratism</option>
                                                       <option value="Christianity" {{($allData->religion == 'Christianity')? 'selected':'' }}>Christianity</option>
                                                       <option value="Other" {{($allData->religion == 'Other')? 'selected':'' }}>Other</option>
                                                   </select>
                                                   <div class="help-block with-errors"></div>
                                               </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Join Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="join_date" name="join_date" value="{{$allData->join_date}}"  required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <hr width="90%">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Designation</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="designation_id"  required="" class="form-control" readonly>
                                                            <option value="" selected="" disabled="">Select Employee Designation</option>
                                                            @foreach($designations as $designation)
                                                            <option value="{{$designation->id }}" {{($allData->designation_id == $designation->id)? 'selected':''}}>{{ $designation->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Salary</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="salary" name="salary" value="{{$allData->salary}}" placeholder="Salary" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                       </div><!-- /.1st row inside form -->
                                       <div class="row"><!-- /row form  Add User Form-->
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="panel panel-success ">
                                                   <div class="panel-heading block1"> Employee Salary Add
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
                                                                                    <h5><strong>Absent Days</strong><span class="text-danger">*</span></h5>
                                                                                    <input type="text" class="form-control" id="paid_salary" name="paid_salary" value="{{$absentcount}}" placeholder="" readonly>
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div> <!-- /.col-sm-4 inside form -->
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <h5><strong>Salary This Month</strong><span class="text-danger">*</span></h5>
                                                                                    <input type="text" class="form-control" id="paid_salary" name="paid_salary" value="{{$totalsalary}}" placeholder="">
                                                                                    <div class="help-block with-errors"></div>
                                                                                </div>
                                                                            </div> <!-- /.col-sm-4 inside form -->
                                                                            <div class="col-md-4">
                                                                                <div class="form-group">
                                                                                    <h5><strong>Month</strong><span class="text-danger">*</span></h5>
                                                                                    <div class="controls">
                                                                                        <select name="month"  required="" class="form-control">
                                                                                            <option value="" selected="" disabled="">Select Month</option>
                                                                                            <option value="Baishakh">Baishakh</option>
                                                                                            <option value="Jestha">Jestha</option>
                                                                                            <option value="Ashadh">Ashadh</option>
                                                                                            <option value="Shrawan">Shrawan</option>
                                                                                            <option value="Bhadau">Bhadau</option>
                                                                                            <option value="Asoj">Asoj</option>
                                                                                            <option value="Kartik">Kartik</option>
                                                                                            <option value="Mangsir">Mangsir</option>
                                                                                            <option value="Poush">Poush</option>
                                                                                            <option value="Magh">Magh</option>
                                                                                            <option value="Falgun">Falgun</option>
                                                                                            <option value="Chaitra">Chaitra</option>
                                                                                        </select>
                                                                                        <div class="help-block"></div>
                                                                                    </div>
                                                                                </div><!-- End Form Group -->
                                                                            </div><!-- /.col-sm-4 inside form -->
                                                                            <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>Salary Paid Date</strong><span class="text-danger">*</span></h5>
                                                                                <input type="date" class="form-control" id="date" name="date" value="{{now()->toDateString('Y-m-d')}}" >
                                                                                <div class="help-block with-errors"></div>
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


