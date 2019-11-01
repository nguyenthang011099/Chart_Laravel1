<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BacgiangController extends Controller
{
    public function index()
    {
        return view('bacgiangview');
    }
    public function chart()
    {
        $result = DB::table('bacgiangs')
            ->take(100)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }

}
