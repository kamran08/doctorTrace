<!doctype html>
<html class="no-js" lang="">
    <meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Medical Bot</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-touch-icon.png">




{{-- Bot bot Bot --}}

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<!-- Popup CSS -->
<link href="{{ asset('css/magnific-popup.css') }}"  rel="stylesheet">
<!-- Bootstrap extend-->
<link rel="stylesheet" href="{{ asset('css/bootstrap-extend.css') }}">
<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('css/master_style.css') }}">
<!-- Superieur Admin skins -->
<link rel="stylesheet" href="{{ asset('css/_all-skins.css') }}">
	
    <body>
		
    <!--===== menu =======-->
    <div class="menu box_shadow bg">
		<div class="container">
		  <div class="row align-items-center">
			<div class="col-auto">
			  <img class="logo" src="{{ asset('img/logo.png') }}" alt="" title="">
			</div>
			<div class="col"></div>
			<div class="col-auto">
			  <ul class="logo_ul">
				<li class="logo_ul_active"><a href="{{ route('home') }}">HOME</a></li>
				<li class="logo_ul_active"><a href="{{ route('bot') }}">Bot</a></li>
				@if (Auth::guard('doctor')->check() || Auth::guard()->check())
	  
				<li><a href="{{ route('user.profile', ['id' => Auth::user()->id ]) }}">{{  Auth::user()->name}}</a></li>
				<li><a  href="{{ route('logout') }}"
				  onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
				   {{ __('Logout') }}
			   </a>
	  
			   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				   @csrf
			   </form>
			  </li>
			   @else
	  
			   <li class="nav-item dropdown">
				<a id="linkDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
					{{ __('Login') }}
					<span class="caret"></span>
				</a>
	  
				<div class="dropdown-menu" aria-labelledby="linkDropdown">
					<a class="dropdown-item" href="{{ route('login') }}">
						{{ __('User') }}
					</a>
					<a class="dropdown-item" href="{{ route('doctor.login') }}">
						{{ __('Doctor') }}
					</a>
				</div>
			  </li>
			   <li><a href="{{ route('register') }}">Register</a></li>
			   @endif
				
			  </ul>
			</div>
		  </div>
		</div>
	  </div>
    <!--===== menu =======-->

    <!--====== profile main =======-->
	<div  id="app">
		<bot></bot>
		<h1>
	 </div>
	<!--====== profile main =======-->

    

        <div style="height:50px;"></div>
           
	



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

	<script src="{{ asset('js/app.js') }}"></script>
	</body>
	
	
	
</html>