<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return User::all();
    }

    public function show($user_id){
        return User::find($user_id);
    }

    public function destroy($user_id){
        User::find($user_id)->delete();
    }

    public function store(Request $request){
        $new_user = new User();
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);
        $new_user->birthday = $request->birthday;
        $new_user->gender = $request->gender;
        $new_user->language = $request->language;
        $new_user->avatar = $request->avatar;
        $new_user->status = 0;
        $new_user->save();
    }

    public function update(){

    }

    //public function 
}
