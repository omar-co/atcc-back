<?php

namespace App\Http\Controllers;

use App\Models\DownloadTracking;
use App\Models\Json;
use App\Models\User;
use App\Services\JsonService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SaveController extends Controller
{

    /**
     * @var JsonService
     */
    private $jsonService;

    public function __construct(JsonService $jsonService) {

        $this->jsonService = $jsonService;
    }
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Response
     */
    public function __invoke(Request $request): Response {

        $json = $this->jsonService->saveJson($request);

        return \response($json);

    }
}
