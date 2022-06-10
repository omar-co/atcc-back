<?php

namespace App\Http\Controllers;

use App\Models\ObjetivosMir;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ObjetivosMirPorRamoController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param int $ramo
     * @param string $unidad
     * @param int $nivel
     * @return Response
     */
    public function __invoke(int $ramo, Request $request): Response {


        return response(
            ObjetivosMir::select(['id_objetivo', 'desc_objetivo'])
                ->where('id_ramo', $ramo)
                ->whereIn('id_nivel', $request->niveles)
                ->groupBy('id_nivel')
                ->get()
        );
    }
}
