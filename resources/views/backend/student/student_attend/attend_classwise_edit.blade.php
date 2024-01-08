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
                <h3 class="box-title m-b-0">Student Attendence View</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Year</th>
                                <th>Class</th>
                                <th>Section</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allData as $key => $attend )
                            <tr>
                                <input type="hidden" name="year_id" value="{{ $attend->year_id }}">
                                <input type="hidden" name="class_id" value="{{ $attend->class_id }}">
                                <input type="hidden" name="section_id" value="{{ $attend->section_id }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $attend['student_year']['name'] }}</td>
                                <td>{{ $attend['student_class']['name']}}</td>
                                <td>{{ $attend['student_section']['name'] }}</td>
                                <td>{{ $attend->date }}</td>
                                <td>
                                <a href="{{route('attend.datewise.edit',[$attend->year_id,$attend->class_id,$attend->section_id,$attend->date])}}" class="btn btn-rounded btn-info" title="Edit & Details"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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


   <!-- Add User -->
   <script type="application/javascript">
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

     $(document).ready(function(){
     $('#minimize').click(function(){
     });
        // set time out 5 sec
      setTimeout(function(){
         $('#minimize').trigger('click');
     }, 100);
     });
    </script>