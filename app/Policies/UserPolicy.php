<?php

namespace App\Policies;


use App\Models\Auth\Ability;
use App\Models\User;
use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy extends MainPolicy {
    use HandlesAuthorization;

    protected $police = 'user';

}
