<?php

namespace App\Imports;

use App\Models\Ods;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class OdsImport extends ImportAbstract implements ToModel, WithChunkReading, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return Model|null
    */
    public function model(array $row)
    {
        return new Ods([
            'id_ramo' => $row['ramo'],
            'desc_ramo' => $row['ramodescripcion'],
            'id_modalidad' => $row['modalidad'],
            'ciclo' => $this->ciclo($row),
            'desc_modalidad' => $row['modalidaddescripcion'],
            'id_pp' => $row['programa_presupuestario'],
            'desc_pp' => $row['programa_presupuestariodescripcion'],
            'id_ods' => $row['objetivo_de_desarrollo_sostenible'],
            'desc_ods' => $row['objetivo_de_desarrollo_sostenibledescripcion'],
            'id_metaods' => $row['meta_del_objetivo_de_desarrollo_sostenible'],
            'desc_metaods' => $row['meta_del_objetivo_de_desarrollo_sostenibledescripcion'],
            'id_sm1' => $row['submeta_1_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm1' => $row['submeta_1_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_sm2' => $row['submeta_2_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm2' => $row['submeta_2_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_sm3' => $row['submeta_3_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm3' => $row['submeta_3_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_sm4' => $row['submeta_4_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm4' => $row['submeta_4_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_sm5' => $row['submeta_5_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm5' => $row['submeta_5_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_sm6' => $row['submeta_6_de_la_meta_de_desarrollo_sostenible'],
            'desc_sm6' => $row['submeta_6_de_la_meta_de_desarrollo_sostenibledescripcion'],
            'id_tcontribucion' => $row['tipo_de_contribucion'],
            'desc_tcontribucion' => $row['tipo_de_contribuciondescripcion'],

        ]);
    }

    public function chunkSize(): int
    {
        return 300;
    }
}
