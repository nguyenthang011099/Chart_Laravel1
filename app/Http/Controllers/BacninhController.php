<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BacninhController extends Controller
{
    public function index()
    {
        return view('bacninhview');
    }
    public function chart()
    {
        $result = DB::table('bacninhs')
            ->take(20)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
