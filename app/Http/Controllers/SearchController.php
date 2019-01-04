<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use App\Doctor;

class SearchController extends Controller
{
    public function index(){

        $location = Doctor::select('location')->distinct()->get();
        $specialities = Doctor::select('specialties')->distinct()->get();

        return response()->json([
            'location' => $location,
            'specialities' => $specialities,
        ],200);
        
       

    }

    public function searchByKey(Request $request){
        Log::info($request);
         // grab the data
         $locationKey = $request->locationKey;
         $mainKey = $request->mainKey;
         $mainKey = "%saleh%";

         Log::info($mainKey);
         
         
         // validate the data
         
         // match the data to the database
         $searchResult = Doctor::where('location' , $locationKey)
            ->where(function($query){
                $query->where('name', 'LIKE',  "%Cardiologist%" )
                      ->orWhere('email', 'LIKE',  "%Cardiologist%")
                      ->orWhere('specialties', 'LIKE',  "%Cardiologist%");
            })
            ->get();
          
             
 
         Log::info('searchResult');
         Log::info($searchResult);
 

         return response()->json([
             'searchResult' => $searchResult,
         ],200);

    }
}
