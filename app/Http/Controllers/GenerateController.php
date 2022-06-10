<?php

namespace App\Http\Controllers;

use App\Services\GenerateService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class GenerateController extends Controller {
    /**
     * @var GenerateService
     */
    private $generateService;

    public function __construct(GenerateService $exportService) {

        $this->generateService = $exportService;
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function __invoke(Request $request): BinaryFileResponse {
        return $this->generateService->export($request);
    }
}
