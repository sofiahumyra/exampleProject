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

        ]);
        // echo "Record inserted successfully.<br/>";
        // return view('/flight_view',);

        return redirect('flight')->with('status','Record inserted successfully.');

    }


    //Update Part
    public function edit(Request $request, $id)
    {
        try{
            $emp = Flight::find($id);
            $emp->name = $request['name'];
            $emp->code = $request['code'];
            $emp->save();
            return redirect()->back()->with('success','Record has been updated.');
        }
        catch(Exception $e){
            return redirect()->back()->with('failed','Internal server Error');
        }
    }

    public function show(Request $request, $id)
    {
      $flight = Flight::find($id);
      return view('flight_edit', compact('flight'));

        $rules = [
            'id'=> [Rule::exists('user')->where(function ($query){
                $query->where('id',$id);
            }),
        ],
      
    ];

    $validator = Validator::make($request->all(),$rules);
    if($validator->fails()){
        return redirect('/flight/edit/'.$id)
        ->withInput()
        ->withErrors($validator);
    }
    else{
      dd($request->all());
        $data = $request->input();
        dd($data);
        try{
            $emp = Flight::find($id);
            $emp->name = $data['name'];
            $emp->code = $data['code'];
            $emp->save();
            return redirect('/flight');
        }
        catch(Expection $e){
            return redirect('/flight')
            ->with('failed',$e);
        }
    }
  
  }

    // Delete
     public function destroy($id) {
        // DB::delete('delete from flights where id = ?',[$id]);
        $flight = Flight::find($id)->delete();
        
        return redirect()->back()->with('status','Record successfully deleted.');
    }

}

