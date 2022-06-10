<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EjeNdc extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function metas(): HasMany {
        return $this->hasMany(MetaOds::class);
    }
}
