<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\CatalogoImport;
use App\Imports\ObjetivosMirImport;
use App\Imports\OdsImport;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{

    const IMPORT_ODS = 'ods';
    const IMPORT_MIRS = 'mirs';
    const IMPORT_CATALOG = 'catalogo';

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        Excel::import($this->actionFactory($request->tipo), request()->file('file'));

        return \response('', 200);
    }

    private function actionFactory(string $type)
    {
        switch ($type) {
            case self::IMPORT_ODS:
                return new OdsImport();
            case self::IMPORT_MIRS:
                return new ObjetivosMirImport();
            default:
                return new CatalogoImport();
        }
    }
}
