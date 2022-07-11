<?php

namespace App\Models;

use App\Models\Scopes\CicloScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class ObjetivosMir extends Model
{
    use HasFactory, FilterQueryString;

    protected $guarded = [];

    protected $filters = [
        'ciclo',
        'id_ramo',
        'id_objetivo',
        'id_nivel'
    ];


    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new CicloScope());
    }


    /**
     * @param $query
     * @param int $ramo
     * @param string $unidad
     * @return mixed
     */
    public function scopeNivelByRamoAndUnidad($query, int $ramo, string $unidad) {
        return $query
            ->where('id_ramo', $ramo)
            ->where('id_ur', $unidad)
            ;
    }

    public static function filters() {
        return [
            [
                'field' => 'ciclo',
                'label' => 'Ciclo',
                'values' => ObjetivosMir::select(['ciclo as idx', 'ciclo as name'])->groupBy(['ciclo'])->get()
            ],
            [
                'field' => 'id_ramo',
                'label' => 'Ramo',
                'values' => Ramo::select(['id as idx', 'name'])->get()
            ],
            [
                'field' => 'id_objetivo',
                'label' => 'Objetivo',
                'values' => ObjetivosMir::select(['id_objetivo as idx', 'desc_objetivo as name'])->groupBy(['id_objetivo', 'desc_objetivo'])->get()
            ],
            [
                'field' => 'id_nivel',
                'label' => 'Nivel',
                'values' => ObjetivosMir::select(['id_nivel as idx', 'id_nivel as name'])->groupBy(['id_nivel'])->get(),
            ],
        ];
    }
}
