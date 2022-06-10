<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Core\ControllerAbstract;
use App\Http\Requests\Auth\RoleRequest;
use App\Http\Resources\Auth\Role\RoleAbilitiesResource;
use App\Models\Auth\Role;
use App\Services\Auth\RoleService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class RoleController extends ControllerAbstract
{
    /**
     * UserController constructor.
     * @param RoleService $roleService
     */
    public function __construct(RoleService $roleService) {
        $this->modelService = $roleService;
        $this->modelClass = Role::class;
        $this->modelResource = RoleAbilitiesResource::class;
    }

    /**
     * @param Role $role
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(Role $role) {
        return $this->get($role);
    }

    /**
     * @param RoleRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function store(RoleRequest $request) {
        return $this->create($request);
    }

    /**
     * @param Role $role
     * @param RoleRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(Role $role, RoleRequest $request) {
        return $this->edit($role, $request);
    }
}
