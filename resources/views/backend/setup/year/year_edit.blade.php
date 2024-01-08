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
            <form method="post" action="{{route('update.year',$editData->id)}}">
            @csrf
                <!-- /.1st row inside form -->
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                        <h5><strong>Year</strong><span class="text-danger">*</span></h5>
                        <input type="text" class="form-control" id="name" name="name" value="{{$editData->name}}" placeholder="Year" required="">
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
