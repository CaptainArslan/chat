<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // WithoutModelEvents::disable();

        // \App\Models\Chat::all()->each(function ($chat) {
        //     \App\Models\User::all()->each(function ($user) use ($chat) {
        //         \App\Models\Message::factory()
        //             ->count(rand(1, 10))
        //             ->create([
        //                 'chat_id' => $chat->id,
        //                 'user_id' => $user->id,
        //             ]);
        //     });
        // });

        // WithoutModelEvents::enable();

        Message::factory()
            ->count(1000)
            ->create();
    }
}
