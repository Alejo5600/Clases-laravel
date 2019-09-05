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
        $padrino->numero_documento = $request->numero_documento;
        $padrino->nombre = $request->nombre;
        $padrino->telefono = $request->telefono;
        $padrino->email = $request->email;
        $padrino->save();
        $response = array(
            'success'=> true,
            'msg' => 'Insercion realizada correctamente'
        );
        return new JsonResponse($response);
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

    public function consultaPadrino($id){

        $padrino = Padrino::where('id', $id)->get();

        return new JsonResponse($padrino);
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
