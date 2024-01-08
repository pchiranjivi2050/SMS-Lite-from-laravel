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
        <div class="offset-sm-8 col-sm-4">
            <table class="display" width="100%">
                <tr>
                    <th>Presrnt: <i class="fa fa-circle" style="color: green"></i></th>
                    <th>Absent: <i class="fa fa-circle" style="color:red"></i></th>
                    <th>Halfday: <i class="fa fa-circle" style="color: yellow"></i></th>
                    <th>Late: <i class="fa fa-circle" style="color: blue"></i></th>
                </tr>
            </table> 
        </div>
    </div>
</div>
<br>

<div class="container">
    <div class="row"> <!-- /row2 -->
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">View Attendance</h3>
                <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF & Print</p>
                <div class="table-responsive">
                    <table id="example23" class="display table-bordered nowrap" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                @foreach($allData as $key => $attend)
                                @endforeach
                                <th>Student Name</th>
                                <?php
                                for ($i=1; $i <= $finalcount; $i++) { 
                                    echo "<th>$i</th>";
                                }
                                ?>
                            </tr>
                        </thead>
                        @php
                            $students = App\Models\StudentAttend::select('id_no')->groupBy('id_no')->where('year_id',$attend->year_id)->where('class_id',$attend->class_id)->where('section_id',$attend->section_id)->orderBy('id','asc')->get();
                        @endphp
                        <tbody>
                            @foreach($students as  $student)
                            @php
                                $user = App\Models\User::where('id_no',$student->id_no)->first();
                            @endphp
                            <tr>
                                <td>{{$user->name}}</td>
                                @foreach($allData as $key => $attend )
                                @if($student->id_no == $attend->id_no)
                                <?php
                                    if($attend->attend_status == 'Present'){
                                        echo '<td><i class="fa fa-circle" style="color: green"></i>P</td>';
                                    }elseif ($attend->attend_status == 'Halfday') {
                                        echo '<td><i class="fa fa-circle" style="color: yellow"></i>H</td>';
                                    }elseif ($attend->attend_status == 'Late') {
                                        echo '<td><i class="fa fa-circle" style="color: blue"></i>L</td>';
                                    }elseif ($attend->attend_status == 'Absent') {
                                        echo '<td><i class="fa fa-circle" style="color: red"></i>A</td>';
                                    }else{
                                        echo '<td><i class="fa fa-circle" style="color: white"></i></td>';
                                    }
                                ?>
                                @endif
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Container -->




        







  
        

@include('admin.body.footer')









