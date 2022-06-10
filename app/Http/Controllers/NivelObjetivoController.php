<?php

namespace App\Http\Controllers;

use App\Models\ObjetivosMir;
use Illuminate\Http\Response;

class NivelObjetivoController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @return Response
     */
    public function __invoke(): Response {
        return response(
            ObjetivosMir::select(['id_nivel', 'desc_nivel'])
                ->groupBy('id_nivel', 'desc_nivel')
                ->orderBy('id_nivel')
                ->get()
        );
    }
}
