<?php

namespace App\Http\Controllers;

use App\Cerro;
use App\Comuna;
use App\Flaite;
use App\Provincia;
use Illuminate\Http\Request;

class FlaiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provincias = Provincia::orderBy('nombre','ASC')->get();
        $comunas = Comuna::orderBy('nombre','ASC')->get();
        $cerros = Cerro::orderBy('nombre','ASC')->get();
        $coleccion = array('provincias'=>$provincias,'comunas'=>$comunas,'cerros'=>$cerros);
        return view('app.flaite.create', compact('coleccion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Flaite  $flaite
     * @return \Illuminate\Http\Response
     */
    public function show(Flaite $flaite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Flaite  $flaite
     * @return \Illuminate\Http\Response
     */
    public function edit(Flaite $flaite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Flaite  $flaite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flaite $flaite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Flaite  $flaite
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flaite $flaite)
    {
        //
    }
}
