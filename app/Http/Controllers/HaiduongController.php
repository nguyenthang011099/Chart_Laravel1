<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaiduongController extends Controller
{
    public function index()
    {
        return view('haiduongview');
    }


    public function create()
    {
        return view('Stock');
    }


    public function store(Request $request)
    {
        $stock = new Stock([
            'stockName' => $request->get('stockName'),
            'stockPrice' => $request->get('stockPrice'),
            'stockYear' => $request->get('stockYear'),
        ]);
        $stock->save();

        return redirect('stocks');
    }


    public function chart()
    {
        $result = DB::table('haiduongs')
            ->take(30)
            // orderBy('Humid')
            // ->where('Temperature',30)
            ->get();

        return response()->json($result);
    }




    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
