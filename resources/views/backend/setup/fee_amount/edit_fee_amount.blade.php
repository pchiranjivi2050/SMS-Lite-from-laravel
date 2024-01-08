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
    <div class="row">
        <div class="col-md-6"><!-- col-md-6 -->
            <div class="row"><!-- /row form  Add User Form-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><!-- <a class="btn btn-rounded bg-success btn-outline m-b-20" id="unblockbtn">Add Fee Amount</a> <a class="btn btn-outline m-b-20 m-r-20 invisible" id="blockbtn">Custom Message</a> -->
                    <div class="panel panel-success ">
                        <div class="panel-heading block"> Fee Amount Form
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                        </div><!-- /.panel-heading block5 -->
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="{{route('fee.amount.update',$editData['0']->fee_category_id)}}">
                                                @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <div class="add_item">  
                                                    <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <h5>Fee Category<span class="text-danger">*</span></h5>
                                                            <div class="controls">
                                                                <select name="fee_category_id"  required="" class="form-control">
                                                                    <option value="" selected="" disabled="">Select Fee Category</option>
                                                                    @foreach($fee_categories as $category)
                                                                    <option value="{{ $category->id }}" {{ ($editData['0']->fee_category_id == $category->id)? "selected":"" }}>{{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="help-block"></div></div>
                                                            </div> <!-- End Form Group -->  
                                                            </div><!-- End cool-sm-6 -->
                                                            </div><!-- End Row -->   
                                                            
                                                             @foreach($editData as $edit)
                                                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                                                <div class="row">
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <h5>Student Class<span class="text-danger">*</span></h5>
                                                                            <div class="controls">
                                                                                <select name="class_id[]"  required="" class="form-control">
                                                                                    <option value="" selected="" disabled="">Select Student Class</option>
                                                                                    @foreach($classes as $class)
                                                                                    <option value="{{ $class->id }}" {{ ($edit->class_id == $class->id)? "selected":"" }}>{{ $class->name }}</option>
                                                                                    @endforeach
                                                                                </select>
                                                                                <div class="help-block"></div></div>
                                                                        </div><!-- End Form Group -->
                                                                    </div> <!-- End Col Md 5 -->
                                                                    <div class="col-md-5">
                                                                        <div class="form-group">
                                                                            <h5>Amount <span class="text-danger">*</span></h5>
                                                                            <div class="controls">
                                                                                <input type="text" name="amount[]" value="{{$edit->amount}}"  class="form-control">              
                                                                            </div>
                                                                        </div> 
                                                                    </div><!-- End Col Md 5 -->
                                                                    <div class="col-md-2" style="padding-top: 35px;">
                                                                        <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                                                        <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>
                                                                    </div><!-- End Col Md 2 -->
                                                                </div> <!-- End Row -->  
                                                            </div> <!-- // End Remove Delete  -->
                                                             @endforeach 
                                                    </div> <!--//End add_item -->
                                                </div>
                                            </div>
                                            <br>
                                            <div class="text-xs-right">
                                                <input type="submit" value="submit" class="btn btn-info btn-rounded mb-5">
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.col -->
                                </div><!-- /.row -->                                
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel-wrapper collapse in -->
                    </div><!-- /.panel panel-success -->
                </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
            </div><!-- /.row form  Add User Form -->
        </div><!-- col-md-6 -->
        <div class="col-md-6">
                <div class="white-box">
                    <h3 class="box-title m-b-0">Fee Amount view </h3>
                    <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                    <div class="table-responsive">
                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Class Name</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($detailsData as $key => $detail )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $detail['student_class']['name'] }}</td>
                                    <td>{{ $detail->amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- col-md-6 -->



        <div style="visibility: hidden;">
            <div class="whole_extra_item_add" id="whole_extra_item_add">
                <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <h5>Student Class<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="class_id[]"  required="" class="form-control">
                                        <option value="" selected="" disabled="">Select Student Class</option>
                                        @foreach($classes as $class)
                                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="help-block"></div>
                                </div>
                            </div><!-- End Form Group -->
                        </div> <!-- End Col Md 5 -->
                        <div class="col-md-5">
                            <div class="form-group">
                                <h5>Amount <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="amount[]"  class="form-control">              
                                </div>
                            </div> 
                        </div> <!-- End Col Md 5 -->
                        <div class="col-md-2" style="padding-top: 35px;">
                            <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>   
                            <span class="btn btn-danger removeeventmore"><i class="fa fa-minus-circle"></i></span>   
                        </div><!-- End Col Md 2 -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- row -->
</div><!-- Container -->







        




<script type="text/javascript">
    $(document).ready(function(){
        var counter = 0;
        $(document).on("click",".addeventmore",function(){
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click",'.removeeventmore',function(event){
            $(this).closest('.delete_whole_extra_item_add').remove();
            counter -= 1;
        });
    });
</script>


@include('admin.body.footer')

