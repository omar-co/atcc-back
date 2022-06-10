<?php

namespace App\Http\Requests;

use App\Http\Requests\Core\MainRequest;
use App\Traits\Models\UserTrait;

class UserRequest extends MainRequest
{
    use UserTrait;

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'active' => 'required|boolean',
            'role_id' => 'required|integer',
        ];
    }
}
