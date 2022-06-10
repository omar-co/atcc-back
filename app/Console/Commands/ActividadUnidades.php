<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ActividadUnidades extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hacienda:actividades';

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
        $data = \App\Models\Data::select(['pp_id', 'actividad_institucional', 'actividad_institucional_v2', 'ur_v2', 'unidad_responsable'])
            ->where('ramo', 1)
            ->orderBy('pp_id')
            ->get();

        $result = [];
        foreach ($data as $datum) {
            $result[$datum->pp_id][$datum->actividad_institucional] = [
                'id' => $datum->actividad_institucional,
                'name' => $datum->actividad_institucional_v2,
                'values' => $datum->ur_v2
            ];
        }

        $demo = [
            '01-R001' => [
                'id' => 4,
                'name' => '4 - Llevar a cabo el proceso Legislativo',
                'values' => [
                    '101 - Auditoría Superior de la Federación',
                    '100 - H. Cámara de Diputados'
                ]
            ]
        ];

        var_export($result);
    }
}
