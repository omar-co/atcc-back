<?php

namespace App\Http\Controllers;

use App\Models\TipoGasto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TipoGastoController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(): Response {
        return response(
            TipoGasto::all()
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
    public function show($id) {
        //
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
