<?php

namespace App\Policies;


use App\Models\Auth\Ability;
use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class OdsPolicy extends MainPolicy {
    use HandlesAuthorization;

    protected $police = 'ods';

}
