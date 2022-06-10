<?php

namespace App\Services;

use App\Exports\JsonExport;
use App\Models\Catalogo;
use App\Models\Json;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ExportService {

    const PROGRAMA_TRANSVERSAL_ID = 10;

    private $changed;
    private $ordered;
    private $json;
    private $data;
    /**
     * @var JsonService
     */
    private $jsonService;

    public function __construct(JsonService $jsonService) {

        $this->jsonService = $jsonService;
        $this->changed = collect([]);
    }

    public function export(): BinaryFileResponse
    {
        $this->prepareData();

        return $this->generateCSV();

    }

    private function prepareProgramas() {

        $jsons = $this->getJsons();

        $programs = [];
        foreach ($jsons as $json) {
            $values = json_decode($json->content);
            if (property_exists($values, 'programasSeleccionados') && $values->programasSeleccionados) {
                $programs = array_merge($values->programasSeleccionados, $programs);
                if (property_exists($values, 'changed') && $values->changed) {
                    $this->changed = $this->changed->merge($values->changed);
                }
            }
        }

        return $programs;
    }

    private function getJsons() {
        /** @var User $user */
        $user = auth()->user();

        if ($user->isAdministrator()) {
            $jsons = Json::all();
        } else {
            $dt = $this->jsonService->getDT();
            $jsons = $dt->jsons;
        }

        return $jsons;
    }

    private function closeDT() {
        $dt = $this->jsonService->getDT();

        $dt->active = false;
        $dt->save();
    }

    private function prepareData() {
        $catalog = Catalogo::select(['id', 'id_ramo', 'id_ur', 'gpo_funcional', 'id_funcion', 'id_subfuncion',
            'id_ai', 'id_modalidad', 'id_pp', 'id_partida_especifica', 'id_tipogasto', 'id_ff',
            'id_entidad_federativa', 'monto_aprobado'])
            ->whereIn('id', $this->prepareProgramas())
            ->get();

        $result = [];
        foreach ($catalog as $item){
            $result[] = [
                self::PROGRAMA_TRANSVERSAL_ID,
                $item->id_ramo,
                $item->id_ur,
                $item->id_ur,
                $item->gpo_funcional,
                $item->id_funcion,
                $item->id_subfuncion,
                0,
                $item->id_ai,
                $item->id_modalidad,
                $item->id_pp,
                $item->id_partida_especifica,
                $item->id_tipogasto,
                $item->id_ff,
                0,0,0,0,0,'*','',1,
                $this->getAmountById($item->id),
                ''

            ];
        }

        $this->data = $result;

    }

    private function generateCSV() {
        return Excel::download(new JsonExport($this->data), 'Transversales_Archivo.csv', \Maatwebsite\Excel\Excel::CSV);
    }

    private function getAmountById(int $id) {
        if (isset($this->orderChanged()[$id])) {
            return $this->orderChanged()[$id];
        }

        return 0;
    }

    private function orderChanged() {
        if (!$this->ordered) {
            $this->ordered = $this->changed->pluck('value', 'id')->all();
        }

        return $this->ordered;
    }

}
