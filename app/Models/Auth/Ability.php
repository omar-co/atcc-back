<?php

namespace App\Models\Auth;

use App\Traits\Models\Auth\AbilityTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * @method static insert(array $prepared)
 */
class Ability extends Model
{
    use HasFactory, AbilityTrait;

    const VIEW_ANY = 'viewAny';
    const VIEW = 'view';
    const CREATE = 'create';
    const UPDATE = 'update';
    const DELETE = 'delete';
    const RESTORE = 'restore';
    const FORCE_DELETE = 'forceDelete';

    protected $guarded = ['id'];

    /**
     * @return BelongsToMany
     */
    public function roles(): BelongsToMany {
        return $this->belongsToMany(Role::class);
    }

    /**
     * @return string[]
     */
    public static function getAbilities(): array {

        return [
          self::VIEW_ANY,
          self::VIEW,
          self::CREATE,
          self::UPDATE,
          self::DELETE,
          self::RESTORE,
          self::FORCE_DELETE,
        ];
    }
}
