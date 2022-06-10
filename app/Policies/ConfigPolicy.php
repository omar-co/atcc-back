<?php

namespace App\Policies;


use App\Models\Auth\Ability;
use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConfigPolicy extends MainPolicy {
    use HandlesAuthorization;

    protected $police = 'config';

}
