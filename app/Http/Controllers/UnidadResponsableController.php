<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\UnidadResponsable;
use Illuminate\Http\Request;
use function response;

class UnidadResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response(UnidadResponsable::all());
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ramo, $modalidad, $pp)
    {
        return response(
            Catalogo::select(['id_ur', 'desc_ur'])
                ->where('id_ramo', $ramo)
                ->where('id_modalidad', $modalidad)
                ->where('id_pp', $pp)->groupBy('id_ur')
                ->get()
        );
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
