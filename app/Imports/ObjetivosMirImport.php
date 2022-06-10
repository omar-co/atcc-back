<?php

namespace App\Imports;

use App\Models\ObjetivosMir;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ObjetivosMirImport implements ToModel, WithChunkReading, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new ObjetivosMir([
            'ciclo' => $row['ciclo'],
            'id_ramo' => $row['ramo'],
            'id_objetivo' => $row['objetivo'],
            'desc_objetivo' => $row['desc_objetivo'],
            'id_nivel' => $row['nivel'],
            //'desc_nivel' => $row['tipo_nivel'],
        ]);
    }

    public function chunkSize(): int
    {
        return 300;
    }
}
