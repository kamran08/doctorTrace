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
	
        <script src="js/app.js"></script>
        <script src="js/jquery-2.1.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	</body>
	
	
	
</html>