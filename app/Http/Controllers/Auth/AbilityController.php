<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Core\ControllerAbstract;
use App\Http\Requests\Auth\AbilityRequest;
use App\Http\Resources\Auth\Abilities\AbilitiesResource;
use App\Models\Auth\Ability;
use App\Services\Auth\AbilityService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

/**
 * Class AbilityController
 * @package App\Http\Controllers\Auth
 */
class AbilityController extends ControllerAbstract
{
    /**
     * AbilityController constructor.
     * @param AbilityService $abilityService
     */
    public function __construct(AbilityService $abilityService) {
        $this->modelService = $abilityService;
        $this->modelClass = Ability::class;
        $this->modelResource = AbilitiesResource::class;
    }

    /**
     * @param Ability $ability
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(Ability $ability) {
        return $this->get($ability);
    }

    /**
     * @param AbilityRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function store(AbilityRequest $request) {
        return $this->create($request);
    }

    /**
     * @param Ability $ability
     * @param AbilityRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(Ability $ability, AbilityRequest $request) {
        return $this->edit($ability, $request);
    }
}
