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
    public function comparevshy()
    {
        return view('compare_chart.hnvshy');
    }
    public function comparevsbn()
    {
        return view('compare_chart.hnvsbn');
    }
    public function comparevsbg()
    {
        return view('compare_chart.hnvsbg');
    }
    public function comparevshb()
    {
        return view('compare_chart.hnvshb');
    }
    public function comparevshd()
    {
        return view('compare_chart.hnvshd');
    }
    public function comparevspt()
    {
        return view('compare_chart.hnvspt');
    }
    public function comparevsvp()
    {
        return view('compare_chart.hnvsvp');
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



    public function showvsbg(){
        $result= DB::table('hanois')


            ->join('bacgiangs','hanois.ID','bacgiangs.ID')
            ->select('hanois.ID','hanois.TemperatureHN','bacgiangs.TemperatureBG'
                                ,'hanois.HumidHN','bacgiangs.HumidBG'
                                , 'hanois.WindHN','bacgiangs.WindBG')
            ->take(30)
            ->get();
        return response()->json($result);
    }
    public function showvshy(){
        $result= DB::table('hanois')


            ->join('hungyens','hanois.ID','hungyens.ID')
            ->select('hanois.ID','hanois.TemperatureHN','hungyens.TemperatureHY'
                                ,'hanois.HumidHN','hungyens.HumidHY'
                                , 'hanois.WindHN','hungyens.WindHY')
            ->take(30)
            ->get();
        return response()->json($result);
    }
    public function showvshd(){
        $result= DB::table('hanois')


            ->join('haiduongs','hanois.ID','haiduongs.ID')
            ->select('hanois.ID','hanois.TemperatureHN','haiduongs.TemperatureHD'
                                ,'hanois.HumidHN','haiduongs.HumidHD'
                                , 'hanois.WindHN','haiduongs.WindHD')
            ->take(30)
            ->get();
        return response()->json($result);
    }
    public function showvshb(){
        $result= DB::table('hanois')


            ->join('hoabinhs','hanois.ID','hoabinhs.ID')
            ->select('hanois.ID','hanois.TemperatureHN','hoabinhs.TemperatureHB'
                                ,'hanois.HumidHN','hoabinhs.HumidHB'
                                , 'hanois.WindHN','hoabinhs.WindHB')
            ->take(30)
            ->get();
        return response()->json($result);
    }
    public function showvspt(){
        $result= DB::table('hanois')


            ->join('phuthos','hanois.ID','phuthos.ID')
            ->select('hanois.ID','hanois.TemperatureHN','phuthos.TemperaturePT'
                                ,'hanois.HumidHN','phuthos.HumidPT'
                                , 'hanois.WindHN','phuthos.WindPT')
            ->take(30)
            ->get();
        return response()->json($result);
    }
    public function showvsvp(){
        $result= DB::table('hanois')


            ->join('vinhphucs','hanois.ID','vinhphucs.ID')
            ->select('hanois.ID','hanois.TemperatureHN','vinhphucs.TemperatureVP'
                                ,'hanois.HumidHN','vinhphucs.HumidVP'
                                , 'hanois.WindHN','vinhphucs.WindVP')
            ->take(30)
            ->get();
        return response()->json($result);
    }

}
