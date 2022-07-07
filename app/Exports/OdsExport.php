<?php

namespace App\Exports;

use App\Models\Ods;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OdsExport implements FromQuery, WithHeadings, withCustomCsvSettings {

    use Exportable;

    /**
     * @return Collection
     */
    public function collection(): Collection {
        return Ods::all();
    }

    public function query() {
        return Ods::where('id', '>=', 1);
    }

    public function headings(): array {
        return [
            'ramo',
            'ramodescripcion',
            'modalidad',
            'modalidaddescripcion',
            'programa_presupuestario',
            'programa_presupuestariodescripcion',
            'objetivo_de_desarrollo_sostenible',
            'objetivo_de_desarrollo_sostenibledescripcion',
            'meta_del_objetivo_de_desarrollo_sostenible',
            'meta_del_objetivo_de_desarrollo_sostenibledescripcion',
            'submeta_1_de_la_meta_de_desarrollo_sostenible',
            'submeta_1_de_la_meta_de_desarrollo_sostenibledescripcion',
            'submeta_2_de_la_meta_de_desarrollo_sostenible',
            'submeta_2_de_la_meta_de_desarrollo_sostenibledescripcion',
            'submeta_3_de_la_meta_de_desarrollo_sostenible',
            'submeta_3_de_la_meta_de_desarrollo_sostenibledescripcion',
            'submeta_4_de_la_meta_de_desarrollo_sostenible',
            'submeta_4_de_la_meta_de_desarrollo_sostenibledescripcion',
            'submeta_5_de_la_meta_de_desarrollo_sostenible',
            'submeta_5_de_la_meta_de_desarrollo_sostenibledescripcion',
            'submeta_6_de_la_meta_de_desarrollo_sostenible',
            'submeta_6_de_la_meta_de_desarrollo_sostenibledescripcion',
            'tipo_de_contribucion',
            'tipo_de_contribuciondescripcion',
        ];
    }

    public function getCsvSettings(): array {
        return [
            'output_encoding' => 'ISO-8859-1'
        ];
    }
}
