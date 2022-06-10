<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ExportService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportAllController extends Controller {
    /**
     * @var ExportService }
     */
    private $exportService;

    public function __construct(ExportService $exportService) {

        $this->exportService = $exportService;
    }

    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function __invoke(Request $request): BinaryFileResponse {
        return $this->exportService->export();
    }
}
