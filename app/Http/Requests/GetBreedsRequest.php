<?php

namespace App\Http\Requests;

use App\Http\Request;

/**
 * Class UserRequest
 *
 * @package App\Http\Requests
 *
 * @property string $name
 * @property string $email
 * @property string $password
 */
class GetBreedsRequest extends Request
{
    public function rules(): array
    {
        return [
            'animal_type'   => 'required|in:cat,dog',
            'name'          => 'required',
        ];
    }
}
