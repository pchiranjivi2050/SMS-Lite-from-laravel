<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->
@php
$obj = new Nilambar\NepaliDate\NepaliDate();
$year= date('Y');
$month = date('m');
$day = date('d');
$dates = $obj->convertAdToBs($year, $month, $day);
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container">
    <div class="row"><!-- /row form  Add User Form-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-success ">
                <div class="panel-heading block"> Add Student Fee
                    <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form method="post" action="{{route('fee.bill.store')}}" target="_blank">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <h5><strong>Bill No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="bill_no" name="bill_no" value="{{$finalBill}}" placeholder="" required="" readonly>
                                                <div class="help-block with-errors"></div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h5><strong>Bill Date</strong><span class="text-danger">*</span></h5>
                                    <input type="date" class="form-control" id="rdate" name="date" value="{{now()->toDateString('Y-m-d')}}"  required="">
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col-sm-4 inside form -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Year</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="year_id" id="year_id" required="" class="form-control" >
                                                <option value="" selected="" disabled="">Select Student Year</option>
                                                @foreach($years as $year)
                                                <option value="{{ $year->id }}" {{($year->id == $year->id)? 'selected':'' }}>{{$year->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Class</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="class_id" id="class_id" required="" class="form-control" >
                                                <option value="" selected="" disabled="">Select Student Class</option>
                                                @foreach($classes as $class)
                                                <option value="{{ $class->id }}" {{($class->id == $class->id)? 'selected':'' }}>{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Section</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="section_id" id="section_id" class="form-control" >
                                                <option value="" selected="" disabled="">Select Student Section</option>
                                                @foreach($sections as $section)
                                                <option value="{{ $section->id }}" {{($section->id == $section->id)? 'selected':'' }}>{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Fee Type</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="fee_category_id"  required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Fee Type</option>
                                                @foreach($feeCategorys as $feename)
                                                <option value="{{ $feename->fee_category_id }}" {{($feename->fee_category_id == $feename->fee_category_id)? 'selected':'' }}>{{ $feename['fee_category']['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                @if ($feename->fee_category_id == '3') 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Exam Type</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="exam_type_id"  required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Exam Type</option>
                                                @foreach($exams as $exam)
                                                <option value="{{ $exam->id }}">{{{ $exam->name }}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                @endif
                                @if ($feename->fee_category_id == '2') 
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Month</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="month"  required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Month</option>
                                                <option value="Baishakh">Baishakh</option>
                                                <option value="Jestha">Jestha</option>
                                                <option value="Ashadh">Ashadh</option>
                                                <option value="Shrawan">Shrawan</option>
                                                <option value="Bhadau">Bhadau</option>
                                                <option value="Asoj">Asoj</option>
                                                <option value="Kartik">Kartik</option>
                                                <option value="Mangsir">Mangsir</option>
                                                <option value="Poush">Poush</option>
                                                <option value="Magh">Magh</option>
                                                <option value="Falgun">Falgun</option>
                                                <option value="Chaitra">Chaitra</option>
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                @endif
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <h5><strong>Student Name</strong><span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="student_id"  required="" class="form-control">
                                                <option value="" selected="" disabled="">Select Student</option>
                                                @foreach($students as $student)
                                                <option value="{{ $student->student_id }}" >{{ $student['student']['name'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block"></div>
                                        </div>
                                    </div><!-- End Form Group -->
                                </div><!-- /.col-sm-4 inside form -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h5><strong>Amount</strong><span class="text-danger">*</span></h5>
                                    <input type="text" class="form-control" id="amount" name="amount" value="{{$feename->amount}}" placeholder="Amount" required="">
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col-sm-4 inside form -->
                                <div class="col-sm-6">
                                    <div class="form-group">
                                    <h5><strong>Discount %</strong><span class="text-danger">*</span></h5>
                                    <input type="number" class="form-control" id="discount" name="discount" value="" placeholder="Discount" >
                                    </div>
                                </div> <!-- /.col-sm-4 inside form -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <h5><strong>Remark</strong><span class="text-danger">*</span></h5>
                                    <input type="text" class="form-control" id="remarks" name="remarks" value="" placeholder="Remark" required="">
                                    <div class="help-block with-errors"></div>
                                    </div>
                                </div> <!-- /.col-sm-4 inside form -->
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


<script>
    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
                    '<td><select name="fee_category_id"  required="" class="form-control">'+
                            '<option value="" selected="" disabled="">Select Fee Type</option>'+
                            '@foreach($feeCategorys as $feename)'+
                            '<option value="{{ $feename->fee_category_id }}"}}>{{ $feename["fee_category"]["name"] }}</option>'+
                            '@endforeach'+
                        '</select></td>'+
                    '<td><input type="text" name="fee_of[]" id="fee_of[]" placeholder="Fee Of"></td>'+
                    '<td><input type="text" name="sub_amount[]" id="sub_amount[]" placeholder="Amount"></td>'+
                    '<td><a href="#" class="btn btn-rounded btn-danger deleteRow" title="Delete Row">-</a></td>'+
                '</tr>';
                $('.tbody').append(tr);
    }

    $('.tbody').on('click','.deleteRow',function(){
        $(this).parent().parent().remove();
    });
</script>

<!-- Add User -->
   <script type="application/javascript">
     //auto clicked Block
     $(document).ready(function(){
     $('#minimize1').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize1').trigger('click');
     }, 100);
     });
    </script>



@include('admin.body.footer')






    