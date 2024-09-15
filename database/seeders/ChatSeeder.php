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
                    // For individual chats, attach a single user ensuring no duplicate chat exists
                    $user = User::inRandomOrder()->first();

                    // Check if a chat already exists between the current chat's creator and this user
                    $existingChat = Chat::whereHas('participants', function ($query) use ($user) {
                        $query->where('user_id', $user->id);
                    })
                        ->whereHas('participants', function ($query) {
                            $query->where('user_id', 1); // Assuming the current user is the authenticated one
                        })
                        ->where('is_group', false)
                        ->first();

                    // Only attach the user if no existing chat was found
                    if (!$existingChat) {
                        $chat->participants()->attach($user->id);
                    }
                }
            });
    }
}
