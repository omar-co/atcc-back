<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PpId extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ramo() {
        return $this->belongsTo(Ramo::class);
    }

    public function modalidad() {
        return $this->belongsTo(Modalidad::class);
    }

    public function programaPresupuestal() {
        return $this->belongsTo(ProgramaPresupuestal::class);
    }
}
