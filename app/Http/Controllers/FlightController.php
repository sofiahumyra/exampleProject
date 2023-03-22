<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Flight;


class FlightController extends Controller
{
    //
    public function index(){
        $hid = hash('sha256',40);
        //dd($hid);
        $flights = Flight::orderBy('created_at','desc')->get();

        return view('flight_view',compact('flights'));    
    }

    // Insert Part

    public function insert(){
      //dd('ok');
        // $emp = getURLList();
        
        return view('/flight_insert');
    }

    public function create(Request $request){
        Flight::create([
            'name' => $request->name,
            'code' => $request->code,
            'price' => $request->price,


        ]);

        return redirect('flight')->with('status','Record inserted successfully.');

    }


    //Update Part
    public function edit(Request $request, $id)
    {
        try{
            $flight = Flight::find($id);
            $flight->name = $request->name;
            $flight->code = $request->code;
            $flight->price = $request->price;
            $flight->save();
            return redirect()->back()->with('success','Record has been updated.');
        }
        catch(Exception $e){
            return redirect()->back()->with('failed','Internal server Error');
        }
    }


    // Show Part
    public function show(Request $request, $id)
    {
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->code = $request->code;
        $flight->price = $request->price;
        $flight->save();

    }

    // Delete Part
    public function destroy($id) {
        // DB::delete('delete from flights where id = ?',[$id]);
        $flight = Flight::find($id)->delete();

        return redirect()->back()->with('status','Record successfully deleted.');
    }

    public function booking(Flight $flight)
    {
        return view('/flight_insert')->with(['flight'=>$flight]);

        
    }

}

