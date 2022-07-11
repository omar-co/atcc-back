<?php

namespace App\Imports;

use App\Models\ObjetivosMir;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ObjetivosMirImport extends ImportAbstract implements ToModel, WithChunkReading, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new ObjetivosMir([
            'ciclo' => $this->ciclo($row),
            'id_ramo' => $row['id_ramo'],
            'id_objetivo' => $row['id_objetivo'],
            'desc_objetivo' => $row['desc_objetivo'],
            'id_nivel' => $row['id_nivel'],
            'desc_nivel' => $row['desc_nivel'],
        ]);
    }

    public function chunkSize(): int
    {
        return 300;
    }
}
