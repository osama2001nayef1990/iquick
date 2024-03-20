<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'facebook'=>fake()->url(),
            'instagram'=>fake()->url(),
            'snapchat'=>fake()->url(),
            'twitter'=>fake()->url(),
            'linkedin'=>fake()->url(),
            'email'=>fake()->email(),
            'address'=>fake()->address(),
            'youtube'=>fake()->address(),
            'phone'=>fake()->address(),
        ];
    }
}
