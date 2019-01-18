@extends('main')

@section('container')
<div class="profile" style=" background: -webkit-linear-gradient(left, #3931af, #00c6ff);">
	<!-- pro header -->
	{{-- @include('profiles.index._header') --}}
	<!-- pro header -->

	<!-- profile main -->
	<div class="profile_main">
		
        <div id="app">
								
            <user-profile
            :gid="{
                'user':{{$user}},
                'user_id':{{(Auth::guard()->check())? Auth::user()->id : 0}}}" >
            
            </user-profile>
        </div>
	</div> <!-- profile main -->
</div>
@endsection