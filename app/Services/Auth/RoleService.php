<?php


namespace App\Services\Auth;


use App\Http\Requests\Auth\RoleRequest;
use App\Models\Auth\Role;

class RoleService {

    /**
     * @param Role $role
     * @param RoleRequest $request
     * @return Role
     */
    public function saveFromRequest(Role $role, RoleRequest $request): Role {
        $role
            ->setName($request->getName())
            ->save();

        $role->abilities()->sync($request->getAbilities());

        return $role;
    }

}