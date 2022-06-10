<?php

namespace App\Policies;

use App\Models\User;
use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy extends MainPolicy
{
    use HandlesAuthorization;

    protected $police = 'role';
}
