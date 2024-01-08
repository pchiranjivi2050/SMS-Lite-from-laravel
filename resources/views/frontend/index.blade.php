@extends('frontend.index_master')
@section('admin')

@php
$systemData = App\Models\System::all();
$user = App\Models\User::all();
$myWord = App\Models\Employee::all();
$portfolioPhoto = App\Models\Portfolio::all();

@endphp
@foreach($systemData as $system)


<div role="main" class="main">
    @foreach($portfolioPhoto as $photos)


	<div class="slider-container rev_slider_wrapper" style="Aligntheight: 640px; max-width: 1080px; margin: auto;  align-items: center; justify-content: c">
		<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
			<ul>
				<li data-transition="fade">
					<img src="{{(!empty($photos->image))? url('upload/portfolio_image/'.$photos->image):url('upload/no_image.jpg')}}"
						alt=""
						data-bgposition="center center"
						data-bgfit="cover"
						data-bgrepeat="no-repeat"
						data-kenburns="on"
						data-duration="20000"
						data-ease="Linear.easeNone"
						data-scalestart="110"
						data-scaleend="100"
						data-offsetstart="250 100"
						class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center"
						data-x="center"
						data-y="center" data-voffset="['10','10','10','10']"
						data-width="['770','770','770','350']"
						data-start="1000"
						data-fontsize="['45','45','45','35']"
						data-lineheight="['56','56','50','40']"
						data-transform_in="y:[100%];opacity:0;s:500;"
						data-transform_out="opacity:0;s:500;"
						style="white-space: normal;">{{$system->name}}</h1>

					<a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1"
						href="{{route('schoolprofile')}}"
						data-x="center"
						data-y="center" data-voffset="['130','130','130','130']"
						data-start="1300"
						data-fontsize="['14','14','14','20']"
						data-paddingtop="['11','11','11','16']"
						data-paddingbottom="['11','11','11','16']"
						data-paddingleft="['32','32','32','42']"
						data-paddingright="['32','32','32','42']"
						data-transform_in="y:[100%];opacity:0;s:500;"
						data-transform_out="opacity:0;s:500;">ABOUT US</a>

				</li>
				<li data-transition="fade">
					<img src="{{(!empty($photos->photo))? url('upload/portfolio_image/'.$photos->photo):url('upload/no_image.jpg')}}"
						alt=""
						data-bgposition="center center"
						data-bgfit="cover"
						data-bgrepeat="no-repeat"
						data-kenburns="on"
						data-duration="20000"
						data-ease="Linear.easeNone"
						data-scalestart="110"
						data-scaleend="100"
						data-offsetstart="250 100"
						class="rev-slidebg">

					<h1 class="tp-caption font-weight-bold text-color-light text-center"
						data-x="center"
						data-y="center" data-voffset="['10','10','10','10']"
						data-width="['770','770','770','350']"
						data-start="1000"
						data-fontsize="['45','45','45','35']"
						data-lineheight="['56','56','50','40']"
						data-transform_in="y:[100%];opacity:0;s:500;"
						data-transform_out="opacity:0;s:500;"
						style="white-space: normal;">{{$system->name}}</h1>

					<a class="tp-caption btn btn-primary text-1 font-weight-semibold custom-btn-style-1"
						href="#"
						data-x="center"
						data-y="center" data-voffset="['130','130','130','130']"
						data-start="1300"
						data-fontsize="['14','14','14','20']"
						data-paddingtop="['11','11','11','16']"
						data-paddingbottom="['11','11','11','16']"
						data-paddingleft="['32','32','32','42']"
						data-paddingright="['32','32','32','42']"
						data-transform_in="y:[100%];opacity:0;s:500;"
						data-transform_out="opacity:0;s:500;">CONTACT US</a>

				</li>
			</ul>
		</div>
	</div>
	    	
    </section>

	<div role="main" class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li>

 
	<!DOCTYPE html>
<html lang="en">
<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .main {
            padding: 20px;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
        }

        h1 {
            color: #007bff;
        }

        .school-name {
            font-weight: bold;
            color: #28a745;
        }

        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div role="main" class="main" style="Aligntheight: 1080px; max-width: 1080px; margin: auto;  align-items: center; justify-content>
        <div class="container">
            <div class="row">
                <h1>Our School</h1>
                <div class="col-md-12 align-self-center  order-1">
				{{ $system->school_detail }}
				</div>
            </div>
        </div>
    </div>
	</div>
</body>
</html>
</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
        


    <section class="section bg-color-light border-0 my-0">
    		<div class="container">
    			<div class="row text-center">
    				<div class="col">
    					<h2 class="font-weight-bold mb-4 appear-animation" data-appear-animation="fadeInUpShorter">What Teacher Says</h2>
    				</div>
    			</div>
    			<div class="row justify-content-center appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
    				<div class="col">
    					<div class="owl-carousel custom-nav m-0" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true, 'autoHeight': true}">
    						@foreach($myWord as $empwrd)
    						@foreach($user as $usr)
    						@if($empwrd->employee_id == $usr->id)
    						@if(isset($empwrd->word))
    						<div class="row justify-content-center">
    							<div class="col-lg-10">
    								<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
    									<blockquote>
    										<p>{{$empwrd->word}}</p>
    									</blockquote>
    									<div class="testimonial-author">
    										<img src="{{(!empty($usr->image))? url('upload/user_image/'.$usr->image):url('upload/no_image.jpg')}}" class="img-fluid rounded-circle" alt />
    										<p>
    											<strong class="text-uppercase text-color-dark">{{$usr->name}}</strong>
    										</p>
    										<div class="rate">
    											<i class="fas fa-star"></i>
    											<i class="fas fa-star"></i>
    											<i class="fas fa-star"></i>
    											<i class="fas fa-star"></i>
    											<i class="fas fa-star"></i>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    						@endif
    						@endif
    						@endforeach
    						@endforeach
    					</div>
    				</div>
    			</div>
    		</div>
    	</section>


   
</div>
</div>



			
@endforeach
@endforeach
@endsection
