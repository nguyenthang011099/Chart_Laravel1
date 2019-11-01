<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoabinhController extends Controller
{
    public function index()
    {
        return view('hoabinhview');
    }
    public function chart()
    {
        $result = DB::table('hoabinhs')
            ->take(100)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
