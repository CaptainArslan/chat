<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('dashboard', get_defined_vars());
    }

    public function chats()
    {
        $chats = auth()->user()->chats()
            ->with('participants')
            ->withCount('messages')
            ->latest()
            ->get();

        return response()->json($chats);
    }
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
