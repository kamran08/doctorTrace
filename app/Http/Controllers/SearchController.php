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
         //$mainKey = "%saleh%";

         Log::info($mainKey);
         
         
         // validate the data
         
        
        //  $searchResult = Doctor::where('location' , $locationKey)
        //                         ->where($mainKey, function($query, $mainKey){
        //                         $query->where('name', 'LIKE',  "%$mainKey%" )
        //                             ->orWhere('email', 'LIKE',  "%$mainKey%")
        //                             ->orWhere('specialties', 'LIKE',  "%$mainKey%");
        //     })
        //     ->get();
         $searchResult = Doctor::where('name', 'LIKE',  "%$mainKey%" )
                        ->orWhere('email', 'LIKE',  "%$mainKey%")
                        ->orWhere('specialties', 'LIKE',  "%$mainKey%")
                        ->get();
          
             
 
         Log::info('searchResult');
         Log::info($searchResult);
 

         return response()->json([
             'searchResult' => $searchResult,
         ],200);

    }

    public function showAllDoctor(){
        return  Doctor::with('review')->get();
    }
}
