<?php

namespace App\Http\Controllers;

use App\Models\PartidaEspecifica;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CapituloController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response {
        return response(
            PartidaEspecifica::select(['capitulo'])
                ->groupBy('capitulo')
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
     * Display a listing of the resource.
     *
     * @param $id
     * @return Response
     */
    public function show($id): Response {
        return response(
            PartidaEspecifica::select(['concepto'])
                ->where('capitulo', $id)
                ->groupBy('concepto')
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
