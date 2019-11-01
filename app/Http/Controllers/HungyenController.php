<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HungyenController extends Controller
{
    public function index()
    {
        return view('hungyenview');
    }
    public function chart()
    {
        $result = DB::table('hungyens')
            ->take(20)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }


}
