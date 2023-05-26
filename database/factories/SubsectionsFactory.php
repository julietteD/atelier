<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class SubsectionsFactory extends Factory
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
            'body' => $this->faker->paragraph(4),
            'image' => $this->faker->imageUrl(400, 360, 'animals', true, 'cats'),
            'sections_id' => $this->faker->randomDigitNotNull()
            
        ];
    }
}
