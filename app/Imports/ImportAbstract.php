<?php

namespace App\Imports;

use App\Models\Config;

class ImportAbstract {

    private $ciclo;

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
