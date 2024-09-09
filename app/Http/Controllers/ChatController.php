<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function createGroupChat(Request $request)
    {
        $chat = Chat::create([
            'name' => $request->input('name'),
            'is_group' => true,
        ]);

        $chat->participants()->attach($request->input('user_ids'));

        return response()->json($chat);
    }

    public function sendMessage(Request $request, Chat $chat)
    {
        $message = $chat->messages()->create([
            'user_id' => auth()->id(),
            'message' => $request->input('message'),
        ]);

        // Mark all users except the sender as "unread"
        $chat->participants()->where('user_id', '!=', auth()->id())
            ->each(function ($user) use ($message) {
                $user->readBy()->attach($message->id, ['read_at' => null]);
            });

        return response()->json($message);
    }
}
