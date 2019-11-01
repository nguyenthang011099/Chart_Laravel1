<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HanoiController extends Controller
{
    public function index()
    {
        return view('hanoiview');
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

}