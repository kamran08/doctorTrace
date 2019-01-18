<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DateTime;
use DateInterval;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){

        Log::info('I am Here: '.$request->doctor_id);
        Log::info($request->slotDetails);
        $app = new Appointment([
            'doctor_id'=> $request->doctor_id,
            'user_id'=> $request->user_id,
            'serial'=> $request->serial,
            'slotDetails'=> $request->slotDetails,
            'date'=> $request->date,
            

        ]);
        $app->save();

       
        return response()->json([
            'message' => 'Request for Appointment ! Please wait from Admin Confirmation.',
        ],200);
    }
    public function delete(Request $request)
    {
        $appointment = Appointment::find($request->id);
        
        $appointment->delete();

        return "done";


    }
    public function showByDate(Request $request){

        
        $appointment = Appointment::where([['doctor_id', $request->doctor_id],['date', $request->date]])->orderBy('serial', 'asc')->get();
        $startTime =  new DateTime('17:00:00');
        $startTimePre =  new DateTime('17:00:00');
        $endTime =  new DateTime('22:00:00');
        $duration = 15;
        $sinceStart = $startTime->diff($endTime);
        $totalMinutes=($sinceStart->h*60)+$sinceStart->i;
        
        $appointmentA = json_decode(json_encode($appointment), true); 
        $SerialNo = array_column($appointmentA, 'serial');
        $appointmentInfo = Null;
        
        $slot=0;
        for ($index=0; $index <$totalMinutes ; $index+=$duration) {
           
            $startTime->add(new DateInterval('PT'.$duration.'M'));
            $slotDetails =  "(".$startTimePre->format('h').":".$startTimePre->format('i')." PM - ".$startTime->format('h').":".$startTime->format('i')." PM )";
            $startTimePre->add(new DateInterval('PT'.$duration.'M'));
            $appointmentInfo[$slot]['slotDetails'] = $slotDetails;
            $appointmentInfo[$slot]['isBooked'] = in_array(($slot+1), $SerialNo)? true: false;
            if(in_array(($slot+1), $SerialNo)){
                $key = array_search($slot+1, $SerialNo);
                $appointmentInfo[$slot]['isPending'] = false;
                if($appointment[$key]->user_id==Auth::user()->id){
                    $appointmentInfo[$slot]['isPending'] = ($appointment[$key]->status==0)? true: false;
                }
                
            }
            $slot++;
        }

        Log::info('Doctor Appointment : '.$request->date);
        $appointmentInfo = collect($appointmentInfo);
        Log::info($appointmentInfo);

        return response()->json([
            'appointment' => $appointmentInfo,
        ],200);
       
        
        
    }


    public function userAppoShowByDate(Request $request){

        $appointment = DB::table('appointments')
        ->join('doctors', 'doctors.id', '=', 'appointments.doctor_id')
        ->select('appointments.*', 'doctors.name', 'doctors.email', 'doctors.phone', 'doctors.address', 'doctors.location', 'doctors.specialties')
        ->where([
            ['appointments.user_id', $request->user_id],
         ['appointments.date', $request->date]
        ])
        ->orderBy('appointments.created_at', 'asc')
        ->get();
        //Log::info('I am User Date: '.$request->date);
        //Log::info('I am Data: '.$appointment);
       // Log::info($appointment);

        return response()->json([
            'appointment' => $appointment,
            
        ],200);
    }
}
