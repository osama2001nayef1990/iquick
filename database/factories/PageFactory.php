<?php

namespace Database\Factories;

use App\Models\Package;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->colorName();
        return [
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name),
            'title' => fake()->word(),
            'content' => fake()->paragraph(20),
            'is_active' => fake()->boolean(),
        ];
    }
}
