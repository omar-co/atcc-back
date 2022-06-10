<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static where(string $string, int $getId)
 * @property int id
 */
class DownloadTracking extends Model
{

    use HasFactory;

    protected $guarded = [];

    /**
     * @return HasMany
     */
    public function jsons(): HasMany {
        return $this->hasMany(Json::class);
    }
}
