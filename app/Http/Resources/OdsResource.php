<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OdsResource extends JsonResource
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
            'id_ramo' => $this->id_ramo,
            'desc_ramo' => $this->desc_ramo,
            'id_modalidad' => $this->id_modalidad,
            'desc_modalidad' => $this->desc_modalidad,
            'id_pp' => $this->id_pp,
            'desc_pp' => $this->desc_pp,
            'id_ods' => $this->id_ods,
            'desc_ods' => $this->desc_ods,
            'id_metaods' => $this->id_metaods,
            'desc_metaods' => $this->desc_metaods,
            'id_sm1' => $this->id_sm1,
            'desc_sm1' => $this->desc_sm1,
            'id_sm2' => $this->id_sm2,
            'desc_sm2' => $this->desc_sm2,
            'id_sm3' => $this->id_sm3,
            'desc_sm3' => $this->desc_sm3,
            'id_sm4' => $this->id_sm4,
            'desc_sm4' => $this->desc_sm4,
            'id_sm5' => $this->id_sm5,
            'desc_sm5' => $this->desc_sm5,
            'id_sm6' => $this->id_sm6,
            'desc_sm6' => $this->desc_sm6,
            'id_tcontribucion' => $this->id_tcontribucion,
            'desc_tcontribucion' => $this->desc_tcontribucion,

        ];
    }
}
