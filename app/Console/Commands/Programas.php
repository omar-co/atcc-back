<?php

namespace App\Console\Commands;

use App\Models\Ramo;
use Illuminate\Console\Command;

class Programas extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hacienda:programas';

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
        $data = \App\Models\Data::select(['ramo', 'programa_pres', 'programa_pres_descripcion', 'modalidad'])
            ->groupBy('ramo', 'programa_pres', 'programa_pres_descripcion', 'modalidad')
            ->get();

        $result = [];
        foreach ($data as $datum) {
            $result["$datum->ramo-$datum->modalidad"][ $datum->programa_pres] =
                "'$datum->programa_pres_descripcion'";
        }

        foreach ($result as $key => $item) {

            $final = [];
            foreach ($item as $pp => $value) {
                $final[] = "{id: $pp, label: $value}";
            }


            $values = implode(',', $final);
            echo "{id: '$key', values: [$values]}," . PHP_EOL;
        }

    }
}
