<?php

namespace App\Http\Controllers;

use App\MsSQL\Clube;
use Illuminate\Http\Request;

class ClubeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Clube::take(2)->get();
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
     * @param  \App\Clube  $clube
     * @return \Illuminate\Http\Response
     */
    public function show($clube)
    {
        return Clube::with(['clube_socio','enderecos','historico','cargo_socio'])->find($clube);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clube  $clube
     * @return \Illuminate\Http\Response
     */
    public function edit(Clube $clube)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clube  $clube
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clube $clube)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clube  $clube
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clube $clube)
    {
        //
    }
}
