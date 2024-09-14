<?php

namespace Database\Seeders;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chat::factory()
            ->count(100)
            ->create()
            ->each(function ($chat) {
                if ($chat->is_group) {
                    // For group chats, attach 3 to 5 random users
                    $users = User::inRandomOrder()->limit(rand(3, 5))->pluck('id');
                    $chat->participants()->attach($users);
                } else {
                    // For individual chats, ensure the chat with the same users doesn't already exist
                    do {
                        $user = User::inRandomOrder()->first();
                        $existingChat = Chat::whereHas('participants', function ($query) use ($user) {
                            $query->where('user_id', $user->id);
                        })
                            ->where('is_group', false) // Ensure it's not a group chat
                            ->exists();
                    } while ($existingChat);

                    // Attach the selected user to the chat
                    $chat->participants()->attach($user->id);
                }
            });
    }
}
