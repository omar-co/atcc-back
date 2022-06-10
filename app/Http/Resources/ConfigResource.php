<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConfigResource extends JsonResource
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
            'path' => $this->path,
            'key' => $this->key,
            'value' => $this->value,
            'type' => $this->type,
            'label' => $this->label,
            'user' => $this->user->getFullName(),
        ];
    }
}
