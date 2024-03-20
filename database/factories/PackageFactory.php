<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->colorName(); // Generate a random color name

        return [
            'name' => $name,
            'slug' => \Illuminate\Support\Str::slug($name), // Generate slug from the name
            'image' => $this->faker->imageUrl(),
            'description' => $this->faker->sentence(10),
            'is_active' => $this->faker->boolean(),
            'price' => $this->faker->numberBetween(50, 1000),
            'user_id' => User::inRandomOrder()->value('id'),
            'status_id' => Status::inRandomOrder()->value('id'),
        ];
    }
}
