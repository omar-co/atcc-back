<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Imports\ImportContract;
use App\Imports\ImportTrait;
use App\Imports\OdsImport;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use Rap2hpoutre\FastExcel\FastExcel;

class ImportController extends Controller implements ImportContract
{
    use ImportTrait;

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response
    {
        set_time_limit(900);
        ini_set('post_max_size', '150M');
        ini_set('upload_max_filesize', '150M');
        $this->actionFactory($request);

        return \response('', 200);
    }

    private function actionFactory($request)
    {
        switch ($request->tipo) {
            case self::IMPORT_ODS:
                Excel::import(new OdsImport(), request()->file('file'));
                return 'ODS importados correctamente.';
            case self::IMPORT_MIRS:
                (new FastExcel)->import(request()->file('file'), function ($row) {
                    return DB::table('objetivos_mirs')->insert([
                        'ciclo' => $this->ciclo($row),
                        'id_ramo' => $row['id_ramo'],
                        'id_objetivo' => $row['id_objetivo'],
                        'desc_objetivo' => $row['desc_objetivo'],
                        'id_nivel' => $row['id_nivel'],
                        'desc_nivel' => $row['desc_nivel']
                    ]);
                });
                return 'Objetivos MiR importados correctamente.';
            default:
                return $this->saveFile($request);
        }
    }

    private function saveFile($request) {
        if (! $request->hasFile('file')) {
            return 'Error: No file uploaded!';
        }

        $file = $request->file('file');

        if (! $path = Storage::disk('catalogo')->store($file->getClientOriginalName())) {
            return 'Error: Could not store file!';
        }

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
