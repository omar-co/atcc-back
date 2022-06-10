<?php

namespace App\Http\Resources;

use App\Traits\Models\UserTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResourceCollection extends ResourceCollection {
    use UserTrait;

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
