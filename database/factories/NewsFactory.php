<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'intro' => $this->faker->sentence(),
            'body' => $this->faker->sentence(),
            'date' => $this->faker->date(),
            'image' => $this->faker->imageUrl(400, 360, 'animals', true, 'cats')

            
        ];
    }
}
