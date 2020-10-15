<!--Footer Sec-->
<footer class="footer-sec sec-pad-top-sm sec-pad-bottom text-center">
							<h4>@lang('site.Thanks')</h4>
							<p class="mt-10">Copyright ©  {{ now()->year }} @lang('site.Copyright') {{$strings ->name}}</p>

							<!--Sociaal_Contact-->
							<!-- resources/views/sections/Sociaal_Contact.blade.php -->
							@include('sections.Sociaal_Contact')
							<!--/Sociaal_Contact-->	
								
						</footer>
						<!--Footer Sec-->
					</div>
				</div>	
				<!--/Main Content-->
				
				<!--Setting Trigger-->
				<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-shadow--8dp bg-red setting-btn" id="show">
				  <i class="zmdi zmdi-settings"></i>
				</button>
				<!--/Setting Trigger-->
				
			</div>	
		</div>	
		<!--/Main Wrapper-->
	
		<!-- Scripts -->
		<script src="{{URL::asset('js/jquery-1.12.4.min.js')}}"></script>
		<script src="{{URL::asset('js/angular.min.js')}}"></script>
		<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
		<script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
		<script src="{{URL::asset('js/material.min.js')}}"></script>
		<script src="{{URL::asset('js/jQuery.appear.js')}}"></script>
		<script src="{{URL::asset('js/app.js')}}"></script>
		<script src="{{URL::asset('js/controllers.js')}}"></script>
		<script src="{{URL::asset('js/smooth-scroll.js')}}"></script>
		<script src="{{URL::asset('js/isotope.js')}}"></script>
		<script src="{{URL::asset('js/lightgallery-all.js')}}"></script>
		<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{URL::asset('js/froogaloop2.min.js')}}"></script>
		<script src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxXt2P7-U38bK0xEFIT-ebZJ1ngK8wjww"></script>
		<script src="{{URL::asset('js/init.js')}}"></script>
	</body>

</html>
