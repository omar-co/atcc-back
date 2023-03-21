<?php

namespace App\Policies;

use App\Policies\Core\MainPolicy;
use Illuminate\Auth\Access\HandlesAuthorization;

class PoliticaPublica extends MainPolicy
{
    use HandlesAuthorization;
    protected $police = 'politicaPublica';
}
