@php
$systemData = App\Models\System::all();
@endphp

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    @foreach($systemData as $system)
        <title>{{$system->title}}</title>
    @endforeach

    <style>
        /* Your existing styles */
    </style>
</head>
<body>

<!-- Your existing HTML -->

<br>

<table id="student">
    <thead>
    <tr>
        <th style="text-align:center;font-size:18px;" colspan="3">Student Registration Detail</th>
    </tr>
    <br>
    <tr>
        <th style="text-align:center;font-size:14px;background-color:none;" colspan="3">Personal Detail</th>
    </tr>
    <hr width="90%">
    </thead>
    <tbody>
    @if(isset($details['student']))
        <tr>
            <td>Name: {{$details['student']['name'] ?? 'N/A'}}</td>
            <td>Father Name: {{$details['student']['fname'] ?? 'N/A'}}</td>
            <td>Mother Name: {{$details['student']['mname'] ?? 'N/A'}}</td>
        </tr>
        <!-- Add similar null checks for other fields -->
    @else
        <tr>
            <td colspan="3">Student details not available</td>
        </tr>
    @endif
    </tbody>
</table>

<!-- Your existing JavaScript -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
