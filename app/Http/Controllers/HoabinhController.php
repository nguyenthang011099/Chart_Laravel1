<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
            ->take(20)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
