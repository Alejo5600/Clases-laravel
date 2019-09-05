<?php

namespace App\Http\Controllers;

use App\Apadrinado;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApadrinadoController extends Controller
{



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
     * @param  \App\Apadrinado  $apadrinado
     * @return \Illuminate\Http\Response
     */
    public function show(Apadrinado $apadrinado)
    {
        $apadrinados = Apadrinado::all();
        return new JsonResponse($apadrinados);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apadrinado  $apadrinado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apadrinado $apadrinado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apadrinado  $apadrinado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apadrinado $apadrinado)
    {
        //
    }
}
