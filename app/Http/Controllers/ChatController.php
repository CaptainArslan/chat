<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ChatController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $users = User::where('id', '!=', $user->id)->get();
        return view('dashboard', get_defined_vars());
    }

    public function getUser(User $user)
    {
        return $this->sendSuccessResponse($user, 'User fetched successfully', Response::HTTP_OK);
    }

    public function search(Request $request)
    {
        $users = User::search($request->input('query', ''))
            ->where('id', '!=', Auth::id())
            ->get();

        return $this->sendSuccessResponse($users, 'Users fetched successfully', Response::HTTP_OK);
    }

    public function chats()
    {
        $chats = auth()->user()->chats()
            ->with('participants')
            ->withCount('messages')
            ->latest()
            ->get();
        return $this->sendSuccessResponse($chats, 'Chats fetched successfully', Response::HTTP_OK);
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
        $user = Auth::user();
        $message = $chat->messages()->create([
            'user_id' => $user->id,
            'message' => $request->input('message'),
        ]);

        // Mark all users except the sender as "unread"
        $chat->participants()->where('user_id', '!=', $user->id)
            ->each(function ($user) use ($message) {
                $user->readBy()->attach($message->id, ['read_at' => null]);
            });

        return response()->json($message);
    }


    public function getUsers()
    {
        $users = User::where('id', '!=', Auth::id())->get();

        return $this->sendSuccessResponse($users, 'Users fetched successfully', Response::HTTP_OK);
    }
}
