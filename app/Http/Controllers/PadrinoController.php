<?php

namespace App\Http\Controllers;

use App\Padrino;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PadrinoController extends Controller
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
        $padrino = new Padrino;
        $padrino->numero_documento = '1029777548';
        $padrino->nombre = 'Pepito';
        $padrino->telefono ='33333888';
        $padrino->email = 'padrino@email.com';
        $padrino->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Padrino  $padrino
     * @return \Illuminate\Http\Response
     */
    public function show(Padrino $padrino)
    {
        $padrinos = Padrino::all();
        return new JsonResponse($padrinos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Padrino  $padrino
     * @return \Illuminate\Http\Response
     */
    public function edit(Padrino $padrino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Padrino  $padrino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Padrino $padrino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Padrino  $padrino
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padrino $padrino)
    {
        //
    }
}
