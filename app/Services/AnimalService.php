<?php

namespace App\Services;

use App\Exceptions\Animal\AnimalTypeNotFoundException;
use App\Repositories\CatRepository;
use App\Repositories\DogRepository;

class AnimalService
{
    const ANIMAL_TYPE_CAT = 'cat';
    const ANIMAL_TYPE_DOG = 'dog';

    /**
     * @return string[]
     */
    public function getAnimalTypes(): array
    {
        return [self::ANIMAL_TYPE_CAT, self::ANIMAL_TYPE_DOG];
    }

    /**
     * @param string $animal_type
     * @return string
     * @throws AnimalTypeNotFoundException
     */
    public function getAnimalRepository(string $animal_type)
    {
        if (!in_array($animal_type, $this->getAnimalTypes())) {
            throw new AnimalTypeNotFoundException();
        }

        switch ($animal_type){
            case self::ANIMAL_TYPE_CAT:
                return new CatRepository;
            case self::ANIMAL_TYPE_DOG:
                return new DogRepository;
        }

        return null;
    }
}
