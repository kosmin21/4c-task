<?php

namespace Database\Seeders;

use App\Models\Dog;
use Illuminate\Database\Seeder;

class DogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Dog::factory()->count(100)->create();
    }
}
