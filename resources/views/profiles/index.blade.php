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
				@include('profiles.index._tabs')
				<!-- tabs -->

				<!-- sidebar -->
				@include('profiles.index._sidebar')
				<!-- sidebar -->
			</div>
		</div>
	</div> <!-- profile main -->
</div>
@endsection