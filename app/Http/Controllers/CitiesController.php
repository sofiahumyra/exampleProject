<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\Rule;
use App\Models\Cities;
use App\Models\State;


class CitiesController extends Controller
{
       public function index(Request $request)
    {
        $cities = Cities::orderBy('created_at','asc')->get();



        return view('city_view',compact('cities'));    

    }

    public function store(Request $request)
    {
        Cities::create([
            'city_name' => $request->city_name,

        ]); 
        
        
    // Retrieve data from the 
        $city_name = $validatedData->input('city_name');
   
    // Create a new state object and save it to the database
        $cities = new cities();
        $cities->city_name = $validatedData['city_name'];
        $cities->save();


    // Redirect to a success page
        return redirect('city_view')->with('status','Record inserted successfully.');
    }
}

