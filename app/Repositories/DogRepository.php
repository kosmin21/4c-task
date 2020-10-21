<?php

namespace App\Repositories;

use App\Models\Dog;
use App\Repositories\Interfaces\AnimalRepositoryInterface;

class DogRepository implements AnimalRepositoryInterface
{
    /**
     * @return Dog[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return Dog::all();
    }

    public function getByName(string $query)
    {
        return Dog::where('name', 'LIKE', '%' . $query . '%')->get();
    }

    public function getById(int $id)
    {
        return Dog::find($id);
    }

    public function saveFromExternalApi(array $matches)
    {
        foreach ($matches as $match) {
            $dog = new Dog();
            $dog->fill($match);
            if (isset($match['alt_names'])) {
                $dog->alternative_names = $match['alt_names'];
            }
            $dog->save();
        }
    }
}
