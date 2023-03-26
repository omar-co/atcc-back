<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class PoliticaPublicaValor extends Model
{
    use HasFactory, HasRecursiveRelationships;

    public function politicaPublica(): BelongsTo {
        return $this->belongsTo(PoliticaPublica::class);
    }
}
