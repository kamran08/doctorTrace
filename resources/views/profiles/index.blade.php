@extends('main')

@section('container')
<div class="profile">
	<!-- pro header -->
	@include('profiles.index._header')
	<!-- pro header -->

	<!-- profile main -->
	<div class="profile_main">
		<div class="container">
			<div class="row">
				<!-- tabs -->
				{{-- @include('profiles.tabs.about') --}}
				<!-- tabs -->
				<div class="col-12 col-sm-9 col-md-9">
						
							<div id="app">
								
								<master :gid="{'doctor':{{$doctor}},'user_id':{{Auth::user()->id}}}" >
									
								
								</master>
							</div>
						
					</div>

				<!-- sidebar -->
				@include('profiles.index._sidebar')
				<!-- sidebar -->
			</div>
		</div>
	</div> <!-- profile main -->
</div>
@endsection