@php
$systemData = App\Models\System::all();
@endphp
@foreach($systemData as $system)
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>{{$system->title}}</title>

		<!-- Favicon -->
        <link rel="icon" href="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}" />

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('frontend/vendor/rs-plugin/css/navigation.css')}}">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/demos/demo-education.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/skins/skin-education.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('frontend/vendor/modernizr/modernizr.min.js')}}"></script>
		<style>
			#header{
				background-color: white;
			}
			#footer{
				background-color: white;
			}
		</style>
	</head>
	<body>

		<div class="body">
@endforeach