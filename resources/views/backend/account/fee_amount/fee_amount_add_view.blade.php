<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container">
    <div class="row"><!-- /row form  Add User Form-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success ">
                <div class="panel-heading block"> Student Fee Collection
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="get" action="{{route('fee.get.student')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5><strong>Year</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="year_id" id="year_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Student Year</option>
                                                @foreach($years as $year)
                                                <option value="{{ $year->id }}" {{($date == $year->name) ? 'selected':''}}>{{ $year->name }}</option>
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
                                            <select name="class_id" id="class_id" required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Student Class</option>
                                                @foreach($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->name }}</option>
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
                                            <select name="section_id" id="section_id" class="form-control">
                                                <option value="" selected="" disabled="">Select Student Section</option>
                                                @foreach($sections as $section)
                                                <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <h5><strong>Fee Type</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="fee_category_id"  required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Fee Type</option>
                                                @foreach($feeCategorys as $feetype)
                                                <option value="{{ $feetype->id }}">{{ $feetype->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                            </div><!-- /.row -->  
                            <br>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                                </div>
                        </form>         
                    </div><!-- /.panel-body -->
                </div><!-- /.panel-wrapper collapse in -->
            </div><!-- /.panel panel-success -->
        </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
    </div><!-- /.row form  Add User Form -->
</div>




@include('admin.body.footer')



    