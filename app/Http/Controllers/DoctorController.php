<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Review;
use App\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
       $this->middleware('auth:doctor');
    }

    public function dashboard(){
        $appointment= $this->dashBoardFetchData(date('Y-m-d'));
        Log::info('I am AppointmentInfo: '.$appointment);
        return view('doctor.pages.dashboard', ['appointment' => $appointment]);
    }

    public function appointmentSearchByDate(Request $request){
        $appointment= $this->dashBoardFetchData($request->date);
        return response()->json([
            'appointment' => $appointment,
        ],200);
    }
    public function updateStatus(Request $request){
        $appointmentinfo = Appointment::find($request->id);
        $appointmentinfo->status = 1;
        $appointmentinfo->save();
        $appointment= $this->dashBoardFetchData($request->date);
        return response()->json([
            'appointment' => $appointment,
        ],200);
    }

    public function dashBoardFetchData($date){

        $id= Auth::guard('doctor')->user()->id;
        Log::info('I am id: '.$id);
        $appointment = DB::table('appointments')
        ->join('users', 'users.id', '=', 'appointments.user_id')
        ->select('appointments.*', 'users.name', 'users.email')
        ->where([['appointments.doctor_id', $id],['appointments.date', $date]])
        ->orderBy('appointments.created_at', 'asc')
        ->get();
        Log::info('I am Date: '.$date);
        Log::info('I am Data: '.$appointment);
        return $appointment;
    }

    public function makeReviewByUser($request){

         $app = new Review([
            'doctor_id'=> $request->doctor_id,
            'user_id'=> $request->user_id,
            'detials'=> $request->slotDetails,
            'date'=> $request->date,
        ]);
        $app->save();
        return response()->json([
            'message' => 'Request for Appointment ! Please wait from Admin Confirmation.',
        ],200);
    }
    public function doctorPicUpdate(Request $request){
        request()->file('file')->store('uploads');
        $pic= $request->file->hashName();
        Log::info($pic);
        /*update the profile pic*/
        $id= Auth::guard('doctor')->user()->id;
        $flag =  Doctor::where('id', $id)->update(['image' => "/uploads/$pic"]);
        if($flag){
            return $pic;
        }
        else{
            return response()->json([
                'message' => "Picture Upload Failed!!",
                
            ],403);
        }
    }

    
}
