<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\Models\Funcion;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FuncionController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response {
        return response(
            Funcion::all()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($ramo, $modalidad, $pp): Response {
        return response(
            Catalogo::select(['id_funcion', 'desc_funcion'])
                ->where('id_ramo', $ramo)
                ->where('id_modalidad', $modalidad)
                ->where('id_pp', $pp)
                ->groupBy('id_funcion')
                ->get()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id) {
        //
    }
}
