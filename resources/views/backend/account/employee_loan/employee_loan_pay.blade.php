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
               <div class="panel-heading block"> Employee Loan Pay Form
                   <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
               </div><!-- /.panel-heading block5 -->
               <div class="panel-wrapper collapse in" aria-expanded="true">
                   <div class="panel-body">
                       <div class="row">          
                           <div class="col-sm-12">
                               <div class="white-box">
                                   <form method="POST" action="{{route('loan.pay.store')}}" enctype="multipart/form-data">
                                       @csrf
                                       <!-- /.1st row inside form -->
                                       <div class="row">
                                           <div class="col-sm-2">
                                            <div class="form-group">
                                                <h5><strong>ID No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control"name="id_no" id="id_no" value="{{$allData->id_no}}" placeholder="Employee Name" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                           </div>
                                       </div><!-- end row -->
                                       <div class="row">
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Employee Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control"name="name" id="name" value="{{$allData->name}}" placeholder="Employee Name" required="" readonly>
                                               <input type="hidden" class="form-control"name="employee_id" id="employee_id" value="{{$allData->id}}" placeholder="Employee Name" required="">
                                               <div class="help-block with-errors"></div>
                                               </div>
                                           </div> <!-- /.col-sm-4 inside form -->
                                           <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Father Name</strong><span class="text-danger">*</span></h5>
                                               <input type="text" class="form-control" id="fname" name="fname" value="{{$allData->fname}}" placeholder="Father Name" required="" readonly>
                                               <div class="help-block with-errors"></div>
                                               </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                               <div class="form-group">
                                               <h5><strong>Join Date</strong><span class="text-danger">*</span></h5>
                                               <input type="date" class="form-control" id="join_date" name="join_date" value="{{$allData->join_date}}"  required="" readonly>
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
                                                            <option value="{{$designation->id }}" {{($allData->designation_id == $designation->id)? 'selected':''}}>{{ $designation->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div><!-- End Form Group -->
                                            </div><!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Salary</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="salary" name="salary" value="{{$allData->salary}}" placeholder="Salary" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                       </div><!-- /.1st row inside form -->
                                       <div class="row"><!-- /row form  Add User Form-->
                                           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                               <div class="panel panel-success ">
                                                   <div class="panel-heading block1"> Employee Loan Pay
                                                       <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize1"></i></strong><strong><i class="ti-minus" id="minimize1"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                                                   </div><!-- /.panel-heading block5 -->
                                                   <div class="panel-wrapper collapse in" aria-expanded="true">
                                                       <div class="panel-body">
                                                           <div class="row">          
                                                               <div class="col-sm-12">
                                                                   <div class="white-box">
                                                                           <!-- /.1st row inside form -->
                                                                   <div class="row">
                                                                        <div class="col-sm-4">
                                                                            <div class="form-group">
                                                                                <h5><strong>Loan No</strong><span class="text-danger">*</span></h5>
                                                                                <input type="text" class="form-control" id="loan_no" name="loan_no" value="{{$editData->loan_no}}" placeholder="Loan No" readonly>
                                                                                <div class="help-block with-errors"></div>
                                                                            </div>
                                                                        </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Loan Amount</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="loan_amount" name="loan_amount" value="{{$editData->loan_amount}}" placeholder="Loan Amount" readonly>
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Monthly Loan To Be Paid</strong><span class="text-danger">*</span></h5>
                                                                               <input type="text" class="form-control" id="monthly_loan_paid" name="monthly_loan_paid" value="{{$editData->monthly_loan_paid}}" placeholder="Monthly Loan Paid">
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                       <div class="col-sm-4">
                                                                           <div class="form-group">
                                                                               <h5><strong>Pay Date</strong><span class="text-danger">*</span></h5>
                                                                               <input type="date" class="form-control" id="paid_date" name="paid_date" value="{{now()->toDateString('Y-m-d')}}" >
                                                                               <div class="help-block with-errors"></div>
                                                                           </div>
                                                                       </div> <!-- /.col-sm-4 inside form -->
                                                                   </div><!-- /.1st row inside form -->                                                        
                                                                   </div><!-- /.white-box -->
                                                               </div><!-- /.col-sm-12 -->
                                                           </div><!-- /.row -->
                                                       </div><!-- /.panel-body -->
                                                       </div><!-- /.panel-wrapper collapse in -->
                                               </div><!-- /.panel panel-success -->
                                           </div><!-- /.col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
                                       </div><!-- /.row form  Previous School Details -->
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
    $(document).ready(function(){
        $('#birth_certificate').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show_birth_certificate').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    $(document).ready(function(){
        $('#pre_letter').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show_pre_letter').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>


