<?php

namespace App\Models;

class Dog extends Animal
{
    protected $table = 'dogs';
    const ANIMAL_TYPE = 'dog';

    public function getAnimalTypeAttribute(): string
    {
        return self::ANIMAL_TYPE;
    }
}
