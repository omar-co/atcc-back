<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Catalogo extends Model
{
    use HasFactory, FilterQueryString;

    protected $guarded = [];

    protected $filters = [
        'ciclo',
        'id_ramo',
        'id_ur',
        'gpo_funcional',
        'id_funcion',
        'id_subfuncion',
        'id_ai',
        'id_modalidad',
        'id_pp',
        'id_capitulo',
        'id_concepto',
        'id_partida_generica',
        'id_partida_especifica',
        'id_tipogasto',
        'id_ff',
        'id_entidad_federativa',
        'id_clave_cartera',
        'monto_aprobado',
    ];


    public function scopeRelacion($query, array $partida) {
        return $query
            ->whereIn('id_partida_especifica', $partida);
    }

    public function scopeReferencia($query, $filter, $modalidad) {
        $capitulos = $this->capitulos($modalidad);
        if ($filter && $capitulos) {
            return $query->whereIn('id_capitulo', $capitulos);
        }

        return $query;
    }

    private function capitulos($modalidad) {
        $capitulos = [
            'A' => [2000, 3000],
            'B' => [5000, 6000],
            'E' => [1000, 2000],
            'F' => [2000, 3000],
            'G' => [1000, 2000],
            'K' => [6000],
            'M' => [5000],
            'N' => [4000],
            'P' => [3000, 4000],
            'R' => [4000],
            'S' => [4000],
            'U' => [4000],
        ];

        if (array_key_exists($modalidad, $capitulos)) {
            return $capitulos[$modalidad];
        }

        return false;
    }

    public static function filters() {
        return [
            [
                'field' => 'ciclo',
                'label' => 'Ciclo',
                'values' => Catalogo::select(['ciclo as idx', 'ciclo as name'])->groupBy(['ciclo'])->get()
            ],
            [
                'field' => 'id_ramo',
                'label' => 'Ramo',
                'values' => Ramo::select(['id as idx', 'name'])->get()
            ],
            [
                'field' => 'id_ur',
                'label' => 'UR',
                'values' => Catalogo::select(['id_ur as idx', 'desc_ur as name'])->groupBy(['id_ur', 'desc_ur'])->get()
            ],
            [
                'field' => 'gpo_funcional',
                'label' => 'Gpo Funcional',
                'values' => Catalogo::select(['gpo_funcional as idx', 'desc_gpo_funcional as name'])->groupBy(['gpo_funcional', 'desc_gpo_funcional'])->get()
            ],
            [
                'field' => 'id_funcion',
                'label' => 'Función',
                'values' => Catalogo::select(['id_funcion as idx', 'desc_funcion as name'])->groupBy(['id_funcion', 'desc_funcion'])->get()
            ],
            [
                'field' => 'id_subfuncion',
                'label' => 'Subfunción',
                'values' => Catalogo::select(['id_subfuncion as idx', 'desc_subfuncion as name'])->groupBy(['id_subfuncion', 'desc_subfuncion'])->get()
            ],
            [
                'field' => 'id_ai',
                'label' => 'AI',
                'values' => Catalogo::select(['id_ai as idx', 'desc_ai as name'])->groupBy(['id_ai', 'desc_ai'])->get()
            ],
            [
                'field' => 'id_modalidad',
                'label' => 'Modalidad',
                'values' => Modalidad::select(['letter as idx', 'description as name'])->get()
            ],
            [
                'field' => 'id_pp',
                'label' => 'Pp',
                'values' => Catalogo::select(['id_pp as idx', 'desc_pp as name'])->groupBy(['id_pp', 'desc_pp'])->get(),
            ],
            [
                'field' => 'id_capitulo',
                'label' => 'Capítulo',
                'values' => Catalogo::select(['id_capitulo as idx', 'id_capitulo as name'])->groupBy(['id_capitulo'])->get(),
            ],
            [
                'field' => 'id_concepto',
                'label' => 'Concepto',
                'values' => Catalogo::select(['id_concepto as idx', 'id_concepto as name'])->groupBy(['id_concepto'])->get(),
            ],
            [
                'field' => 'id_partida_generica',
                'label' => 'Partida Genérica',
                'values' => Catalogo::select(['id_partida_generica as idx', 'desc_partida_generica as name'])->groupBy(['id_partida_generica', 'desc_partida_generica'])->get(),
            ],
            [
                'field' => 'id_partida_especifica',
                'label' => 'Partida Específica',
                'values' => Catalogo::select(['id_partida_especifica as idx', 'desc_partida_especifica as name'])->groupBy(['id_partida_especifica', 'desc_partida_especifica'])->get(),
            ],
            [
                'field' => 'id_tipogasto',
                'label' => 'Tipo Gasto',
                'values' => Catalogo::select(['id_tipogasto as idx', 'desc_tipogasto as name'])->groupBy(['id_tipogasto', 'desc_tipogasto'])->get(),
            ],
            [
                'field' => 'id_ff',
                'label' => 'Ff',
                'values' => Catalogo::select(['id_ff as idx', 'desc_ff as name'])->groupBy(['id_ff', 'desc_ff'])->get(),
            ],
            [
                'field' => 'id_entidad_federativa',
                'label' => 'Entidad Federativa',
                'values' => Catalogo::select(['id_entidad_federativa as idx', 'entidad_federativa as name'])->groupBy(['id_entidad_federativa', 'entidad_federativa'])->get(),
            ],
            [
                'field' => 'id_clave_cartera',
                'label' => 'Clave Cartera',
                'values' => Catalogo::select(['id_clave_cartera as idx', 'id_clave_cartera as name'])->groupBy(['id_clave_cartera'])->get(),
            ],
            [
                'field' => 'monto_aprobado',
                'label' => 'Monto Aprobado',
                'values' => Catalogo::select(['monto_aprobado as idx', 'monto_aprobado as name'])->groupBy(['monto_aprobado'])->get(),
            ],

        ];
    }
}
