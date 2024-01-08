@php
$allData = App\Models\System::all();
@endphp
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
    <div class="row justify-content-md-center">
        <div class="col col-md-12"></div>
            <div class="white-box">
                @foreach($allData as $system)
                    <div class="user-bg"> <img alt="user" src="{{(!empty($system->image))? url('upload/system_image/'.$system->image):url('upload/no_image.jpg')}}" width="100%" >
                        @endforeach
                        <div class="overlay-box">
                            <div class="user-content">
                                <a href="javascript:void(0)" ><img src="{{(!empty($user->image))? url('upload/user_image/'.$user->image):url('upload/no_image.jpg')}}" class="thumb-lg img-circle" alt="img"></a>
                                <h4 class="text-white">{{ $user->name }}</h4>
                                <h5 class="text-white">{{ $user->usertype }}</h5>
                                <h5 class="text-white">{{ $user->email }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="user-btm-box">
                        <div class="col-md-4 col-sm-4 text-center">
                            <h5 class="text-purple">Mobile No</h5>
                            <h4>{{$user->mobile}}</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <h5 class="text-purple">Address</h5>
                            <h4>{{$user->address}}</h4>
                        </div>
                        <div class="col-md-4 col-sm-4 text-center">
                            <h5 class="text-purple">Gender</h5>
                            <h4>{{$user->gender}}</h4>
                        </div>
                    </div>
                </div>
        </div>                   
    </div>
</div>






    <div class="container">
     <!-- /row form  Add User Form-->
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success ">
                <div class="panel-heading block"> Employee Profile Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">          
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-md-4">                  
                                                <h5><strong>User Type</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="usertype" id="usertype" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Admin" {{($user->usertype == "Admin" ? "selected" : "")}}>Admin</option>
                                                        <option value="Employee" {{($user->usertype == "Employee" ? "selected" : "")}}>Employee</option>
                                                        <option value="Student" {{($user->usertype == "Student" ? "selected" : "")}}>Student</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>ID No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="id_no" id="id_no" value="{{$user->id_no}}" placeholder="User Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>User Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="name" id="name" value="{{$user->name}}" placeholder="User Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" placeholder="Email" data-error="Bruh, that email address is invalid" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Gender</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="gender" id="gender" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Male" {{($user->gender == "Male" ? "selected" : "")}}>Male</option>
                                                        <option value="Female" {{($user->gender == "Female" ? "selected" : "")}}>Female</option>
                                                        <option value="Other" {{($user->gender == "Other" ? "selected" : "")}}>Other</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Mobile</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{$user->mobile}}" placeholder="Mobile No" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="address" name="address" value="{{$user->address}}" placeholder="Address" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Qualification</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="qualification" name="qualification" value="{{$user->qualification}}" placeholder="Qualification" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <h5><strong>Designation</strong><span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="designation_id"  required="" class="form-control" readonly>
                                                            <option value="" selected="" disabled="">Select Employee Designation</option>
                                                            @foreach($designations as $designation)
                                                            <option value="{{$designation->id }}" {{($designation->id = $user->designation_id)? 'selected':''}}>{{ $designation->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Salary</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="salary" name="salary" value="{{$user->salary}}" placeholder="Address" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Marital Status</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="marital_status" id="marital_status" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Single" {{($user->marital_status == "Single" ? "selected" : "")}}>Single</option>
                                                        <option value="Engaged" {{($user->marital_status == "Engaged" ? "selected" : "")}}>Engaged</option>
                                                        <option value="Married" {{($user->marital_status == "Married" ? "selected" : "")}}>Married</option>
                                                        <option value="Divorced" {{($user->marital_status == "Divorced" ? "selected" : "")}}>Divorced</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Blood Group</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="blood_group" name="blood_group" value="{{$user->blood_group}}" placeholder="Blood Group" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="fname" name="fname" value="{{$user->fname}}" placeholder="Father Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Mother Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="mname" name="mname" value="{{$user->mname}}" placeholder="Mother Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-md-4">                  
                                                <h5><strong>Religion</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="religion" id="religion" required="" class="form-control" readonly>
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="Hinduism" {{($user->religion == "Hinduism" ? "selected" : "")}}>Hinduism</option>
                                                        <option value="Buddhism" {{($user->religion == "Buddhism" ? "selected" : "")}}>Buddhism</option>
                                                        <option value="Islam" {{($user->religion == "Islam" ? "selected" : "")}}>Islam</option>
                                                        <option value="Kiratism" {{($user->religion == "Kiratism" ? "selected" : "")}}>Kiratism</option>
                                                        <option value="Christianity" {{($user->religion == "Christianity" ? "selected" : "")}}>Christianity</option>
                                                        <option value="Other" {{($user->religion == "Other" ? "selected" : "")}}>Other</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>                         
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <h5><strong>Profile Image</strong><span class="text-danger">*</span></h5>
                                                    <input type="file" class="form-control" id="image" name="image" readonly>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                    <img id="showImage" src="{{(!empty($user->image))? url('upload/user_image/'.$user->image):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                        </div>
                                        <!-- /.1st row inside form -->
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
</script>

  