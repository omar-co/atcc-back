<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

class Ods extends Model
{
    use HasFactory, FilterQueryString;

    protected $guarded = [];

    protected $filters = [
        'id_ramo',
        'id_modalidad',
        'id_pp',
        'id_ods',
        'id_metaods'
    ];

    public static function filters() {
        return [
            [
                'field' => 'id_ramo',
                'label' => 'Ramo',
                'values' => Ramo::select(['id as idx', 'name'])->get()
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
                'field' => 'id_ods',
                'label' => 'ODS',
                'values' => Ods::select(['id_ods as idx', 'desc_ods as name'])->groupBy(['id_ods', 'desc_ods'])->get(),
            ],
            [
                'field' => 'id_metaods',
                'label' => 'Meta ODS',
                'values' => Ods::select(['id_metaods as idx', 'desc_metaods as name'])->groupBy(['id_metaods', 'desc_metaods'])->get(),
            ],

        ];
    }
}
