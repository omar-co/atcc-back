<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Catalogo;
use App\Models\ObjetivosMir;
use App\Models\Ods;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FilterController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param string $type
     * @return Response
     */
    public function __invoke(Request $request, string $type): Response {
        $response = null;
        switch ($type) {
            case 'ods':
                $response = Ods::filters();
                break;
            case 'mir':
                $response = ObjetivosMir::filters();
                break;
            case 'catalogo':
                $response = Catalogo::filters();
                break;
            case 'user':
                $response = User::filters();
                break;
        }

        return \response($response);
    }
}
