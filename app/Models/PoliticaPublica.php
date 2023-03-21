<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PoliticaPublica extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'active',
        'user_id',
        'start_date',
        'end_date',
    ];

    public function politicaPublicaNombre(): HasMany {
       return $this->hasMany(PoliticaPublicaNombre::class);
    }

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
