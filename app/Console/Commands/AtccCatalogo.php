<?php

namespace App\Console\Commands;

use App\Imports\CatalogoImport;
use App\Models\File;
use Illuminate\Console\Command;
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
}
