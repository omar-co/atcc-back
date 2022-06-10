<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class importCatalogos extends Command {
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hacienda:catalogos';

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
        $this->withProcess();
    }

    private function withProcess() {
        $process = new Process([
            'mysql',
            '-h',
            DB::getConfig('host'),
            '-u',
            DB::getConfig('username'),
            '-p' . DB::getConfig('password'),
            DB::getConfig('database'),
            '-e',
            "source database/sql/hacienda_catalogos.sql"
        ]);
        $process->mustRun();
    }
}
