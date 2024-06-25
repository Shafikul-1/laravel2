<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detail>
 */
class DetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
           'city' => fake()->country(),
           'cardId' => fake()->numberBetween(100, 300),
           'roll' => fake()->numberBetween(10, 60),
           'user_id' => fake()->numberBetween(2,9)
        ];
    }
}
