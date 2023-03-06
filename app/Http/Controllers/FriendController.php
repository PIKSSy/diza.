<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FriendController extends Controller
{
    public function index()
    {
        return Friend::all();
    }

    public function showByName(Request $request)
    {
        return Friend::where('user', $request->user)->get();
    }

    public function destroy($user, $friend)
    {
        Friend::where('user', $user)->where('friend', $friend)->delete();
    }

    public function store(Request $request)
    {
        $newFriendRecord = new Friend();
        $newFriendRecord->user = $request->user;
        $newFriendRecord->friend = $request->friend;
        $newFriendRecord->save();
    }

    public function friendAccepted(Request $request)
    {
        $loggedInUserId = Auth::user()->user_id;
        if ($request->accepted) {
            $record = Friend::where('friend', $loggedInUserId)->where('user', $request->user)->first();
            $record->accepted = 0;
            $record->save();
        } else {
            $this->destroy($request->user, $loggedInUserId);
        }
    }

    public function friendList()
    {
        $userId = Auth::user()->user_id;

            return null;
    }

    public function removeFriend(Request $request){
        $friendship = $this->friendshipIsExist($request->friend, Auth::user()->user_id);
        if(!is_null($friendship)){
            $friendship->delete();
        }
    }

    private function friendshipIsExist($user1, $user2){
        $friendship = Friend::where(function ($query) use ($user1, $user2) {
            $query->where('user', $user1)
                  ->where('friend', $user2);
        })
        ->orWhere(function ($query) use ($user1, $user2) {
            $query->where('user', $user2)
                  ->where('friend', $user1);
        })
        ->first();
        return $friendship;
    }
}
