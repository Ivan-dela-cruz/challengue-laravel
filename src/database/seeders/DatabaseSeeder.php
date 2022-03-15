<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(20)
        ->has(Place::factory()->count(5))
        ->create();
    }
}
