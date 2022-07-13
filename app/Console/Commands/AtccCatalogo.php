<?php

namespace App\Console\Commands;

use App\Imports\ImportTrait;
use App\Models\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Rap2hpoutre\FastExcel\FastExcel;

class AtccCatalogo extends Command
{
    use ImportTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'atcc:catalogo';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->output->title('Iniciando la importación del catálogo');
        $file =$this->getLastUnprocessedFile();
        if($file) {

            (new FastExcel)->import(Storage::path($file->path), function ($row) {
                DB::table('catalogos')->insert([
                    'ciclo' => $this->ciclo($row),
                    'id_ramo' => $row['ramo'],
                    'desc_ramo' => $row['ramo_descripcion'],
                    'id_ur' => $row['unidad'],
                    'desc_ur' => $row['unidad_descripcion'],
                    'gpo_funcional' => $row['grupo_funcional'],
                    'desc_gpo_funcional' => $row['grupo_fun_descripcion'],
                    'id_funcion' => $row['funcion'],
                    'desc_funcion' => $row['funcionl_descripcion'],
                    'id_subfuncion' => $row['subfuncion'],
                    'desc_subfuncion' => $row['subfuncionl_descripcion'],
                    'id_ai' => $row['actividad_inst'],
                    'desc_ai' => $row['actividad_inst_descripcion'],
                    'id_modalidad' => $row['modalidad'],
                    'desc_modalidad' => $row['modalidad_descripcion'],
                    'id_pp' => $row['progr_pres'],
                    'desc_pp' => $row['progr_pres_descripcion'],
                    'id_capitulo' => $row['capitulo'],
                    'desc_capitulo' => $row['capitulo_descripcion'],
                    'id_concepto' => $row['concepto'],
                    'desc_concepto' => $row['concepto_descripcion'],
                    'id_partida_generica' => $row['partida_generica'],
                    'desc_partida_generica' => $row['partida_generica_descripcion'],
                    'id_partida_especifica' => $row['partida_especifica'],
                    'desc_partida_especifica' => $row['partida_descripcion'],
                    'id_tipogasto' => $row['tipo_gasto'],
                    'desc_tipogasto' => $row['tipo_gasto_descripcion'],
                    'id_ff' => $row['fuente_finan'],
                    'desc_ff' => $row['fuente_finan_descripcion'],
                    'id_entidad_federativa' => $row['entidad_federativa'],
                    'entidad_federativa' => $row['entidad_fed_descripcion'],
                    'id_clave_cartera' => $row['clave_cartera'],
                    'monto_aprobado' => $row['monto_aprobado']
                ]);
            });

            $file->processed = true;
            $file->save();
            $this->output->success('Importación completada correctamente.');
        } else {
            $this->output->warning('No hay archivos nuevos para importar');
        }


        return 0;
    }

    private function getLastUnprocessedFile() {
        return File::where('processed', false)
            ->orderBy('created_at', 'DESC')
            ->limit(1)
            ->get()
            ->first();
    }


}
