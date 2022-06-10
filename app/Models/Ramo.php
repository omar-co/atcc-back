<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Ramo extends Model {
    use HasFactory;

    protected $guarded = [];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted() {
        static::addGlobalScope('user', function (Builder $builder) {
            /** @var User $user */
            $user = auth()->user();
            if (!$user->isAdministrator()) {
                $builder->where('id', $user->getRamoId());
            }
        });
    }

    public function modalidades() {
        return $this->belongsToMany(Modalidad::class);
    }

    public function programas() {
        return $this->belongsToMany(ProgramaPresupuestal::class);
    }
}
