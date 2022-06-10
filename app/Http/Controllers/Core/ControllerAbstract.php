<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Requests\Core\MainRequest;
use App\Models\Auth\Ability;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Mehradsadeghi\FilterQueryString\FilterQueryString;

abstract class ControllerAbstract extends BaseController {
    protected $modelService;

    protected $modelClass;

    protected $modelResource;


    /**
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function index() {
        $this->authorize(Ability::VIEW_ANY, $this->modelClass);
        $class = $this->modelResource . 'Collection';

        $usingTrait = in_array(
            FilterQueryString::class,
            array_keys((new \ReflectionClass($this->modelClass))->getTraits())
        );

        if ($usingTrait) {
            return new $class($this->modelClass::filter()->orderBy('id', 'desc')->paginate(10)->withQueryString());
        }

        return
             new $class($this->modelClass::orderBy('id', 'desc')->paginate(10))
        ;
    }

    /**
     * @param int $id
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    public function destroy(int $id) {
        $this->authorize(Ability::DELETE, $this->modelClass);

        $this->modelClass::destroy($id);
        return response(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @param Model $model
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    protected function get(Model $model) {
        $this->authorize(Ability::VIEW, $model);

        return response(
            new $this->modelResource($model)
        );
    }

    /**
     * @param mixed $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    protected function create(MainRequest $request) {
        $this->authorize(Ability::CREATE, $this->modelClass);

        $model = new $this->modelClass();
        $model = $this->modelService->saveFromRequest($model, $request);

        return response(
            new $this->modelResource($model)
        );
    }

    /**
     * @param Model $model
     * @param MainRequest $request
     * @return Application|ResponseFactory|Response
     * @throws AuthorizationException
     */
    protected function edit(Model $model, MainRequest $request) {
        $this->authorize(Ability::UPDATE, $model);

        $model = $this->modelService->saveFromRequest($model, $request);

        return response(
            new $this->modelResource($model)
        );
    }
}
