<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class SubsectimagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
           
            'image' => $this->faker->imageUrl(400, 360, 'animals', true, 'cats'),
            'subsections_id' => $this->faker->randomDigitNotNull(),
            'order' => $this->faker->randomDigitNotNull(),
            
        ];
    }
}
