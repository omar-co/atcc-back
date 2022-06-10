<?php

namespace App\Http\Controllers;

use App\Http\Resources\CatalogoResource;
use App\Models\Catalogo;
use App\Models\Modalidad;
use App\Models\RelacionEconomica;
use Illuminate\Http\Response;

class RelacionEconomicaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param int $ramo
     * @param bool $filtro
     * @param bool $modalidad
     * @return Response
     */
    public function __invoke(int $ramo, int $programa, bool $filtro = false, $modalidad = false): Response {

        return \response(
            CatalogoResource::collection(Catalogo::
                referencia($filtro, $modalidad)
                ->where('id_ramo', $ramo)
                ->where('id_modalidad', $modalidad)
                ->where('id_pp', $programa)
                ->limit(976)
                ->get())
        );
    }
}
