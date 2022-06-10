<?php

namespace App\Http\Controllers;

use App\Models\DownloadTracking;
use App\Models\Json;
use Symfony\Component\HttpFoundation\Response;

class EliminarController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param string $pp
     * @return \Illuminate\Http\Response
     */
    public function __invoke(string $pp) {
        /** @var DownloadTracking $dt */
        $dt = DownloadTracking::with(['jsons'])->where('user_id', auth()->id())->where('active', true)->get()->first();

        if ($dt) {
            $jsons = $dt->jsons;

            preg_match_all('!\d+!', $pp, $idPp, );
            $idPp = (int) $idPp;
            $modalidad = strtoupper(preg_replace('/[^a-zA-Z]/', '', $pp));

            /** @var Json $json */
            foreach ($jsons as $json) {
                $data = json_decode($json->content);
                if (property_exists($data, 'programa') && $data->programa == $idPp &&
                    property_exists($data, 'modalidad') && $data->modalidad == $modalidad){
                    $json->delete();
                }
            }

            return response('', Response::HTTP_NO_CONTENT);
        }

        return response('', Response::HTTP_NOT_FOUND);

    }
}
