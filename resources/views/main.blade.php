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



	</body>
	
	
	
</html>