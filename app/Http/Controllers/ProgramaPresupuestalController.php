<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\ProgramaPresupuestal;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProgramaPresupuestalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response(ProgramaPresupuestal::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($idRamo, $idModalidad)
    {
        return \response(
          Catalogo::select(['id_pp', 'desc_pp'])
              ->where('id_ramo', $idRamo)
              ->where('id_modalidad', $idModalidad)
              ->groupBy('id_pp', 'desc_pp')
              ->orderBy('id_pp')
              ->get()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
