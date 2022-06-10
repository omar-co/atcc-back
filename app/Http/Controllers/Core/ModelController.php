<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Services\Core\ModelService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ModelController extends Controller {
    /**
     * @var ModelService
     */
    private $modelService;

    /**
     * ModelController constructor.
     * @param ModelService $modelService
     */
    public function __construct(ModelService $modelService) {

        $this->modelService = $modelService;
    }

    /**
     * @return Application|ResponseFactory|Response
     */
    public function __invoke() {
        return response($this->modelService->getModels());
    }
}
