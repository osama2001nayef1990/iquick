<?php

namespace Database\Factories;

use App\Models\History;
use App\Models\Package;
use App\Models\Service;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->domainName();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => fake()->imageUrl(),
            'short_description' => fake()->sentence(10),
            'long_description' => fake()->sentence(30),
            'price' => fake()->numberBetween(50,1000),
            'is_active'=>fake()->boolean(),
            'user_id' => User::inRandomOrder()->value('id'),
            'status_id' => Status::inRandomOrder()->value('id'),
            'history_id' => History::inRandomOrder()->value('id'),

        ];
    }
}
