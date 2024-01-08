<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->







<!-- /row form  Add User Form-->
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <form method="post" action="{{route('update.user',$editData->id)}}">
            @csrf
                <!-- /.1st row inside form -->
                <div class="row">
                    <div class="col-md-4">
                        <h5><strong>User Type</strong><span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="usertype" id="usertype" required="" class="form-control">
                                <option value="" selected="" disabled="">Select User Type</option>
                                <option value="Admin" {{($editData->usertype == "Admin" ? "selected" : "")}}>Admin</option>
                                <option value="Employee" {{($editData->usertype == "Employee" ? "selected" : "")}}>Employee</option>
                                <option value="Student" {{($editData->usertype == "Student" ? "selected" : "")}}>Student</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div><!-- /.col-sm-4 inside form -->
                    <div class="col-sm-4">
                        <div class="form-group">
                        <h5><strong>User Name</strong><span class="text-danger">*</span></h5>
                        <input type="text" class="form-control"name="name" id="name" value="{{$editData->name}}" placeholder="User Name" required="">
                        <div class="help-block with-errors"></div>
                        </div>
                    </div> <!-- /.col-sm-4 inside form -->
                    <div class="col-sm-4">
                        <div class="form-group">
                        <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                        <input type="email" class="form-control" id="email" name="email" value="{{$editData->email}}" placeholder="Email" data-error="Bruh, that email address is invalid" required="" disabled>
                        <div class="help-block with-errors"></div>
                        </div>
                    </div> <!-- /.col-sm-4 inside form -->
                    <div class="col-sm-4">
                        <div class="form-group">
                        <h5><strong>Password</strong><span class="text-danger">*</span></h5>
                        <input type="password" class="form-control" id="password" name="password" value="{{$editData->passwodr}}" placeholder="Password" required="">
                        <div class="help-block with-errors"></div>
                        </div>
                    </div> <!-- /.col-sm-4 inside form -->
                </div>
                <!-- /.1st row inside form -->
                <div class="form-group">
                    <input type="submit" class="btn btn-info btn-rounded" value="Update"></input>
                </div>
            </form>
        </div><!-- /.white-box -->
    </div><!-- /.col-sm-12 -->
</div><!-- /.row -->
<!-- /.row form  Add User Form -->




@include('admin.body.footer')


