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
class PutBreedRequest extends Request
{
    public function rules(): array
    {
        return [
            'name'                  => 'nullable',
            'temperament'           => 'nullable',
            'alternative_names'     => 'nullable',
            'life_span'             => 'nullable',
            'origin'                => 'nullable',
            'wikipedia_url'         => 'nullable',
            'country_code'          => 'nullable',
            'description'           => 'nullable',
            'favourite'             => 'nullable',
        ];
    }
}
