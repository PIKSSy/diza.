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

    public function new(Request $request){
        $new_chat = new Chat();
        
        $new_chat->save();
    }
}
