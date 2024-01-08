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
                <div class="col-md-12 align-self-center order-1 mt-4">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <h1>
                            <a href="{{ route('schoolprofile') }}">Our School Profile</a>
                        </h1>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    @foreach($systemData as $system)
                        <li>{{ $system->school_detail }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
