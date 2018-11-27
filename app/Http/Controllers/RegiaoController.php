<?php

namespace App\Http\Controllers;

use App\MsSQL\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Regiao::all();
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
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function show($regiao)
    {
        return Regiao::where('regiao',strtoupper($regiao))->with('distritos')->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function edit(Regiao $regiao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regiao $regiao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regiao $regiao)
    {
        //
    }

    public function distritos($regiao)
    {
        return Regiao::where('regiao',strtoupper($regiao))->first()->distritos;
    }
}
