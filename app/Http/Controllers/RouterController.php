<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Router;

class RouterController extends Controller
{
    public function datos(){
        return Router::paginate();
    }

    public function dato($id){
        return Router::find($id);
    }

    public function create(Request $request){
        $router = new Router();
        $router->description = $request->input('description');
        $router->driver_id  = $request->input('driver_id');
        $router->vehicle_id  = $request->input('vehicle_id');
        $router->active = $request->input('active');
        $router->save();
        return json_encode(['msg'=>'added']);
    }

    public function destroy($id){
        Router::destroy($id);
        return json_encode(['msg'=>'removed']);
    }

    public function update(Request $request, $id){
        $description =$request->input('description');
        $driver_id =$request->input('driver_id');
        $vehicle_id =$request->input('vehicle_id');
        $active =$request->input('active');
        Router::where('id', $id)->update(
            ['description'=>$description,
            'driver_id'=>$year,
            'vehicle_id'=>$make,
            'active'=>$active]
        );
        return json_encode(['msg'=>'edited']);
    }
}