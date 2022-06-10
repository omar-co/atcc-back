<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ObjetivosMirResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'ciclo' => $this->ciclo,
            'id_ramo' => $this->id_ramo,
            'id_objetivo' => $this->id_objetivo,
            'desc_objetivo' => $this->desc_objetivo,
            'id_nivel' => $this->id_nivel,

        ];
    }
}
