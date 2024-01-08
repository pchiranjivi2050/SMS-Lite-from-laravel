@php
$systemData = App\Models\System::all();
@endphp
@foreach($systemData as $system)
			<div class="col text-center">			
			<H1> Find Us </h1>
			</div>
			<div class="container">
				<div class="row justify-content-center">
				<div class="slider-container rev_slider_wrapper" style="Aligntheight: 640px; max-width: 1080px; margin: auto;  align-items: center; justify-content: c">
							<iframe
								width="150%"
								height="150%"
								frameborder="0"
								style="border:0"
								allowfullscreen
								loading="lazy"
								src="{{$system->image}}"
							></iframe>
						</div>
					</div>
				</div>
			</div>
			<footer id="footer" class="short mt-0 pt-0 border-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col text-center">
								<ul class="footer-social-icons social-icons social-icons-clean social-icons-icon-light mb-3">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook" target="_blank"><i class="fab fa-facebook-f text-2"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter" target="_blank"><i class="fab fa-twitter text-2"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in text-2"></i></a></li>
								</ul>
								<p><strong>{{$system->name}}</strong> - © Copyright 2024. All Rights Reserved.</p>
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