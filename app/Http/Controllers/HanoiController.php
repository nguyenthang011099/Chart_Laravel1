<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HanoiController extends Controller
{
    public function index()
    {
        return view('only_chart.hanoiview');
    }
    public function compare()
    {
        return view('camopare_chatr.hnvshy');
    }
    public function chart()
    {
        $result = DB::table('hanois')
            ->take(20)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }
    public function search(Request $request){
        $query= $request->input('query');
        $result= DB::table('hanois')
//            ->where('Time',"$query")
            ->take($query)
            ->get();
//        return response()->json($result);
        return view('hnview',['hanois'=>$result]);
    }
    public function show(){
        $result= DB::table('hanois')


            ->join('hungyens','hanois.ID','hungyens.ID')
            ->select('hanois.ID','hanois.TemperatureHN','hungyens.TemperatureHY'
                                ,'hanois.HumidHN','hungyens.HumidHY'
                                , 'hanois.WindHN','hungyens.WindHY')
            ->take(30)
            ->get();
        return response()->json($result);
    }


}
