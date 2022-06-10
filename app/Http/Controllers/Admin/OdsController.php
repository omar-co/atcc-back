<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Core\ControllerAbstract as CoreController;
use App\Http\Requests\UserRequest;
use App\Http\Resources\OdsResource;
use App\Http\Resources\UserResource;
use App\Models\Ods;
use App\Services\UserService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class OdsController extends CoreController
{
    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->modelService = $userService;
        $this->modelClass = Ods::class;
        $this->modelResource = OdsResource::class;
    }

    /**
     * @param Ods $ods
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(Ods $ods) {
        return $this->get($ods);
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
     * @param Ods $ods
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(Ods $ods, UserRequest $request) {
        return $this->edit($ods, $request);
    }

}
