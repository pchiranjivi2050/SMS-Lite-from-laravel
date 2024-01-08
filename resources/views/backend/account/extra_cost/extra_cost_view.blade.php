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
            <div class="panel ">
                <div class="panel-heading block" style="color: white"> Extra Cost Form
                    <div class="pull-right" ><a href="#" data-perform="panel-collapse" style="color: blanchedalmond;"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                </div><!-- /.panel-heading block5 -->
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <div class="row">          
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <form method="POST" action="{{ route('extra.cost.store') }}">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                        <h5><strong>Cost ID</strong><span class="text-danger">*</span></h5>
                                                        <input type="text" class="form-control" id="cost_id" name="cost_id" value="{{$finalCostid}}"  required="" readonly>
                                                        <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                <h5><strong>Bill No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="bill_no" name="bill_no" placeholder="Bill No" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                <h5><strong>Bill Date</strong><span class="text-danger">*</span></h5>
                                                <input type="date" class="form-control" id="bill_date" name="bill_date" placeholder="" value="{{now()->toDateString('Y-m-d')}}" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Vendor Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder="Vendor Name" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Pan/Vat No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="pan_vat_no" name="pan_vat_no" placeholder="Pan Or Vat No" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <hr>
                                            <div class="col-sm-12">
                                                <table class="table table-bordered table-striped" id="user-tabel" style="width: 100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Item Name</th>
                                                            <th>Quantity</th>
                                                            <th colspan="2">Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tbody">
                                                        <tr>
                                                            <td><input type="text" name="item_name[]" id="item_name[]" placeholder="Item Name"></td>
                                                            <td><input type="text" name="quantity[]" id="quantity[]" placeholder="Quantity"></td>
                                                            <td><input type="text" name="price[]" id="price[]" placeholder="Price"></td>
                                                            <td><a href="#" class="btn btn-rounded btn-success addRow" title="Add Row">+</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Total Price</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total Price" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Discount</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Total Amount</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="total_amount" name="total_amount" placeholder="Amount" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                <h5><strong>Description</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="description" name="description" placeholder="Description" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            {{-- <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Bill Photo</strong><span class="text-danger">*</span></h5>
                                                <input type="file" class="form-control" id="image" name="image" >
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <img id="showImage" src="url('upload/no_image.jpg')}}" width="100px" height="100px" alt="">
                                                </div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form --> --}}
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
</div><!-- col-md-6 -->

<div class="container">
    <div class="row"> <!-- /row2 -->
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Extra Cost List</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Vendor Name</th>
                                <th>Bill No</th>
                                <th>Bill Date</th>
                                <th>Total Aomunt</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $cost )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $cost->vendor_name }}</td>
                                <td>{{ $cost->bill_no }}</td>
                                <td>{{ $cost->bill_date }}</td>
                                <td>{{ $cost->total_amount }}</td>
                                <td>
                                    <a href="{{route('extra.cost.edit',$cost->cost_id)}}" class="btn btn-rounded btn-info" title="Edit"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div><!-- /.row2 -->
</div>

<script>
    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
                    '<td><input type="text" name="item_name[]" id="item_name[]" placeholder="Item Name"></td>'+
                    '<td><input type="text" name="quantity[]" id="quantity[]" placeholder="Quantity"></td>'+
                    '<td><input type="text" name="price[]" id="price[]" placeholder="Price"></td>'+
                    '<td><a href="#" class="btn btn-rounded btn-danger deleteRow" title="Delete Row">-</a></td>'+
                '</tr>';
                $('.tbody').append(tr);
    }

    $('.tbody').on('click','.deleteRow',function(){
        $(this).parent().parent().remove();
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



   <!-- Add User -->
   <script type="application/javascript">
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
@include('admin.body.footer')



