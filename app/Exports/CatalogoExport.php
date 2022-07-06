<?php

namespace App\Exports;

use App\Models\Catalogo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CatalogoExport implements FromCollection, WithHeadings, ShouldQueue {
    /**
     * @return Collection
     */
    public function collection(): Collection {
        return Catalogo::select('*')->limit(5000)->get();
    }

    public function query() {
        return Catalogo::select('*')->limit(1);
    }

    public function headings(): array {
        return [
            'id',
            'ciclo',
            'ramo',
            'ramo_descripcion',
            'unidad',
            'unidad_descripcion',
            'grupo_funcional',
            'grupo_fun_descripcion',
            'funcion',
            'funcionl_descripcion',
            'subfuncion',
            'subfuncionl_descripcion',
            'actividad_inst',
            'actividad_inst_descripcion',
            'modalidad',
            'modalidad_descripcion',
            'progr_pres',
            'progr_pres_descripcion',
            'capitulo',
            'capitulo_descripcion',
            'concepto',
            'concepto_descripcion',
            'partida_generica',
            'partida_generica_descripcion',
            'partida_especifica',
            'partida_descripcion',
            'tipo_gasto',
            'tipo_gasto_descripcion',
            'fuente_finan',
            'fuente_finan_descripcion',
            'entidad_federativa',
            'entidad_fed_descripcion',
            'clave_cartera',
            'monto_aprobado'
        ];
    }
}
