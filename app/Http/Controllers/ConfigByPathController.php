<?php

namespace App\Http\Controllers;

use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class ConfigByPathController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request, $path)
    {
        $result = Config::where('path', $path)->get();

        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = Carbon::parse($result->last()->value);
        $mes = $meses[($fecha->format('n')) - 1];
        $result->last()->value = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');

        return \response($result);
    }
}
