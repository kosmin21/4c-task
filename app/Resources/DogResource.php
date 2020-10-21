<?php

namespace App\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DogResource extends JsonResource
{
    public function toArray(Request $request)
    {
        return [
            'name' => $this->resource['name'],
            'temperament' => $this->resource['temperament'],
            'alternative_names' => $this->resource['alt_names'],
            'life_span' => $this->resource['life_span'],
            'origin' => $this->resource['origin'],
            'wikipedia_url' => $this->resource['wikipedia_url'],
            'country_code' => $this->resource['country_code']
            //'description' => $this->resource['title'],
        ];
    }
}
