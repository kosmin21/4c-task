<?php

namespace App\Repositories;

use App\Models\Cat;
use App\Repositories\Interfaces\AnimalRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class CatRepository implements AnimalRepositoryInterface
{
    /**
     * @return Cat[]|Collection
     */
    public function all()
    {
        return Cat::all();
    }

    public function getByName(string $query)
    {
        return Cat::where('name', 'LIKE', '%' . $query . '%')->get();
    }

    public function getById(int $id)
    {
        return Cat::find($id);
    }

    public function saveFromExternalApi(array $matches)
    {
        foreach ($matches as $match) {
            $cat = new Cat();
            $cat->fill($match);
            if (isset($match['alt_names'])) {
                $cat->alternative_names = $match['alt_names'];
            }
            $cat->save();
        }
    }
}
