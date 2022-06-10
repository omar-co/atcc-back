<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadResponsable extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function actividad() {
        return $this->belongsToMany(Actividad::class);
    }
}
