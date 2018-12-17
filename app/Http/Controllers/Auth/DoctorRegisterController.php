<?php

namespace App\Http\Controllers\Auth;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class DoctorRegisterController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(Request $request)
    {
       // Log::info('I am Here');

        // $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|max:255|email|unique:users',
        //     'address' => 'required|string|max:255',
        //     'phone' => 'required|string|max:11|min:11',
        //     'chamber_location' => 'required|string|max:255',
        //     'sitting_time' => 'required|string|max:255',
        //     'password' => 'required|string|min:6|confirmed',
        // ]);



        // $doctor = new Doctor([
        //     'name'=> $request->input('name'),
        //     'email'=> $request->input('email'),
        //     'address'=> $request->input('address'),
        //     'phone'=> $request->input('phone'),
        //     'chamber_location'=> $request->input('chamber_location'),
        //     'sitting_time'=> $request->input('sitting_time'),
        //     'password'=> Hash::make($request->input('password')),

        // ]);
        // $doctor->save();

        return redirect()->route("doctor.login")->with('info', 'Registration Complete !!! <br> Please Login ');
    }
}
