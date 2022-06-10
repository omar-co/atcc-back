<?php

namespace App\Http\Resources\Auth\Abilities;

use App\Traits\Models\Auth\AbilityTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AbilitiesResource extends JsonResource
{
    use AbilityTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array {
        return [
            'name' =>  $this->getName()
        ];
    }
}
