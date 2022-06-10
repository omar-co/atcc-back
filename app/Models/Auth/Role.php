<?php

namespace App\Models\Auth;

use App\Models\User;
use App\Traits\Models\Auth\RoleTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Role
 * @package App\Models\Auth
 *
 * @method static create(array $array)
 */
class Role extends Model
{
    use HasFactory, RoleTrait;

    const ROLE_ADMIN = 'admin';
    const ROLE_USER = 'user';

    protected $guarded = ['id'];

    /**
     * @return HasMany
     */
    public function users(): HasMany {
        return $this->hasMany(User::class);
    }

    /**
     * @return BelongsToMany
     */
    public function abilities(): BelongsToMany {
        return $this->belongsToMany(Ability::class);
    }
}
