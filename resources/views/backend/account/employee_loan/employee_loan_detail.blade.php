<!-- Header -->
@include('admin.body.header')
<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Employee Loan Detail </h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%" >
                        <thead>
                            <tr class="text-center">
                                <th>Loan No</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Designation</th>
                                <th>Paid Date</th>
                                <th>Paid Amount</th>
                                <th>Remain Amount</th>
                                <th>Total Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $loan )
                            <tr class="text-center">
                                <td>{{ $loan->loan_no }}</td>
                                <td>{{ $loan['employee']['name'] }}</td>
                                <td>{{ $loan['employee']['id_no'] }}</td>
                                <td>{{ $loan['designation']['name'] }}</td>
                                <td>{{ date('M-d-Y',strtotime($loan->paid_date)) }}</td>
                                <td>{{ $loan->monthly_loan_paid }}</td>
                                <td>{{ $loan->remain_amount }}</td>
                                <td>{{ $loan->remain_amount + $loan->monthly_loan_paid }}</td>
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



    