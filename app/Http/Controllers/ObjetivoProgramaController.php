<?php

namespace App\Http\Controllers;

use App\Models\ObjetivoPrograma;
use Illuminate\Http\Response;

class ObjetivoProgramaController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param int $ramo
     * @param string $modalidad
     * @param int $pp
     * @return Response
     */
    public function __invoke(int $ramo, string $modalidad, int $pp): Response {
        return response(
            ObjetivoPrograma::select(['objetivo_progr_pres'])
                ->where('ramo', $ramo)
                ->where('modalidad', $modalidad)
                ->where('progr_pres', $pp)
                ->get()
        );
    }
}
