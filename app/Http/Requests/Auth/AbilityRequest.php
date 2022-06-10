<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Core\MainRequest;
use App\Traits\Models\Auth\AbilityTrait;

class AbilityRequest extends MainRequest
{

    use AbilityTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }
}
