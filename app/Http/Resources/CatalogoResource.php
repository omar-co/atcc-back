<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CatalogoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'ciclo' => $this->ciclo,
            'id_ramo' => $this->id_ramo,
            'desc_ramo' => $this->desc_ramo,
            'id_ur' => $this->id_ur,
            'desc_ur' => $this->desc_ur,
            'gpo_funcional' => $this->gpo_funcional,
            'desc_gpo_funcional' => $this->desc_gpo_funcional,
            'id_funcion' => $this->id_funcion,
            'desc_funcion' => $this->desc_funcion,
            'id_subfuncion' => $this->id_subfuncion,
            'desc_subfuncion' => $this->desc_subfuncion,
            'id_ai' => $this->id_ai,
            'desc_ai' => $this->desc_ai,
            'id_modalidad' => $this->id_modalidad,
            'desc_modalidad' => $this->desc_modalidad,
            'id_pp' => $this->id_pp,
            'desc_pp' => $this->desc_pp,
            'id_capitulo' => $this->id_capitulo,
            'desc_capitulo' => $this->desc_capitulo,
            'id_concepto' => $this->id_concepto,
            'desc_concepto' => $this->desc_concepto,
            'id_partida_generica' => $this->id_partida_generica,
            'desc_partida_generica' => $this->desc_partida_generica,
            'id_partida_especifica' => $this->id_partida_especifica,
            'desc_partida_especifica' => $this->desc_partida_especifica,
            'id_tipogasto' => $this->id_tipogasto,
            'desc_tipogasto' => $this->desc_tipogasto,
            'id_ff' => $this->id_ff,
            'desc_ff' => $this->desc_ff,
            'id_entidad_federativa' => $this->id_entidad_federativa,
            'entidad_federativa' => $this->entidad_federativa,
            'id_clave_cartera' => $this->id_clave_cartera,
            'monto_aprobado' => $this->monto_aprobado,
        ];
    }
}
