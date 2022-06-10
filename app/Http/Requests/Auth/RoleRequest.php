<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Core\MainRequest;
use App\Traits\Models\Auth\RoleTrait;

class RoleRequest extends MainRequest
{
    use RoleTrait;
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'abilities' => 'required|array'
        ];
    }
}
