<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticaPublicaNombre extends Model
{
    use HasFactory;

    public function politicaPublica(): BelongsTo {
        return $this->belongsTo(PoliticaPublica::class);
    }

    public function politicaPublicaValores(): HasMany {
        return $this->hasMany(PoliticaPublicaValores::class);
    }
}
