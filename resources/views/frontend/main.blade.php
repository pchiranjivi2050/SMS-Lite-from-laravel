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
			<header id="header" class="header-transparent header-semi-transparent header-semi-transparent-dark" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': false, 'stickyStartAt': 52, 'stickySetTop': '-52px'}">
				<div class="header-body border-top-0 bg-light box-shadow-none">
					<div class="header-top header-top-borders header-top-light-borders">
						<div class="container h-100">
							<div class="header-row h-100">
								<div class="header-column justify-content-start">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												<li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
													<span class="ws-nowrap text-dark pl-0"><span class="opacity-9">Phone:</span> <a class="text-dark" href="tel:+1234567890">125 586 5555</a></span>
												</li>
												<li class="nav-item nav-item-borders py-2">
													<span class="ws-nowrap text-dark"><span class="opacity-9">Email:</span> <a class="text-dark" href="mailto:info@porto.com">info@porto.com</a></span>
												</li>
												<li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
													<span class="ws-nowrap text-dark"><span class="opacity-9">Time:</span> Mon-Sat 8:00am - 5:00pm</span>
												</li>
											</ul>
										</nav>
									</div>
								</div>
								<div class="header-column justify-content-end">
									<div class="header-row">
										<nav class="header-nav-top">
											<ul class="nav nav-pills">
												{{-- <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
													<a href="#" class="text-dark"><i class="far fa-user p-relative" style="top: 0;"></i> Login</a>
												</li> --}}
												<li class="nav-item nav-item-borders py-2 pr-0 dropdown">
													<a href="{{route('login.view')}}" class="text-dark pr-0"><i class="fas fa-pencil-alt"></i> Login</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="header-container header-container-height-sm container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{route('school.website')}}">
											<img alt="Porto" width="60" height="60" src="{{(!empty($system->logo))? url('upload/system_image/'.$system->logo):url('upload/no_image.jpg')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li>
														<a class="nav-link active" href="{{route('school.website')}}">
															Home
														</a>
													</li>
													<li>
														<a class="nav-link" href="https://sprjbs.edu.np/">
															About Us
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Courses
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Instructors
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Blog
														</a>
													</li>
													<li>
														<a class="nav-link" href="#">
															Contact Us
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
									{{-- <div class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
										<div class="header-nav-feature header-nav-features-search d-inline-flex">
											<a href="#" class="header-nav-features-toggle" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
											<div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
												<form role="search" action="page-search-results.html" method="get">
													<div class="simple-search input-group">
														<input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
														<span class="input-group-append">
															<button class="btn" type="submit">
																<i class="fa fa-search header-nav-top-icon"></i>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>
									</div> --}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">

				<div class="slider-container rev_slider_wrapper" style="height: 740px;">
					<div id="revolutionSlider" class="slider rev_slider manual" data-version="5.4.8">
						<ul>
							<li data-transition="fade">
								<img src="{{asset('frontend/pro/1.jpg')}}"
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
									data-transform_out="opacity:0;s:500;">ABOUT US</a>

							</li>
							<li data-transition="fade">
								<img src="{{asset('frontend/pro/3.jpg')}}"
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
									<div class="row justify-content-center">
										<div class="col-lg-10">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
												<blockquote>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam.</p>
												</blockquote>
												<div class="testimonial-author">
													<img src="{{asset ('frontend/img/demos/education/authors/author-1.jpg')}}" class="img-fluid rounded-circle" alt />
													<p>
														<strong class="text-uppercase text-color-dark">Laxmi Poudel</strong>
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
									<div class="row justify-content-center">
										<div class="col-lg-10">
											<div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style-1">
												<blockquote>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in arcu facilisis quam aliquam ultrices quis in purus. Donec volutpat et justo et viverra. Suspendisse id justo a ipsum viverra ultrices quis et quam.</p>
												</blockquote>
												<div class="testimonial-author">
													<img src="{{asset ('frontend/img/demos/education/authors/author-2.jpg')}}" class="img-fluid rounded-circle" alt />
													<p>
														<strong class="text-uppercase text-color-dark">Laxmi Poudel</strong>
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
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section parallax section-parallax my-0 border-0" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '125%'}" data-image-src="{{('frontend/pro/2.jpg')}}">
					<div class="container mt-5">
						<div class="row">
							<div class="col-md-10 col-lg-7 offset-md-2 offset-lg-5">
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter">
									<div class="col">
										<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
											<div class="feature-box-icon mt-3">
												<img src="{{asset('frontend/img/demos/education/icons/icon-1.png')}}" class="img-fluid" width="60" alt="" />
											</div>
											<div class="feature-box-info">
												<h2 class="font-weight-semibold text-color-light text-6 mb-0">National Awards</h2>
												<p class="text-color-light mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula fermentum. Sed ut tincidunt orci. Nam id viverra tortor. Etiam blandit lobortis aliquet.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
									<div class="col">
										<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
											<div class="feature-box-icon mt-3">
												<img src="{{asset('frontend/img/demos/education/icons/icon-2.png')}}" class="img-fluid" width="60" alt="" />
											</div>
											<div class="feature-box-info">
												<h2 class="font-weight-semibold text-color-light text-6 mb-0">Best Teachers</h2>
												<p class="text-color-light mb-4 pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis elit vitae enim vehicula fermentum. Sed ut tincidunt orci. Nam id viverra tortor. Etiam blandit lobortis.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
									<div class="col">
										<div class="feature-box feature-box-style-2 custom-feature-box-style-1">
											<div class="feature-box-icon mt-3">
												<img src="{{asset('frontend/img/demos/education/icons/icon-3.png')}}" class="img-fluid" width="60" alt="" />
											</div>
											<div class="feature-box-info">
												<h2 class="font-weight-semibold text-color-light text-6 mb-0">Many Courses</h2>
												<p class="text-color-light mb-4 pb-2">Etiam blandit lobortis aliquet. Sed vehicula nisl sit amet sollicitudin porta. Donec id erat eleifend, imperdiet urna vel, scelerisque elit. Curabitur accumsan nisl at purus dictum.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

			<footer id="footer" class="bg-color-light border-top-0 mt-0">
				<div class="footer-copyright bg-color-light border-top-0">
					<div class="container">
						<div class="row">
							<div class="col">
								<p class="text-center">© Copyright 2020. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

        <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.appear/jquery.appear.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/popper/umd/popper.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/common/common.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.validation/jquery.validate.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/isotope/jquery.isotope.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/vide/jquery.vide.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/vivus/vivus.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/jquery.countdown/jquery.countdown.min.js')}}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{asset('frontend/js/theme.js')}}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
        <script src="{{asset('frontend/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>



        <!-- Current Page Vendor and Views -->
        <script src="{{asset('frontend/js/views/view.contact.js')}}"></script>

        <!-- Demo -->
        <script src="{{asset('frontend/js/demos/demo-education.js')}}"></script>

        <!-- Theme Custom -->
        <script src="{{asset('frontend/js/custom.js')}}"></script>

        <!-- Theme Initialization Files -->
        <script src="{{asset('frontend/js/theme.init.js')}}"></script>




		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->



	</body>
</html>
@endforeach