<?php

namespace Database\Factories;

use App\Models\History;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package_services>
 */
class Package_servicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->monthName(),
            'description' => fake()->sentence(10),
            'package_id' => Package::inRandomOrder()->value('id'),
            'history_id' => History::inRandomOrder()->value('id'),
        ];
    }
}
