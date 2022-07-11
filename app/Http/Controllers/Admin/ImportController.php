<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\CatalogoImport;
use App\Imports\ObjetivosMirImport;
use App\Imports\OdsImport;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
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
        set_time_limit(900);
        ini_set('post_max_size', '30M');
        ini_set('upload_max_filesize', '30M');
        $this->actionFactory($request);

        return \response('', 200);
    }

    private function actionFactory($request)
    {
        switch ($request->type) {
            case self::IMPORT_ODS:
                Excel::import(new OdsImport(), request()->file('file'));
                return 'ODS importados correctamente.';
            case self::IMPORT_MIRS:
                Excel::import(new ObjetivosMirImport(), request()->file('file'));
                return 'Objetivos MiR importados correctamente.';
            default:
                return $this->saveFile($request);
        }
    }

    private function saveFile($request) {
        $file = $request->file('file');
        $path = Storage::putFile(self::IMPORT_CATALOG, $file);
        $name = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        File::create([
            'original_name' => $name,
            'path' => $path,
            'extension' => $extension
        ]);

        return 'Catalogos importados correctamente, ejecute el comando php artisan atcc:catalogo para realizar la importación';
    }
}
