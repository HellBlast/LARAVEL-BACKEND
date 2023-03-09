<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicles;

class VehiclesController extends Controller
{
    public function datos(){
        return Vehicles::paginate();
    }

    public function dato($id){
        return Vehicles::find($id);
    }

    public function create(Request $request){
        $vehicles = new Vehicles();
        $vehicles->description = $request->input('description');
        $vehicles->year = $request->input('year');
        $vehicles->make = $request->input('make');
        $vehicles->capacity = $request->input('capacity');
        $vehicles->active = $request->input('active');
        $vehicles->save();
        return json_encode(['msg'=>'added']);
    }

    public function destroy($id){
        Vehicles::destroy($id);
        return json_encode(['msg'=>'removed']);
    }

    public function update(Request $request, $id){
        $description =$request->input('description');
        $year =$request->input('year');
        $make =$request->input('make');
        $capacity =$request->input('capacity');
        $active =$request->input('active');
        Vehicles::where('id', $id)->update(
            ['description'=>$description,
            'year'=>$year,
            'make'=>$make,
            'capacity'=>$capacity,
            'active'=>$active]
        );
        return json_encode(['msg'=>'edited']);
    }
}
