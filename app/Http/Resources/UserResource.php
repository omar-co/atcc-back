<?php

namespace App\Http\Resources;

use App\Traits\Models\UserTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    use UserTrait;

    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'lastName' => $this->getLastName(),
            'fullName' => $this->getFullName(),
            'email' => $this->getEmail(),
            'active' => $this->isActive(),
            'ramo' => $this->getRamoId(),
            'role' => $this->getRoleName(),
            'role_id' => $this->getRoleId(),
            'ramo_id' => $this->getRamoId()
        ];
    }
}
