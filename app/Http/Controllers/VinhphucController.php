<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VinhphucController extends Controller
{
    public function index()
    {
        return view('only_chart.vinhphucview');
    }
    public function chart()
    {
        $result = DB::table('vinhphucs')
            ->take(20)
            //->orderBy('id')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
