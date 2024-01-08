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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success ">
                <div class="panel-heading block"> Grade Edit Form
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">          
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <form method="POST" action="{{ route('grade.update',$editData->id)}}">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Grade Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="grade_name" name="grade_name" value="{{ $editData->grade_name }}" placeholder="Grade name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Grade Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="grade_point" name="grade_point" value="{{ $editData->grade_point }}" placeholder="Grade Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Start Marks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="start_marks" name="start_marks" value="{{ $editData->start_marks }}" placeholder="Start Marks" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>End Marks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="end_marks" name="end_marks" value="{{ $editData->end_marks }}" placeholder="End Marks" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Start Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="start_point" name="start_point" value="{{ $editData->start_point }}" placeholder="Start Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>End Point</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="end_point" name="end_point" value="{{ $editData->end_point }}" placeholder="End Point" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Remarks</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="remarks" name="remarks" value="{{ $editData->remarks }}" placeholder="Remarks" required="">
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
      







  
        

@include('admin.body.footer')







