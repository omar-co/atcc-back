<?php

namespace App\Console\Commands;

use App\Models\Actividad;
use App\Models\Modalidad;
use App\Models\PpId;
use App\Models\ProgramaPresupuestal;
use App\Models\Ramo;
use App\Models\UnidadResponsable;
use Illuminate\Console\Command;

class Data extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hacienda:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle() {
        /*$this->migrateRamos();
        $this->migrateModalidades();
        $this->ramosModalidadesRelation();
        $this->migrateProgramas();
        $this->migratePpIds();*/
        //$this->migrateActividades();
        //$this->migrateUnidadResponsable();
        //$this->actividadesUnidadResponsableRelation();
        $this->programaPresupuestalRamoRelation();
    }

    private function migrateRamos() {
        $data = \App\Models\Data::select(['ramo', 'ramo_descripcion'])->groupBy('ramo')->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando Ramo: $datum->ramo" . PHP_EOL;
            Ramo::create([
                'id' => $datum->ramo,
                'name' => $datum->ramo_descripcion
            ]);
            $count++;
        }

        echo "$count Ramos creados." . PHP_EOL;
    }

    private function migrateModalidades() {
        $data = \App\Models\Data::select(['modalidad', 'modalidad_descripcion'])->groupBy('modalidad')->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando Modalidad: $datum->modalidad" . PHP_EOL;
            Modalidad::create([
                'letter' => $datum->modalidad,
                'description' => $datum->modalidad_descripcion
            ]);
            $count++;
        }

        echo "$count Modalidades creados." . PHP_EOL;
    }

    private function ramosModalidadesRelation() {

        $ramos = Ramo::all();

        foreach ($ramos as $ramo) {
            echo "Sincronizando Ramo: $ramo->id" . PHP_EOL;
            $data = \App\Models\Data::select(['modalidad'])
                ->where('ramo', $ramo->id)
                ->groupBy('ramo', 'modalidad')
                ->get()
                ->unique('modalidad')
                ->pluck('modalidad')
                ->all();

            $total = count($data);
            echo "$total Modalidades encontradas para $ramo->id" . PHP_EOL;

            $modalities = Modalidad::select(['id'])
                ->whereIn('letter', $data)
                ->get()
                ->pluck('id')
                ->all();

            $ramo->modalidades()->sync($modalities);

            echo "$total Modalidades sincronizadas exisotsamente para $ramo->id" . PHP_EOL;
        }
    }

    private function migrateProgramas() {
        $data = \App\Models\Data::select(['programa_pres', 'programa_pres_descripcion'])
            ->groupBy('programa_pres', 'programa_pres_descripcion')
            ->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando Programa Presupuestal: $datum->programa_pres" . PHP_EOL;
            ProgramaPresupuestal::create([
                'programa_pres' => $datum->programa_pres,
                'name' => $datum->programa_pres_descripcion
            ]);
            $count++;
        }

        echo "$count Programas Presupuestales creados." . PHP_EOL;
    }

    private function migratePpIds() {
        $data = \App\Models\Data::select(['pp_id', 'ramo', 'modalidad', 'programa_pres', 'programa_pres_descripcion'])
            ->groupBy('pp_id')
            ->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando relacion Programa Presupuestal: $datum->pp_id" . PHP_EOL;

            $modalidad = Modalidad::where('letter', $datum->modalidad)->first();
            $pp= ProgramaPresupuestal::where('programa_pres', $datum->programa_pres)
                ->where('name', $datum->programa_pres_descripcion)
                ->first();

            PpId::create([
                'pp_id' => $datum->pp_id,
                'ramo_id' => $datum->ramo,
                'modalidad_id' => $modalidad->id,
                'programa_presupuestal_id' => $pp->id
            ]);
            $count++;
        }

        echo "$count relaciones de Programas Presupuestales creados." . PHP_EOL;
    }

    private function migrateActividades() {
        $data = \App\Models\Data::select(['actividad_institucional', 'actividad_institucional_descripcion', 'actividad_institucional_v2'])
            ->groupBy('actividad_institucional', 'actividad_institucional_descripcion')
            ->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando Actividad: $datum->actividad_institucional_descripcion" . PHP_EOL;
            Actividad::create([
                'actividad' => $datum->actividad_institucional,
                'name' => $datum->actividad_institucional_descripcion,
                'name_v2' => $datum->actividad_institucional_v2
            ]);
            $count++;
        }

        echo "$count Actividades creadas." . PHP_EOL;
    }

    private function migrateUnidadResponsable() {
        $data = \App\Models\Data::select(['unidad_responsable', 'unidad_responsable_descripcion', 'ur_v2'])
            ->groupBy('unidad_responsable', 'unidad_responsable_descripcion')
            ->orderBy('unidad_responsable')
            ->get();

        $count = 0;
        foreach ($data as $datum) {
            echo " Creando Unidad Responsable: $datum->unidad_responsable_descripcion" . PHP_EOL;
            UnidadResponsable::create([
                'ur' => $datum->unidad_responsable,
                'name' => $datum->unidad_responsable_descripcion,
                'ur_v2' => $datum->ur_v2
            ]);
            $count++;
        }

        echo "$count Unidades Responsables creadas." . PHP_EOL;
    }

    private function actividadesUnidadResponsableRelation() {
        $activities = Actividad::all();


        foreach ($activities as $activity){
            $data = \App\Models\Data::select(['ur_v2'])->where('actividad_institucional_v2', $activity->name_v2)->groupBy('ur_v2')->get()->pluck('ur_v2')->all();

            $unities = UnidadResponsable::select('id')
            ->whereIn('ur_v2', $data)
            ->get()
            ->pluck('id')
            ->all();

            $activity->unidad()->sync($unities);
        }


    }

    private function programaPresupuestalRamoRelation() {
        $ramos = Ramo::all();

        foreach ($ramos as $ramo) {
            $data = \App\Models\Data::select(['programa_pres_descripcion'])
                ->where('ramo', $ramo->id)
                ->groupBy('programa_pres_descripcion')
                ->get()
                ->pluck('programa_pres_descripcion')
                ->all();

            $programas = ProgramaPresupuestal::select(['id'])
                ->whereIn('name', $data)
                ->get()
                ->pluck('id')
                ->all();


            $ramo->programas()->sync($programas);

        }
    }
}
