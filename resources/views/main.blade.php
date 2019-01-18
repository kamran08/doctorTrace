<!doctype html>
<html class="no-js" lang="">
    <head>
        @include('partials._head') 
    </head>
	
    <body>
		
    <!--===== menu =======-->
    @include('partials._menu')
    <!--===== menu =======-->

    <!--====== profile main =======-->
	@yield('container')
	<!--====== profile main =======-->

    

        <div style="height:50px;"></div>
           
	
        {{-- <script src="js/app.js"></script> --}}
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/main1.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>


        {{-- Bot Bot Bot   --}}
        
	<!-- jQuery 3 -->
	<script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
	<!-- popper -->
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<!-- Bootstrap 4.0-->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- Magnific popup JavaScript -->
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup-init.js') }}"></script>
	<!-- SlimScroll -->
	<script src="{{ asset('js/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('js/fastclick.js') }}"></script>
	<!-- Superieur Admin App -->
	<script src="{{ asset('js/template.js') }}"></script>
	<!-- Superieur Admin for demo purposes -->
	<script src="{{ asset('js/demo.js') }}"></script>
	<script src="{{ asset('js/app-chat.js') }}"></script>
	</body>
	
	
	
</html>