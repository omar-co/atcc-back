<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Core\MainRequest;

class PoliticaPublicaRequest extends MainRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'active' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',

        ];
    }
}
