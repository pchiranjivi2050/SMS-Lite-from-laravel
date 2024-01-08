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
                                    <form method="POST" action="{{ route('extra.cost.update') }}">
                                        @csrf
                                        <!-- /.1st row inside form -->
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                        <h5><strong>Cost ID</strong><span class="text-danger">*</span></h5>
                                                        <input type="text" class="form-control" id="cost_id" name="cost_id" value="{{$editData['0']->cost_id}}"  required="" readonly>
                                                        <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                <h5><strong>Bill No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="bill_no" name="bill_no" value="{{$editData['0']->bill_no}}" placeholder="Bill No" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                <h5><strong>Bill Date</strong><span class="text-danger">*</span></h5>
                                                <input type="date" class="form-control" id="bill_date" name="bill_date" placeholder="" value="{{$editData['0']->bill_date}}" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Vendor Name</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder="Vendor Name" value="{{$editData['0']->vendor_name}}" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Pan/Vat No</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="pan_vat_no" name="pan_vat_no" placeholder="Pan Or Vat No" value="{{$editData['0']->pan_vat_no}}" required="">
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
                                                    <tbody>
                                                        @foreach($editData as $key => $cost )
                                                        <tr>
                                                            <td><input type="text" name="item_name[]" id="item_name[]" value="{{$cost->item_name}}" placeholder="Item Name"></td>
                                                            <td><input type="text" name="quantity[]" id="quantity[]" value="{{$cost->quantity}}" placeholder="Quantity"></td>
                                                            <td><input type="text" name="price[]" id="price[]" value="{{$cost->price}}" placeholder="Price"></td>
                                                            <td><a href="#" class="btn btn-rounded btn-success addRow">+</a> <a href="#" class="btn btn-rounded btn-danger deleteRow">-</a></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Total Price</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="total_price" name="total_price" value="{{$editData['0']->total_price}}" placeholder="Total Price" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Discount</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="discount" name="discount" value="{{$editData['0']->discount}}" placeholder="Discount" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-4">
                                                <div class="form-group">
                                                <h5><strong>Total Amount</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="total_amount" name="total_amount" value="{{$editData['0']->total_amount}}" placeholder="Amount" required="">
                                                <div class="help-block with-errors"></div>
                                                </div>
                                            </div> <!-- /.col-sm-4 inside form -->
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                <h5><strong>Description</strong><span class="text-danger">*</span></h5>
                                                <input type="text" class="form-control" id="description" name="description" value="{{$editData['0']->description}}" placeholder="Description" required="">
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


<script>
    $('.addRow').on('click',function(){
        addRow();
    });

    function addRow(){
        var tr = '<tr>'+
                    '<td><input type="text" name="item_name[]" id="item_name[]" value="{{$cost->item_name}}" placeholder="Item Name"></td>'+
                    '<td><input type="text" name="quantity[]" id="quantity[]" value="{{$cost->quantity}}" placeholder="Quantity"></td>'+
                    '<td><input type="text" name="price[]" id="price[]" value="{{$cost->price}}" placeholder="Discount"></td>'+
                    '<td><a href="#" class="btn btn-rounded btn-success addRow">+</a> <a href="#" class="btn btn-rounded btn-danger deleteRow">-</a></td>'+
                '</tr>';
                $('tbody').append(tr);
    }

    $('tbody').on('click','.deleteRow',function(){
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



@include('admin.body.footer')



