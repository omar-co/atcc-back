<?php

namespace App\Imports;

use App\Models\Catalogo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class CatalogoImport extends ImportAbstract implements ToModel, WithChunkReading, WithHeadingRow, withCustomCsvSettings, WithBatchInserts, WithProgressBar
{
    use Importable;
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Catalogo([
            'ciclo' => $this->ciclo($row),
            'id_ramo' => $row[Str::slug('RAMO','_')],
            'desc_ramo' => $row[Str::slug('RAMO_DESCRIPCION','_')],
            'id_ur' => $row[Str::slug('UNIDAD','_')],
            'desc_ur' => $row[Str::slug('UNIDAD_DESCRIPCION','_')],
            'gpo_funcional' => $row[Str::slug('GRUPO_FUNCIONAL','_')],
            'desc_gpo_funcional' => $row[Str::slug('GRUPO_FUN_DESCRIPCION','_')],
            'id_funcion' => $row[Str::slug('FUNCION','_')],
            'desc_funcion' => $row[Str::slug('FUNCIONL_DESCRIPCION','_')],
            'id_subfuncion' => $row[Str::slug('SUBFUNCION','_')],
            'desc_subfuncion' => $row[Str::slug('SUBFUNCIONL_DESCRIPCION','_')],
            'id_ai' => $row[Str::slug('ACTIVIDAD_INST','_')],
            'desc_ai' => $row[Str::slug('ACTIVIDAD_INST_DESCRIPCION','_')],
            'id_modalidad' => $row[Str::slug('MODALIDAD','_')],
            'desc_modalidad' => $row[Str::slug('MODALIDAD_DESCRIPCION','_')],
            'id_pp' => $row[Str::slug('PROGR_PRES','_')],
            'desc_pp' => $row[Str::slug('PROGR_PRES_DESCRIPCION','_')],
            'id_capitulo' => $row[Str::slug('capitulo','_')],
            'desc_capitulo' => $row[Str::slug('capitulo_descripcion','_')],
            'id_concepto' => $row[Str::slug('concepto','_')],
            'desc_concepto' => $row[Str::slug('concepto_descripcion','_')],
            'id_partida_generica' => $row[Str::slug('partida_generica','_')],
            'desc_partida_generica' => $row[Str::slug('partida_generica_descripcion','_')],
            'id_partida_especifica' => $row[Str::slug('PARTIDA_ESPECIFICA','_')],
            'desc_partida_especifica' => $row[Str::slug('PARTIDA_DESCRIPCION','_')],
            'id_tipogasto' => $row[Str::slug('TIPO_GASTO','_')],
            'desc_tipogasto' => $row[Str::slug('TIPO_GASTO_DESCRIPCION','_')],
            'id_ff' => $row[Str::slug('FUENTE_FINAN','_')],
            'desc_ff' => $row[Str::slug('FUENTE_FINAN_DESCRIPCION','_')],
            'id_entidad_federativa' => $row[Str::slug('ENTIDAD_FEDERATIVA','_')],
            'entidad_federativa' => $row[Str::slug('ENTIDAD_FED_DESCRIPCION','_')],
            'id_clave_cartera' => $row[Str::slug('CLAVE_CARTERA','_')],
            'monto_aprobado' => $row[Str::slug('monto_aprobado','_')],


        ]);
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function getCsvSettings(): array {
        return [
            'output_encoding' => 'ISO-8859-1'
        ];
    }

    public function batchSize(): int {
        return 500;
    }
}
