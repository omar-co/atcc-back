<?php

namespace App\Exports;

use App\Models\ObjetivosMir;
use App\Models\Ods;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MirExport implements FromQuery, WithHeadings {

    use Exportable;

    /**
     * @return Collection
     */
    public function collection(): Collection {
        return ObjetivosMir::select(['ciclo', 'id_ramo', 'id_objetivo', 'desc_objetivo', 'id_nivel'])->get();
    }

    public function query() {
        return ObjetivosMir::select(['ciclo', 'id_ramo', 'id_objetivo', 'desc_objetivo', 'id_nivel']);
    }

    public function headings(): array {
        return [
            'ciclo',
            'ramo',
            'objetivo',
            'desc_objetivo',
            'nivel'
        ];
    }
}
