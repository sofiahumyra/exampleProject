<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\Rule;
use App\Models\State;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $states = State::orderBy('created_at','asc')->get();
        $states = State::with('cities')->get();


        return view('state',compact('states'));    

     // return view('state', ['state' => $states]);
    }

    public function store(Request $request)
    {
        State::create([
            'state_name' => $request->state_name,
            'code' => $request->code,
            

        ]); 
        
        // Validate the form data
        $validatedData = $request->validate([
            'state_name' => 'required',
            'code' => 'required',
        ]);
    // Retrieve data from the form submission
        $state_name = $validatedData->input('state_name');
        $code = $validatedData->input('code');


    // Create a new state object and save it to the database
        $state = new State();
        $state->state_name = $validatedData['state_name'];
        $state->code = $validatedData['code'];
        $state->save();


    // Redirect to a success page
        return redirect('state.view')->with('status','Record inserted successfully.');
    }
}

