<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<div class="container mb-3">
    <div class="offset-sm-10 col-sm-2">
        <a href="{{route('employee.attend.add')}}" class="btn btn-rounded btn-info" title="Edit & Details">Add Attendence</a>
    </div>
</div>

<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Employee Attendence View</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $attend )
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ date('M-d-Y',strtotime($attend->date)) }}</td>
                                <td>
                                <a href="{{route('employee.attend.edit',$attend->date)}}" class="btn btn-rounded btn-info" title="Edit & Details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>
                             </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div>





















@include('admin.body.footer')

