<?php

namespace App\Models;

class Cat extends Animal
{
    const ANIMAL_TYPE = 'cat';

    public function getAnimalTypeAttribute(): string
    {
        return self::ANIMAL_TYPE;
    }
}
