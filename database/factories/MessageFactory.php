<?php

namespace Database\Factories;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'chat_id' => Chat::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'message' => $this->faker->sentence,
            'attachment' => null,
            'type' => 'text',
        ];
    }
}
