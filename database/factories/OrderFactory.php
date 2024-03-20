<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'description' => fake()->sentence(10),
            'image' => fake()->imageUrl(),
            'price' => fake()->numberBetween(50,1000),
            'service_id' => Service::inRandomOrder()->value('id'),
            'package_id' => Package::inRandomOrder()->value('id'),
        ];
    }
}
