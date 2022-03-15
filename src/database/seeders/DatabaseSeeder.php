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
        Place::factory(10)
        ->has(Category::factory()->count(3))
        ->create();
    }
}
