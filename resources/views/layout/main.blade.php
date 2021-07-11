<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	@include('layout.header')

    @yield('content')
	
	@include('layout.footer')

	<!-- jquery -->
	<script src="{{asset('theme/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('theme/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('theme/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('theme/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('theme/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('theme/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('theme/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('theme/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('theme/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('theme/js/main.js')}}"></script>
	
	@yield('javascript')

</body>
</html>