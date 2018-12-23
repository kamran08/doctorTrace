<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class DoctorLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:doctor')->except('logout');
    }
    protected function guard(){
        return Auth::guard('doctor');
    }
    public function showLoginForm()
    {
        return view('doctor.login');
    }
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dprofile';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  
}