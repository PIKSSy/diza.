<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Ban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BanController extends Controller
{
    public function index(){
        return Ban::all();
    }

    public function show($user_id, $begin_date){
        return Ban::where('user', '=', $user_id)->where('begin','=',$begin_date)->get();
    }

    public function destroy($user_id, $begin_date){
        $this->show($user_id,$begin_date)->delete();
    }

    public function store(Request $request){
        $new_ban = new Ban();
        $new_ban->user = $request->user_id;
        $new_ban->begin = $request->begin_date;
        $new_ban->end = $request->end_date;
        $new_ban->admin = Admin::find(Auth::user()->user_id);
        $new_ban->reason = $request->reason;
        $new_ban->ip = "0.1.2.3.4";  //$request->ip;
        $new_ban->save();
    }
}
