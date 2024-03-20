<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sitting>
 */
class SittingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->monthName(),
            'light_logo' => fake()->imageUrl(),
            'dark_logo' => fake()->imageUrl(),
            'icon' => fake()->imageUrl(),
            'small_description' => fake()->sentence(15),
            'about_us' => fake()->sentence(10),

        ];
    }
}
