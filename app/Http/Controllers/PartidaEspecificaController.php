<?php

namespace App\Http\Controllers;

use App\Models\PartidaEspecifica;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartidaEspecificaController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response {
        return response(
            PartidaEspecifica::select(['partida_especifca', 'nombre'])
                ->groupBy('partida_especifca', 'nombre')
                ->get()
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
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
    public function show(int $id): Response {
        return response(
            PartidaEspecifica::select(['partida_especifca', 'nombre'])
                ->where('partida_generica', $id)
                ->groupBy('partida_especifca', 'nombre')
                ->get()
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
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
