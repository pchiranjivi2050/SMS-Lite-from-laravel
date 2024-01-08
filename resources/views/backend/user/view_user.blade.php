<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->






<div class="container">
    <!-- Container -->
    <div class="row">
        <!-- Row -->
        <div class="col-md-12">
            <!-- col-md-6 -->
            <div class="row">
                <!-- /row2 -->
                <div class="col-md-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">View User</h3>
                        <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                        <div class="table-responsive">
                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>User Type</th>
                                        <th>Email</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allData as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->usertype }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ date('M-d-Y', strtotime($user->created_at)) }}</td>
                                            <td>{{ date('M-d-Y', strtotime($user->updated_at)) }}</td>
                                            <td>
                                                <a href="{{ route('user.edit', $user->id) }}"
                                                    class="btn btn-rounded btn-info" title="Edit"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <a href="{{ route('user.delete', $user->id) }}"
                                                    class="btn btn-rounded btn-danger ml-2" title="Delete"
                                                    id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.row2 -->
        </div><!-- col-md-6 -->

        <div class="col-md-12">
            <!-- col-md-6 -->
            <div class="row">
                <!-- /row form  Add User Form-->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a
                        class="btn btn-rounded bg-success btn-outline m-b-20" id="unblockbtn1">Add User</a> <a
                        class="btn btn-outline m-b-20 m-r-20 invisible" id="blockbtn1">Custom Message</a>
                    <div class="panel panel-success ">
                        <div class="panel-heading block1"> User Add Form
                            <div class="pull-right"><a href="#" data-perform="panel-collapse"><strong><i
                                            class="ti-plus" id="minimize1"></i></strong><strong><i class="ti-minus"
                                            id="minimize1"></i></strong></a> <a href="#"
                                    data-perform="panel-dismiss"></a> </div>
                        </div><!-- /.panel-heading block5 -->
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="white-box">
                                            <form method="POST" action="{{ route('user.store') }}">
                                                @csrf
                                                <!-- /.1st row inside form -->
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <h5><strong>User Type</strong><span class="text-danger">*</span>
                                                        </h5>
                                                        <div class="controls">
                                                            <select name="usertype" id="usertype" required=""
                                                                class="form-control">
                                                                <option value="" selected="" disabled="">
                                                                    Select User Type</option>
                                                                <option value="Admin">Admin</option>
                                                                <option value="Employee">Employee</option>
                                                                <option value="Student">Student</option>
                                                            </select>
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div><!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <h5><strong>User Name</strong><span
                                                                    class="text-danger">*</span></h5>
                                                            <input type="text" class="form-control"name="name"
                                                                id="name" placeholder="User Name" required="">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <h5><strong>Email</strong><span class="text-danger">*</span>
                                                            </h5>
                                                            <input type="email" class="form-control" id="email"
                                                                name="email" placeholder="Email"
                                                                data-error="Bruh, that email address is invalid"
                                                                required="">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <h5><strong>Password</strong><span
                                                                    class="text-danger">*</span></h5>
                                                            <input type="password" class="form-control" id="password"
                                                                name="password" placeholder="Password" required="">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div> <!-- /.col-sm-4 inside form -->
                                                </div>
                                                <!-- /.1st row inside form -->
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-info btn-rounded"
                                                        value="Submit"></input>
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
    </div><!-- Row -->
</div><!-- Container -->
















@include('admin.body.footer')


<!-- Add User -->
<script type="application/javascript">
        // This is for BlockUI plugin demo
        $('#blockbtn1').click(function() {
            $('div.block1').block({
                message: '<h6><img src="{{asset('plugins/images/busy.gif')}}" /> <strong>Click Add User</strong></h6>',
                css: {
                    "border": '1px solid #fff',
                    "border-radius": '25px',
                    "color": 'green'
                }
            });
        });
        $('#unblockbtn1').click(function() {
            $('div.block1').unblock();
        });

         //auto clicked Block
     $(document).ready(function(){
     $('#blockbtn1').click(function(){
     });
            // set time out 5 sec
      setTimeout(function(){
         $('#blockbtn1').trigger('click');
     }, 100);
     });

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
