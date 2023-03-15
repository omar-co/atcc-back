<?php

namespace App\Models;

use App\Models\Auth\Role;
use App\Traits\Models\UserTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Mehradsadeghi\FilterQueryString\FilterQueryString;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject {
    use HasFactory, Notifiable, UserTrait, FilterQueryString;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'active',
        'role_id',
        'password',
        'ramo_id',
        'role_id'
    ];

    protected $filters = [
        'ramo_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier() {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims(): array {
        return [];
    }

    /**
     * @return BelongsTo
     */
    public function role(): BelongsTo {
        return $this->belongsTo(Role::class);
    }

    /**
     * @return BelongsTo
     */
    public function ramo(): BelongsTo {
        return $this->belongsTo(Ramo::class);
    }


    /**
     * @return array
     */
    public function getAbilitiesAttribute(): array {
        if (!$this->dbAbilities) {
            $this->dbAbilities = $this->getRole()->getAbilities()->pluck('name')->all();
        }

        return $this->dbAbilities;
    }

    /**
     * @param $ability
     * @return bool
     */
    public function hasAbility($ability): bool {
        return in_array($ability, $this->getAbilities(), true);
    }

    public static function filters() {
        return [
            [
                'field' => 'ramo_id',
                'label' => 'Ramo',
                'type' => 'list',
                'values' => Ramo::select(['id as idx', 'name'])->get()
            ],

        ];
    }
}
