<?php

namespace App\Http\Controllers;

use App\Models\Ods;

class OdsPorPpController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(int $ramo, string $modalidad, int $pp)
    {
        return response(
          Ods::select(['id_ods', 'desc_ods'])
              ->where('id_ramo', $ramo)
              ->where('id_modalidad', $modalidad)
              ->where('id_pp', $pp)
              ->groupBy('id_ods')
              ->get()
        );
    }
}
