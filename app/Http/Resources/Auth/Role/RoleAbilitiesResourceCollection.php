<?php

namespace App\Http\Resources\Auth\Role;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class RoleAbilitiesResourceCollection extends ResourceCollection {

    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array {
        return ['data' => $this->collection];
    }
}
