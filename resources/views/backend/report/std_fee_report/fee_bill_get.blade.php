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
#bill{
    border: 1.5px solid black;
    margin: 0 auto;
}
#bill th{
  border: 1.5px solid black;
  height: 24px;
}
#bill td{
  border: 1.5px solid black;
}
#bill-td td{
  border: 1.5px solid black;
  height: 12em;
  align-self: flex-start;
  vertical-align: top;
  text-align: center;
  }

</style>
<body>
    
<table id="head">
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

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h6>Bill No: {{$billData->bill_no}}</h6>
      <h5>Student Name: <strong>{{$billData['student']['name']}}</strong>, Of <strong>{{$billData['student_class']['name']}}, Section: {{$billData['student_section']['name']}}</strong></h5> 
    </div>
  </div>
</div>

<table width="100%" id="bill"  class="table-bordered bg-dark" style="padding: 10px;">
    <thead>
        <tr class="text-center">
            <th class="text-center" width="20%">SL No</th>
            <th class="text-center" width="60%">Fee Type</th>
            <th class="text-center" width="20%">Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr id="bill-td">
            <td>1</td>
            <td>{{ $billData['fee_category']['name'] }} Of @if($billData->fee_category_id == '3') {{ $billData['exam_type']['name'] }} @endif @if($billData->fee_category_id == '2') {{ $billData->month }} @endif</td>
            <td>Rs.{{ (float)$billData->amount }}</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">Discount</td>
            <td colspan="1" class="text-center">{{ (float)$billData->discount }}%</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">Total Amount</td>
            <td colspan="1" class="text-center">Rs. {{ (float)$billData->total_amount }}</td>
        </tr>
    </tbody>
</table>


<br><br>
<table width="100%" id="end">
    <thead>
        <tr class="text-center">
        <th class="text-center">Account</th>
        <th class="text-center">Parent/Guardian</th>
        <th class="text-center">Principal/Headmaster</th>
        </tr>
    </thead>
</table>

<hr width="90%">

<table id="head">
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
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h6>Bill No:{{$billData->bill_no}}</h6>
      <h5>Student Name: <strong>{{$billData['student']['name']}}</strong>, Of <strong>{{$billData['student_class']['name']}}, Section: {{$billData['student_section']['name']}}</strong></h5> 
    </div>
  </div>
</div>

<table width="100%" id="bill"  class="table-bordered bg-dark" style="padding: 10px;">
    <thead>
        <tr class="text-center">
            <th class="text-center" width="20%">SL No</th>
            <th class="text-center" width="60%">Fee Type</th>
            <th class="text-center" width="20%">Amount</th>
        </tr>
    </thead>
    <tbody>
        <tr id="bill-td">
            <td>1</td>
            <td>{{ $billData['fee_category']['name'] }} Of @if($billData->fee_category_id == '3') {{ $billData['exam_type']['name'] }} @endif @if($billData->fee_category_id == '2') {{ $billData->month }} @endif</td>
            <td>Rs.{{ (float)$billData->amount }}</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">Discount</td>
            <td colspan="1" class="text-center">{{ (float)$billData->discount }}%</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center">Total Amount</td>
            <td colspan="1" class="text-center">Rs. {{ (float)$billData->total_amount }}</td>
        </tr>
    </tbody>
</table>


<br><br>
<table width="100%" id="end">
    <thead>
        <tr class="text-center">
        <th class="text-center">Account</th>
        <th class="text-center">Parent/Guardian</th>
        <th class="text-center">Principal/Headmaster</th>
        </tr>
    </thead>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>
