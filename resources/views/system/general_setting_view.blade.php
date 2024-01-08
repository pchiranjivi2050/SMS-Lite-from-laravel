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
                <div class="panel-heading block"> General Setting Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="white-box">
                                       @foreach($systemData as $system)
                                    <form method="POST" action="{{ route('general.setting.update',$system->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>School Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="name" id="name" value="{{$system->name}}" placeholder="System Name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>School Title</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="title" name="title" value="{{$system->title}}" placeholder="System Titie" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Contact No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="phone" name="phone" value="{{$system->phone}}" placeholder="Contact No" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="address" name="address" value="{{$system->address}}" placeholder="Address" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Email</strong><span class="text-danger">*</span></h5>
                                                <input type="email" class="form-control" id="email" name="email" value="{{$system->email}}" placeholder="email" data-error="Bruh, that email address is invalid" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Currency</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="currency" name="currency" value="{{$system->currency}}" placeholder="Currency" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Running Session</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="session" name="session" value="{{$system->session}}" placeholder="2021 - 2022" required="" disabled>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Footer</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="footer" name="footer" value="{{$system->footer}}" placeholder="" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Body Color</strong><span class="text-danger">*</span></h5>
                                                <input type="color" class="form-control" id="body_color" name="body_color" value="{{$system->body_color}}" required="" >
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>SideBar & Navbar Color</strong><span class="text-danger">*</span></h5>
                                                <input type="color" class="form-control" id="theme" name="theme" value="{{$system->theme}}" required="" >
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                             <div class="col-sm-12">
                                                <div class="form-group">
                                                <h5><strong>Google Map</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="image" name="image" value="{{$system->image}}" >
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <!-- /.col-sm-4 inside form -->
                                            <!-- <div class="col-md-4">
                                                <h5><strong>System Theme</strong><span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="theme" id="theme" required="" class="form-control">
                                                        <option value="" selected="" disabled="">Select User Type</option>
                                                        <option value="default" {{($system->theme == "default" ? "selected" : "")}}>default</option>
                                                        <option value="default-dark" {{($system->theme == "default-dark" ? "selected" : "")}}>default-dark</option>
                                                        <option value="megna" {{($system->theme == "megna" ? "selected" : "")}}>megna</option>
                                                        <option value="megan-dark" {{($system->theme == "megan-dark" ? "selected" : "")}}>megan-dark</option>
                                                        <option value="blue" {{($system->theme == "blue" ? "selected" : "")}}>blue</option>
                                                        <option value="blue-dark" {{($system->theme == "blue-dark" ? "selected" : "")}}>blue-dark</option>
                                                        <option value="gray" {{($system->theme == "gray" ? "selected" : "")}}>gray</option>
                                                        <option value="gray-dark" {{($system->theme == "gray-dark" ? "selected" : "")}}>gray-dark</option>
                                                        <option value="success" {{($system->theme == "success" ? "selected" : "")}}>success</option>
                                                        <option value="green-dark" {{($system->theme == "green-dark" ? "selected" : "")}}>green-dark</option>
                                                        <option value="purple" {{($system->theme == "purple" ? "selected" : "")}}>purple</option>
                                                        <option value="purple-dark" {{($system->theme == "purple-dark" ? "selected" : "")}}>purple-dark</option>
                                                    </select>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>/.col-sm-4 inside form -->
                                            {{-- <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Home Page Image</strong><span class="text-danger">*<p id="file-result"></p></span></h5>
                                                <input type="file" class="form-control" id="image" name="image" >
                                                </div>
                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showImage" src="{{(!empty($system->image))? url('upload/system_image/'.$system->image):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form --> --}}
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>School Logo</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="logo" name="logo" >
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showLogo" src="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            
                                            <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5><strong>School Detail</strong><span class="text-danger">*</span></h5>
                                                    <textarea class="form-control" name="school_detail" id="school_detail" placeholder="Enter School Detail (within 500 words)" required="">{{ $system->school_detail }}</textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5><strong>Address</strong><span class="text-danger">*</span></h5>
                                                    <input type="text" class="form-control" name="address" id="address" value="{{ $system->address }}" placeholder="System Address" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->

                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <h5><strong>Phone</strong><span class="text-danger">*</span></h5>
                                                    <input type="text" class="form-control" name="phone" id="phone" value="{{ $system->phone }}" placeholder="System Phone" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                        </div> <!-- /.row -->
                                        </div>
                                        <!-- /.1st row inside form -->
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info btn-rounded" id="Submit" value="Submit"></input>
                                        </div>
                                    </form>
                                    @endforeach
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

<script>
    let fileInput = document.getElementById("image");
    let fileResult = document.getElementById("file-result");
    let fileSubmit = document.getElementById("Submit");
    fileInput.addEventListener("change", function () {
    if (fileInput.files.length > 0) {
        const fileSize = fileInput.files.item(0).size;
        const fileMb = fileSize / 1024 ** 2;
        if (fileMb >= 2) {
        fileResult.innerHTML = "Please select a file less than 2MB.";
        fileSubmit.disabled = true;
        } else {
        fileResult.innerHTML = "Success, your file is " + fileMb.toFixed(1) + "MB.";
        fileSubmit.disabled = false;
        }
    }
    });
</script>

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

<script type="text/javascript">
    $(document).ready(function(){
        $('#logo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showLogo').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



