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
                <div class="panel-heading block"> Portfolio Image Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="white-box">
                                    @foreach($PortfolioData as $system)
                                    <form method="POST" action="{{ route('portfolio.setting.update',$system->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Home Page Image1</strong><span class="text-danger">*<p id="file-result"></p></span></h5>
                                                <input type="file" class="form-control" id="image" name="image" >
                                                </div>
                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showImage" src="{{(!empty($system->image))? url('upload/portfolio_image/'.$system->image):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Home Page Image2</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="photo" name="photo" >
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showphoto" src="{{(!empty($system->photo))? url('upload/portfolio_image/'.$system->photo):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Home Page Image3</strong><span class="text-danger">*<p id="file-result"></p></span></h5>
                                                <input type="file" class="form-control" id="image1" name="image1" >
                                                </div>
                                                <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showImage" src="{{(!empty($system->image))? url('upload/portfolio_image/'.$system->image):url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                        </div>
                                        <!-- /.1st row inside form -->
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-info btn-rounded" id="Submit" value="Submit"></input>
                                        </div>
                                    </form>
                                </div><!-- /.white-box -->
                                @endforeach
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
<script>
    let fileInput = document.getElementById("photo");
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
        $('#photo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showphoto').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



