<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Core\ControllerAbstract as CoreController;
use App\Http\Requests\UserRequest;
use App\Http\Resources\ObjetivosMirResource;
use App\Models\ObjetivosMir;
use App\Services\UserService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class ObjetivosMirController extends CoreController
{
    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->modelService = $userService;
        $this->modelClass = ObjetivosMir::class;
        $this->modelResource = ObjetivosMirResource::class;
    }

    /**
     * @param ObjetivosMir $mir
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(ObjetivosMir $mir) {
        return $this->get($mir);
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
     * @param ObjetivosMir $mir
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(ObjetivosMir $mir, UserRequest $request) {
        return $this->edit($mir, $request);
    }

}
