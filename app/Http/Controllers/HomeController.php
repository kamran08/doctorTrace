<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
use App\Hospital;

class HomeController extends Controller
{
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
    public function showDLogin(){
  
        return view('doctor.login');
    }
    public function showDRegistration(){

        return view('doctor.register');
    }
}
