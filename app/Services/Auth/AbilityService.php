<?php


namespace App\Services\Auth;


use App\Http\Requests\Auth\AbilityRequest;
use App\Models\Auth\Ability;

class AbilityService {

    /**
     * @param Ability $ability
     * @param AbilityRequest $request
     * @return Ability
     */
    public function saveFromRequest(Ability $ability, AbilityRequest $request): Ability {
        $ability
            ->setName($request->getName())
            ->save();

        return $ability;
    }

}