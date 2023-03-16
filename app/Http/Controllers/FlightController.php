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
        $flights = DB::select('select * from flights');
        return view('flight_view',['flights'=>$flights]);    
    }

    // Insert

    
    //Update
    public function edit(Request $request, $id)
    {
     // dd($request->all());
        try{
            // $emp = Flight::select('id','name','code')->find($id);
            // if($emp){
            //     return view('edit',['empdata'=>$emp]);
            // }
            // else{
            //     return redirect('/flight')->with('failed','Invalid Name');
            // }
            $emp = Flight::find($id);
            $emp->name = $request['name'];
            $emp->code = $request['code'];
            $emp->save();
            return redirect('/flight');
        }
        catch(Exception $e){
            return redirect('/flight')->with('failed','Internal server Error');
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
        DB::delete('delete from flights where id = ?',[$id]);
        echo "Record deleted successfully.
        ";
        return redirect('/flight');
}

}
?>
