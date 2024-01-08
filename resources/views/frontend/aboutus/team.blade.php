@extends('frontend.index_master')
@section('admin')

@php
$systemData = App\Models\System::all();
$user = App\Models\User::all();
$myWord = App\Models\Employee::all();
$portfolioPhoto = App\Models\Portfolio::all();
@endphp


<div role="main" class="main">
    <section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5" style="background-image: url(img/page-header/page-header-elements.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1>Teachers</h1>

                </div>
                <div class="col-md-12 align-self-center order-1 mt-4">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">AboutUs</a></li>
                        <li class="active">Our Team</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
	<div class="container py-2">
        <div class="row mb-5 pb-3">	
            @foreach($myWord as $empwrd)
            @foreach($user as $usr)
            @if($empwrd->employee_id == $usr->id)
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                <div class="card flip-card text-center rounded-0">
                    <div class="flip-front p-5">
                        <div class="flip-content my-4">
                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
                                <img src="{{(!empty($usr->image))? url('upload/user_image/'.$usr->image):url('upload/no_image.jpg')}}" class="img-fluid rounded-circle" alt />
                            </strong>
                            <h4 class="font-weight-bold text-color-primary text-4">{{$usr->name}}</h4>
                            <p>Email:- {{$usr->email}}</p>	
                            <p>Qualification:- {{$usr->qualification}}</p>	
                        </div>
                    </div>
                    <div class="flip-back d-flex align-items-center p-5" style="background-size: cover; background-position: center;">
                        <div class="flip-content my-4">
                            <strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
                                <img src="{{(!empty($usr->image))? url('upload/user_image/'.$usr->image):url('upload/no_image.jpg')}}" class="img-fluid rounded-circle" alt />
                            </strong>
                            <h4 class="font-weight-bold text-color-primary text-4">{{$usr->name}}</h4>
                            <p>Email:- {{$usr->email}}</p>	
                            <p>Qualification:- {{$usr->qualification}}</p>	
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
        </div>
    </div>
   
</div>


@endsection
