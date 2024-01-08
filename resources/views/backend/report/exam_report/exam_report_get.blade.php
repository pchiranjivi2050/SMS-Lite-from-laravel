@php
$systemData = App\Models\System::all();
@endphp
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    @foreach($systemData as $system)
    <title>{{$system->title}}</title>
  </head>
<style>
body{
  color:black;
}
#head {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: none;
  width: 100%;
}
#end{
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: none;
    width: 100%;
}
#end th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
}

/* #customers td, #customers th {
  border: 0.5px solid #ddd;
  padding: 8px;
} */
#head tr:hover {background-color: #ddd;}

#head th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
}
strong{
    font-weight: bold;
}
</style>
<body>
    
<table id="head" >
  <tr>
    <td><h2><img src="{{('upload/system_image/school-logo.png')}}" alt="user-img" width="100" class="img-circle"></h2></td>
    <td style="text-align:center"><h2>{{$system->name}}</h2>
    <p>{{$system->address}}</p>
    <p>Phone : {{$system->phone}}</p>
    <p>Email : {{$system->email}} </p>
    </td>
    <td style="text-align:center">Date:- {{date('M-d-Y')}}</td>
  </tr>
</table>
@endforeach
<br>


<table width="100%">
    <thead>
        <tr><td>Name: <strong>{{ $student['student']['name'] }}</strong></td></tr>
        <tr><td>{{ $student['student_year']['name'] }}- {{ $student['student_class']['name'] }}- {{ $student['student_section']['name'] }}</strong></td></tr>
        <tr><td>Roll: <strong>{{ $student->roll }}</strong></td></tr>
        <tr><td>ID No: <strong>{{ $student->id_no }}</strong></td></tr>
    </thead>
</table>
<br>
<table class="table table-bordered text-center" width="100%">
    <thead style="background: grey">
        <tr class="text-center">
            <th rowspan="2" class="text-center">SL</th>
            <th rowspan="2" class="text-center">Subject</th>
            <th colspan="3" class="text-center">Marks Obtain</th>
            <th rowspan="2" class="text-center">Grade</th>
            <th rowspan="2" class="text-center">Grade Point</th>
        </tr>
        <tr>
            <th class="text-center">TH</th>
            <th class="text-center">PR</th>
            <th class="text-center">Total</th>
        </tr>
    </thead>
    <tbody>
        @php
            $total_marks = 0;
            $total_point = 0;
        @endphp
        @foreach($allData as $key => $student )
            @php
            $get_mark = $student->marks;
            $get_practical = $student->practical_marks;
            $total_marks = (float)$total_marks+(float)$get_mark+(float)$get_practical;
            $total = (float)$get_mark+(float)$get_practical;
            $total_subject = App\Models\StudentMark::where('year_id',$student->year_id)->where('class_id',$student->class_id)->where('exam_type_id',$student->exam_type_id)->where('student_id',$student->student_id)->get()->count();       
            @endphp
        <tr class="text-center">
            <td>{{ $key+1 }}</td>
            @php
            $allsubject = App\Models\SchoolSubject::where('id',$student['subjects']['subject_id'])->first();
            @endphp
            <td>{{ $allsubject->name  }}</td>
            <td>{{ number_format((float)$student->marks,2) }}</td>
            <td>{{ number_format((float)$student->practical_marks,2) }}</td>
            <td>{{ number_format((float)$get_mark + (float)$get_practical) }}</td>
            @php
                $grade_marks = App\Models\StudentGrade::where([['start_marks','<=', (int)$total],['end_marks', '>=',(int)$get_mark ]])->first();
                $total_grade = (float)$total_marks/(float)$total_subject;
                $grade_point = number_format((float)$grade_marks->grade_point,2);
                $total_point = (float)$total_point+(float)$grade_point;
                @endphp
            <td>{{ $grade_marks->grade_name }}</td>
            <td>{{ $total * 0.05 }}</td>
        </tr>
        @endforeach
        @php
        
        $grade_point_avg = (float)$total_point/(float)$total_subject;
        $point_for_letter_grade = (float)$total_point/(float)$total_subject;
        $total_grade_a = App\Models\StudentGrade::where([['start_point','<=',$point_for_letter_grade],['end_point','>=',$point_for_letter_grade]])->first();
        @endphp
        <tr>
            <td colspan="6">Total Marks</td>
            <td colspan="1">{{$total_marks}}</td>
        </tr>
        <tr>
            <td colspan="6">Average Grade</td>
            <td colspan="1">{{$total_grade_a->grade_name}}({{$total_grade * 0.05}})</td>
        </tr>
    </tbody>
</table>


<br><br><br><br>
<hr>
<table width="100%" id="end">
    <thead>
        <tr class="text-center">
        <th class="text-center">Class Teacher</th>
        <th class="text-center">Parent/Guardian</th>
        <th class="text-center">Principal/Headmaster</th>
        </tr>
    </thead>
</table>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
