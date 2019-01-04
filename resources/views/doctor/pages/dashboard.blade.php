@extends('doctor.main')

@section('container')

    <div id="app">
        <dashboard :gid="{'doctor':{{Auth::guard('doctor')->user()}},'appointmentInfo':{{$appointment}}}" >
        </dashboard>
    </div>

@endsection