<?php

namespace App\Policies\Core;

use App\Models\Auth\Ability;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Database\Eloquent\Model;

class MainPolicy {
    use HandlesAuthorization;

    protected $police = null;

    /**
     * Perform pre-authorization checks.
     *
     * @param User $user
     * @param string $ability
     * @return bool
     */
    public function before(User $user, $ability): ?bool {
        return $user->isAdministrator() ?: null;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return bool
     */
    public function viewAny(User $user): bool {
        return $user->hasAbility($this->getPolicy() . Ability::VIEW_ANY);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function view(User $user, Model $model): bool {
        return $user->hasAbility($this->getPolicy() . Ability::VIEW);
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return bool
     */
    public function create(User $user): bool {
        return $user->hasAbility($this->getPolicy() . Ability::CREATE);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function update(User $user, Model $model): bool {
        return $user->hasAbility($this->getPolicy() . Ability::UPDATE);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @return bool
     */
    public function delete(User $user): bool {
        return $user->hasAbility($this->getPolicy() . Ability::DELETE);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function restore(User $user, Model $model): bool {
        return $user->hasAbility($this->getPolicy() . Ability::RESTORE);
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Model $model
     * @return bool
     */
    public function forceDelete(User $user, Model $model): bool {
        return $user->hasAbility($this->getPolicy() . Ability::FORCE_DELETE);
    }

    private function getPolicy() {
        return $this->police . '.';
    }
}
