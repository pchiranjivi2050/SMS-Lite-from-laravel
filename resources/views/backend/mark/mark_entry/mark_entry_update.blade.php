<!-- Header -->
@include('admin.body.header')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Top Navigation -->
@include('admin.body.navbar')

<!-- End Top Navigation -->
<!-- Left navbar-header -->
@include('admin.body.sidebar')

<!-- Left navbar-header end -->
@php

$exam_id = App\Models\ExamType::where('id',$exam_type_id)->get();
$assign_id = App\Models\ExamType::where('id',$assign_subject_id)->get();

@endphp

<form method="post" action="{{route('mark.entry.update')}}">
@csrf
<div class="container"><!-- Container -->
    <div class="row"><!-- /row2 --> 
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Student @foreach($exam_id as $exam) {{$exam->name}} @endforeach Marks Of @foreach($finalSubjectName as $subject_name) {{$subject_name->name}} @endforeach Subject</h3>
                <div class="table-responsive">                    
                <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th class="text-center">SL</th>
                            <th class="text-center"> Name</th>
                            <th class="text-center">ID No</th>
                            <th class="text-center">Year</th>
                            <th class="text-center">Class</th>
                            <th class="text-center">Section</th>
                            <th class="text-center">Roll</th>
                            <th class="text-center">Theory Marks</th>
                            <th class="text-center">Practical Mark</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allData as $key => $mark_entry )
                        <tr id="div{{ $mark_entry->id }}" class="text-center">
                        <input type="hidden" name="student_id[]" value="{{ $mark_entry['student']['id'] }}">
                        <input type="hidden" name="year_id" value="{{ $mark_entry->year_id }}">
                        <input type="hidden" name="class_id" value="{{ $mark_entry->class_id }}">
                        <input type="hidden" name="section_id" value="{{ $mark_entry->section_id }}">
                        <input type="hidden" name="exam_type_id" value="{{ $exam_type_id }}">
                        <input type="hidden" name="assign_subject_id" value="{{ $assign_subject_id }}">
                        <input type="hidden" name="id_no[]" value="{{ $mark_entry->id_no }}">
                            <td class="text-center">{{ $key+1 }}</td>
                            <td class="text-center">{{ $mark_entry['student']['name'] }}</td>
                            <td class="text-center">{{ $mark_entry['student']['id_no'] }}</td>
                            <td class="text-center">{{ $mark_entry['student_year']['name'] }}</td>
                            <td class="text-center">{{ $mark_entry['student_class']['name'] }}</td>
                            <td class="text-center">{{ $mark_entry['student_section']['name'] }}</td>
                            <td class="text-center">{{ $mark_entry['assign_student']['roll'] }}</td>
                            <td>
                                <div class="controls">
                                    <input type="text" name="marks[]" id="marks[]" value="{{$mark_entry->marks}}"  class="form-control"> 
                                </div>
                            </td>
                            <td>
                                <div class="controls">
                                    <input type="text" name="practical_marks[]" id="practical_marks[]" value="{{$mark_entry->practical_marks}}" class="form-control">              
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="form-group">
                    <input type="submit" class="btn btn-info btn-rounded" value="Submit"></input>
                </div>
                </div>
            </div>
        </div><!-- col-md-12 -->
    </div><!-- Row -->
</div>
</form>






















@include('admin.body.footer')

