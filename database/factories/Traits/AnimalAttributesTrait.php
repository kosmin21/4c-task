<?php

namespace Database\Factories\Traits;

trait AnimalAttributesTrait
{
    /**
     * Get a random list of properties for the animal
     * @return array
     */
    private function getAnimalAttributes(): array
    {
        $attributes = array();
        $attributes['name'] = $this->getAnimalName();
        $attributes['temperament'] = implode(', ', $this->faker->words($this->faker->numberBetween(1,3), false));
        $attributes['alternative_names'] = $this->getAnimalName();
        $attributes['life_span'] = $this->faker->numberBetween(0,7) . ' - ' . $this->faker->numberBetween(7,20) . ' years';
        $attributes['origin'] = $this->faker->country;
        $attributes['wikipedia_url'] = 'https://www.wikipedia.com/' . str_replace(' ', '_', strtolower($attributes['name']));
        $attributes['country_code'] = $this->faker->countryCode;
        $attributes['description'] = $this->faker->text;
        $attributes['favourite'] = $this->faker->randomElement(['Yes', 'No']);

        return $attributes;
    }

    /**
     * Get a random string for an animal name that has between 1 and 3 words for diversity
     * @return string
     */
    private function getAnimalName(): string
    {
        return ucwords($this->faker->words($this->faker->numberBetween(1,3), true));
    }
}
