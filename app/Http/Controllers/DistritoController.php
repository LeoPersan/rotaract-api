<?php

namespace App\Http\Controllers;

use App\MsSQL\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Distrito::all();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function show($distrito)
    {
        return Distrito::where(['DISTRITO'=>$distrito])->with(['estados','clubes'])->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function edit(Distrito $distrito)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Distrito $distrito)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Distrito  $distrito
     * @return \Illuminate\Http\Response
     */
    public function destroy(Distrito $distrito)
    {
        //
    }

    public function estados($distrito)
    {
        return Distrito::where(['DISTRITO'=>$distrito])->first()->estados;
    }

    public function clubes($distrito)
    {
        return Distrito::where(['DISTRITO'=>$distrito])->first()->clubes;
    }
}
