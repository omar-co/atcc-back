<?php

namespace App\Console\Commands;

use App\Imports\CatalogoImport;
use App\Models\Catalogo;
use App\Models\Config;
use App\Models\File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Rap2hpoutre\FastExcel\FastExcel;
use function Composer\Autoload\includeFile;

class AtccCatalogo extends Command
{
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

    private $ciclo;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

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
                return Catalogo::create([
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

            (new CatalogoImport())->withOutput($this->output)->import($file->path);
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

    protected function ciclo(array $row) {
        if (key_exists('ciclo', $row)) {
            return $row['ciclo'];
        }

        return $this->getActiveCicle();
    }

    private function getActiveCicle() {
        if (!$this->ciclo) {
            $this->ciclo = Config::where('path', 'app\calendar')
                ->where('key', 'ejercicio')
                ->limit(1)
                ->get()
                ->first()
                ->value;
        }
        return $this->ciclo;
    }
}
