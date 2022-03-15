<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => Category::factory(),
            'name' => $this->faker->word,
            'address' => $this->faker->sentence,
            'review' => $this->faker->sentence,
            'latitude' => $this->faker->latitude(40, 50),
            'longitude' => $this->faker->longitude(20, 30),
            'mainImage' => $this->faker->imageUrl(),
            'images' => json_encode([
                $this->faker->imageUrl(),
                $this->faker->imageUrl(),
                $this->faker->imageUrl(),
            ]),
            'additionalInformation' => json_encode([ 
                'order' => $this->faker->randomNumber(2),
                'rating' => $this->faker->randomNumber(1),
                'urlSite' => $this->faker->url,
            ]),
            'isActive' => $this->faker->boolean,
        ];
    }
}
