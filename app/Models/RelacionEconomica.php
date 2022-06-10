<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelacionEconomica extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeRelacion($query, int $ramo, int $fuente, int $tipo) {
        return $query->where('ramo', $ramo)
            ->where('fuente', $fuente)
            ->where('tipo_gasto', $tipo);
    }
}
