<?php

namespace App\Http\Resources\Auth\Role;

use App\Traits\Models\Auth\RoleTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleAbilitiesResource extends JsonResource {
    use RoleTrait;

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'abilities' => $this->getAbilities()->pluck('name')->all()
        ];
    }
}
