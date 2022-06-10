<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Core\ControllerAbstract as CoreController;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class UserController extends CoreController
{
    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->modelService = $userService;
        $this->modelClass = User::class;
        $this->modelResource = UserResource::class;
    }

    /**
     * @param User $user
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(User $user) {
        return $this->get($user);
    }

    /**
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function store(UserRequest $request) {
        return $this->create($request);
    }

    /**
     * @param User $user
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(User $user, UserRequest $request) {
        return $this->edit($user, $request);
    }

}
