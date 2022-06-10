<?php

namespace App\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class GenerateService
{
    /**
     * @var JsonService
     */
    private $jsonService;
    /**
     * @var ExportService
     */
    private $exportService;

    public function __construct(JsonService $jsonService, ExportService $exportService)
    {
        $this->jsonService = $jsonService;
        $this->exportService = $exportService;
    }


    /**
     * @param Request $request
     * @return BinaryFileResponse
     */
    public function export(Request $request): BinaryFileResponse
    {
        $this->jsonService->saveJson($request);

        return $this->exportService->export();

    }
}
