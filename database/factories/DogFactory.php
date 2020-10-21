<?php

/** @noinspection PhpMissingFieldTypeInspection */

namespace Database\Factories;

use App\Models\Dog;
use Database\Factories\Traits\AnimalAttributesTrait;
use Illuminate\Database\Eloquent\Factories\Factory;

class DogFactory extends Factory
{
    use AnimalAttributesTrait;

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return $this->getAnimalAttributes();
    }

}
