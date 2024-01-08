<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->




<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Students </h3>
                @foreach($allData as $key => $student )
                @endforeach
                <p class="text-muted m-b-30">{{$student['fee_category']['name']}} of {{$student['student_year']['name']}}, {{$student['student_class']['name']}} , Section {{$student['student_section']['name']}}</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%" >
                        <thead>
                            <tr>
                                <th>Bill No</th>
                                <th>Name</th>
                                <th>ID No</th>
                                <th>Bill Date</th>
                                @if($student->fee_category_id == '2')
                                <th>Month</th>
                                @endif
                                @if($student->fee_category_id == '3')
                                <th>Exam Type</th>
                                @endif
                                <th>Fee Amount</th>
                                <th>Discount</th>
                                <th>Total Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $student )
                            <tr>
                                <td>{{ $student->bill_no }}</td>
                                <td>{{ $student['student']['name'] }}</td>
                                <td>{{ $student['student']['id_no'] }}</td>
                                <td>{{ date('M-d-Y',strtotime($student->date)) }}</td>
                                @if($student->fee_category_id == '2')
                                <td>{{$student->month}}</td>
                                @endif
                                @if($student->fee_category_id == '3')
                                <td>{{$student['exam_type']['name']}}</td>
                                @endif
                                <td>{{ (float)$student->amount }}</td>
                                <td>{{ (float)$student->discount }}</td>
                                <td>{{ (float)$student->total_amount }}</td>
                                <td>
                                <a href="{{route('fee.bill.get',$student->id)}}" class="btn btn-rounded btn-success" title="Show Bill" target="_blank"><i class="fa fa-money" style="font-size: 18px"></i></a>
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

