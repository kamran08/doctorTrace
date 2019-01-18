<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;
use App\User;
use App\Hospital;
use DateTime;
use DateInterval;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function doctorProfile($id){

        $doctor = Doctor::where('id', $id)->first();
        
        return view('profiles.index', ['doctor' => $doctor]);
    }
    public function userProfile($id){

        $user = User::where('id', $id)->first();
        
        return view('profiles.user', ['user' => $user]);
    }
    public function showDLogin(){
  
        return view('doctor.login');
    }
    public function showDRegistration(){

        return view('doctor.register');
    }
}
