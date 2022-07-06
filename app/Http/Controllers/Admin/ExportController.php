<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CatalogoExport;
use App\Exports\MirExport;
use App\Exports\OdsExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportController extends Controller {
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @param string $type
     * @return BinaryFileResponse
     */
    public function __invoke(Request $request, string $type) {
        $class = '';
        switch ($type) {
            case 'ods':
                $class = OdsExport::class;
                break;
            case 'mir':
                $class = MirExport::class;
                break;
            case 'catalogo':
                $class = CatalogoExport::class;
                break;
        }

        $name = $type . '-' . now();

        return Excel::download(new $class, "$name.xlsx", \Maatwebsite\Excel\Excel::XLSX);
    }
}
