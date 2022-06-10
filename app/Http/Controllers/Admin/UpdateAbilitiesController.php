<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Core\AbilityCreatorService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateAbilitiesController extends Controller {
    /**
     * @var AbilityCreatorService
     */
    private $abilityCreatorService;

    /**
     * UpdateAbilitiesController constructor.
     * @param AbilityCreatorService $abilityCreatorService
     */
    public function __construct(AbilityCreatorService $abilityCreatorService) {

        $this->abilityCreatorService = $abilityCreatorService;
    }


    /**
     * @return Application|ResponseFactory|Response
     */
    public function __invoke() {
        return response($this->abilityCreatorService->updateAbilities());
    }
}
