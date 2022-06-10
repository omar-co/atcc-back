<?php

namespace App\Http\Controllers\Admin;

use \App\Http\Controllers\Core\ControllerAbstract as CoreController;
use App\Http\Requests\UserRequest;
use App\Http\Resources\CatalogoResource;
use App\Models\Catalogo;
use App\Services\UserService;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Response;

class CatalogoController extends CoreController
{
    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService) {
        $this->modelService = $userService;
        $this->modelClass = Catalogo::class;
        $this->modelResource = CatalogoResource::class;
    }

    /**
     * @param Catalogo$mir
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function show(Catalogo$mir) {
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
     * @param Catalogo$mir
     * @param UserRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function update(Catalogo$mir, UserRequest $request) {
        return $this->edit($mir, $request);
    }

}
