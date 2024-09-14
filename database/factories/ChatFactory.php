<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chat>
 */
class ChatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::inRandomOrder()->first();
        return [
            'name' => $user->name,
            'is_group' => $this->faker->boolean(),
            'user_id' => $user->id,
            'type' => $this->faker->randomElement(['public', 'private']),
            'logo' => $user->avatar,
            'status' => true,
        ];
    }
}
