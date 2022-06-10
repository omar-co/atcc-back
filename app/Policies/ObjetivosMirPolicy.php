<?php

namespace App\Policies;


use App\Models\Auth\Ability;
use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class ObjetivosMirPolicy extends MainPolicy {
    use HandlesAuthorization;

    protected $police = 'objetivosmir';

}
