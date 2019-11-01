<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stock;
use Illuminate\Support\Facades\DB;

class PhuthoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('phuthoview');
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
