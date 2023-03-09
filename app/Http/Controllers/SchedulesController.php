<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedules;


class SchedulesController extends Controller
{
    public function datos(){
        return Schedules::paginate();
    }

    public function dato($id){
        return Schedules::find($id);
    }

    public function create(Request $request){
        $schedules = new Schedules();
        $schedules->router_id  = $request->input('router_id ');
        $schedules->week_num = $request->input('week_num');
        $schedules->from = $request->input('from');
        $schedules->to = $request->input('to');
        $schedules->active = $request->input('active');
        $schedules->save();
        return json_encode(['msg'=>'added']);
    }

    public function destroy($id){
        Schedules::destroy($id);
        return json_encode(['msg'=>'removed']);
    }

    public function update(Request $request, $id){
        $router_id = $request->input('router_id');
        $week_num = $request->input('week_num');
        $from = $request->input('from');
        $to = $request->input('to');
        $active = $request->input('active');
        Schedules::where('id', $id)->update(
            ['router_id'=>$router_id,
            'week_num'=>$week_num,
            'from'=>$from,
            'to'=>$to,
            'active'=>$active]
        );
        return json_encode(['msg'=>'edited']);
    }
}
