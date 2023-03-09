<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drivers;

class DriversController extends Controller
{
    public function datos(){
        return Drivers::paginate();
    }

    public function dato($id){
        return Drivers::find($id);
    }

    public function create(Request $request){
        $drivers = new Drivers();
        $drivers->last_name = $request->input('last_name');
        $drivers->first_name = $request->input('first_name');
        $drivers->ssd = $request->input('ssd');
        $drivers->dob = $request->input('dob');
        $drivers->address = $request->input('address');
        $drivers->city = $request->input('city');
        $drivers->zip = $request->input('zip');
        $drivers->phone = $request->input('phone');
        $drivers->active = $request->input('active');
        $drivers->save();
        return json_encode(['msg'=>'added']);
    }

    public function destroy($id){
        Drivers::destroy($id);
        return json_encode(['msg'=>'removed']);
    }

    public function update(Request $request, $id){
        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $ssd = $request->input('ssd');
        $dob = $request->input('dob');
        $address = $request->input('address');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $phone = $request->input('phone');
        $active = $request->input('active');
        Drivers::where('id', $id)->update(
            ['last_name'=>$last_name,
            'first_name'=>$first_name,
            'ssd'=>$ssd,
            'dob'=>$dob,
            'address'=>$address,
            'city'=>$city,
            'zip'=>$zip,
            'phone'=>$phone,
            'active'=>$active]
        );
        return json_encode(['msg'=>'edited']);
    }
}
