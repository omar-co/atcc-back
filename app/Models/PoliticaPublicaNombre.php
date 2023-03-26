<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class PoliticaPublicaNombre extends Model
{
    use HasFactory, HasRecursiveRelationships;

    public function politicaPublica(): BelongsTo {
        return $this->belongsTo(PoliticaPublica::class);
    }
}
