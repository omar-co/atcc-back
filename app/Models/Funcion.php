<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Funcion extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * @return BelongsTo
     */
    public function finalidad(): BelongsTo {
        return $this->belongsTo(Finalidad::class);
    }

    /**
     * @return HasMany
     */
    public function subfuncion(): HasMany {
        return $this->hasMany(Subfuncion::class);
    }
}
