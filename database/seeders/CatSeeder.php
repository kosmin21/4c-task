<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Cat::factory()->count(100)->create();
    }
}
