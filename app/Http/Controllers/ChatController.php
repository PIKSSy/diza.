<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function index(){
        return Chat::all();
    }
    
    public function show($user_id){
        $chat = DB::table('chats')
        ->where('user1', $user_id)
        ->orWhere('user2', $user_id)
        ->get();
        return $chat;
    }

    public function destroy($user1, $user2)
    {
        $deleted = Chat::where(function($query) use ($user1, $user2) {
                        $query->where('user1', $user1)->where('user2', $user2)
                              ->orWhere('user1', $user2)->where('user2', $user1);
                    })
                    ->delete();
        if ($deleted > 0) {
            return response()->json(['message' => 'Chat deleted successfully.'], 200);
        } else {
            return response()->json(['message' => 'No chat found to delete.'], 404);
        }
    }

    public function store(Request $request){
        $new_chat = new Chat();
        
        $new_chat->save();
    }

    
}
