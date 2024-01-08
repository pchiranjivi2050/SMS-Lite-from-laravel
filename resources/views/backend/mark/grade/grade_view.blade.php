<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<div class="container">
    <div class="row"><!-- /row form  Add User Form-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a class="btn btn-rounded bg-success btn-outline m-b-20" id="unblockbtn">Add Grade</a> <a class="btn btn-outline m-b-20 m-r-20 invisible" id="blockbtn">Custom Message</a>
            <div class="panel panel-success ">
                <div class="panel-heading block"> Grade Add Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">          
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <form method="POST" action="{{ route('grade.store') }}">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Grade Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="grade_name" name="grade_name" placeholder="Grade name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Grade Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="grade_point" name="grade_point" placeholder="Grade Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Start Marks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="start_marks" name="start_marks" placeholder="Start Marks" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>End Marks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="end_marks" name="end_marks" placeholder="End Marks" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Start Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="start_point" name="start_point" placeholder="Start Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>End Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="end_point" name="end_point" placeholder="End Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Remarks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Remarks" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                        </div><!-- /.1st row inside form -->
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
    </div><!-- /.row form  Add User Form -->
</div><!-- Container -->


<div class="container">
    <div class="row">
        <div class="col-md-12"><!-- col-md-6 -->
            <div class="white-box">
                <h3 class="box-title m-b-0">View Grade</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Grade Name</th>
                                <th>Grade Point</th>
                                <th>Start Marks</th>
                                <th>End Marks</th>
                                <th>Point Range</th>
                                <th>Remark</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $grade )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $grade->grade_name }}</td>
                                <td>{{ number_format((float)$grade->grade_point,2) }}</td>
                                <td>{{ number_format((float)$grade->start_marks,2) }}</td>
                                <td>{{ number_format((float)$grade->end_marks,2) }}</td>
                                <td>{{ number_format((float)$grade->start_point,2) }} - {{ number_format((float)$grade->end_point,2) }}</td>
                                <td>{{ $grade->remarks }}</td>
                                <td>
                                <a href="{{route('grade.edit',$grade->id)}}" class="btn btn-rounded btn-info" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{route('grade.delete',$grade->id)}}" class="btn btn-rounded btn-danger ml-2" title="Delete" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- col-md-6 -->
    </div><!-- /.row2 -->
</div>

        







  
        

@include('admin.body.footer')










   <!-- Add User -->
   <script type="application/javascript">
        // This is for BlockUI plugin demo
        $('#blockbtn').click(function() {
            $('div.block').block({
                message: '<h6><img src="{{asset('plugins/images/busy.gif')}}" /> <strong>Click Add Grade</strong></h6>',
                css: {
                    "border": '1px solid #fff',
                    "border-radius": '25px',
                    "color": 'green',
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
