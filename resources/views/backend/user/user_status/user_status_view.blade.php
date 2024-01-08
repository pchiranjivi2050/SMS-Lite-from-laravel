<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->



<div class="container">
    <div class="row">
        <div class="col-md-6"><!-- col-md-6 -->
            <div class="row"> <!-- /row2 -->
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">View Class</h3>
                        <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>User Type</th>
                                        <th>User ID</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $user )
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{$user->usertype}}</td>
                                        <td>{{$user->id_no}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.row2 -->
        </div><!-- col-md-6 -->


        <div class="col-md-6"><!-- col-md-6 -->
            <div class="row"><!-- /row form  Add User Form-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-success ">
                        <div class="panel-heading block"> Active/Deactive User
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i class="ti-plus" id="minimize"></i></strong><strong><i class="ti-minus" id="minimize"></i></strong></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                        </div><!-- /.panel-heading block5 -->
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">          
                                    <div class="col-sm-12">
                                        <div class="white-box">
                                            <form method="POST" action="{{ route('active.or.deactive') }}">
                                                @csrf
                                                <!-- /.1st row inside form -->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h5><strong>User Name</strong><span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="name" id="name" required="" class="form-control">
                                                                <option value="" selected="" disabled="">Select User</option>
                                                                @foreach($allData as $user)
                                                                <option value="{{$user->id}}">{{$user->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="help-block with-errors"></div>
                                                        </div>                         
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                        <h5><strong>ID No</strong><span class="text-danger">*</span></h5>
                                                        <input type="text" class="form-control"name="id_no" id="id_no" placeholder="ID No" >
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-6">
                                                        <h5><strong>Active/Deactive User</strong><span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="status" id="status" required="" class="form-control">
                                                                <option value="" selected="" disabled="">Select Status</option>
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactive</option>
                                                            </select>
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
        </div><!-- col-md-6 -->
    </div><!-- row -->
</div><!-- Container -->




        







  
        

@include('admin.body.footer')





