<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class VinhphucController extends Controller
{
    public function index()
    {
        return view('vinhphucview');
    }
    public function chart()
    {
        $result = DB::table('vinhphucs')
            ->take(10)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
