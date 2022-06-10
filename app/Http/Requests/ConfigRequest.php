<?php

namespace App\Http\Requests;

use App\Http\Requests\Core\MainRequest;

class ConfigRequest extends MainRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'ejercicio' => 'required',
            'corte' => 'required'
        ];
    }
}
