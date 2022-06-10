<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ramos() {
        return $this->belongsToMany(Ramo::class);
    }
}
