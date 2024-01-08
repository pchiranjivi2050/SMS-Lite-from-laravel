<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->






<div class="container">
    <div class="row">
        <div class="col-md-6"> <!-- /col-md-6 -->           
            <div class="row"> <!-- /row2 -->
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">View School Subject</h3>
                        <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $subject )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $subject->name }}</td>
                                        <td>{{ $subject->description }}</td>
                                        <td><img src="{{(!empty($subject->photo))? url('upload/subject_image/'.$subject->photo):url('upload/no_image.jpg')}}" height="70px" width="80px"></td>
                                        <td>
                                        <a href="{{route('subject.edit',$subject->id)}}" class="btn btn-rounded btn-info" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{route('subject.delete',$subject->id)}}" class="btn btn-rounded btn-danger ml-2" title="Delete" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.row2 -->            
        </div><!-- /.col-md-6 -->
        
        <div class="col-md-6"><!-- /col-md-6 -->            
            <div class="row"><!-- /row form  Add User Form-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a class="btn btn-rounded bg-success btn-outline m-b-20" id="unblockbtn">Add Subject</a> <a class="btn btn-outline m-b-20 m-r-20 invisible" id="blockbtn">Custom Message</a>
                    <div class="panel panel-success ">
                        <div class="panel-heading block"> School SUbject Add Form
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                        </div><!-- /.panel-heading block5 -->
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">          
                                    <div class="col-sm-12">
                                        <div class="white-box">
                                            <form method="POST" action="{{ route('subject.store') }}" enctype="multipart/form-data">
                                                @csrf
                                                <!-- /.1st row inside form -->
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <div class="form-group">
                                                        <h5><strong>Subject</strong><span class="text-danger">*</span></h5>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Subject" required="">
                                                        <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-7">
                                                        <div class="form-group">
                                                        <h5><strong>Subject Description</strong><span class="text-danger">*</span></h5>
                                                        <input type="text" class="form-control" id="description" name="description" placeholder="Description" required="">
                                                        <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <h5><strong>Subject Image</strong><span class="text-danger">*</span></h5>
                                                        <input type="file" class="form-control" id="photo" name="photo" >
                                                        </div>
                                                        <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <img id="showImage" src="{{asset('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                        </div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="offset-sm-4 col-sm-2" style="margin-top:35px;">
                                                        <div class="form-group">
                                                        <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                                                        </div>
                                                    </div>
                                                </div><!-- /.1st row inside form -->                                                   
                                            </form>
                                        </div><!-- /.white-box -->
                                    </div><!-- /.col-sm-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.panel-body -->
                            </div><!-- /.panel-wrapper collapse in -->
                    </div><!-- /.panel panel-success -->
                    <hr>
                </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
            </div><!-- /.row form  Add User Form -->            
        </div><!-- /.col-md-6 -->
    </div>
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




<script type="text/javascript">
    $(document).ready(function(){
        $('#photo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>





   <!-- Add User -->
   <script type="application/javascript">
        // This is for BlockUI plugin demo
        $('#blockbtn').click(function() {
            $('div.block').block({
                message: '<h6><img src="{{asset('plugins/images/busy.gif')}}" /> <strong>Click Add Subject</strong></h6>',
                css: {
                    "border": '1px solid #fff',
                    "border-radius": '25px',
                    "color": 'green'
                }
            });
        });
        $('#unblockbtn').click(function() {
            $('div.block').unblock();
        });
         //auto clicked Block
     $(document).ready(function(){
     $('#blockbtn').click(function(){
     });
            // set time out 5 sec
      setTimeout(function(){
         $('#blockbtn').trigger('click');
     }, 100);
     });

     //auto clicked Block
     $(document).ready(function(){
     $('#minimize').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize').trigger('click');
     }, 100);
     });
    </script>
