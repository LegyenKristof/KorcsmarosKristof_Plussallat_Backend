<?php

namespace App\Http\Controllers;

use App\Models\Plussallat;
use Illuminate\Http\Request;

class PlussallatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plussallatok = Plussallat::all();
        return response()->json($plussallatok);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plussallat = new Plussallat();
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $plussallat = Plussallat::find($id);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        return response()->json($plussallat);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function edit(Plussallat $plussallat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $plussallat = Plussallat::find($id);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        $plussallat->fill($request->all());
        $plussallat->save();
        return response()->json($plussallat);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plussallat  $plussallat
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $plussallat = Plussallat::find($id);
        if(is_null($plussallat))
            return response()->json(["message" => "A megadott azonosítóval nem található plüssállat."]);
        Plussallat::destroy($id);
        return response()->noContent();
    }
}
