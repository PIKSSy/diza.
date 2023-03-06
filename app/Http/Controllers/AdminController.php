<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return Admin::all();
    }

    public function show($admin_id){
        return Admin::find($admin_id);
    }

    public function destroy($admin_id){
        Admin::find($admin_id)->delete();
    }

    public function store(Request $request){
        $new_admin = new Admin();
        $new_admin->user = $request->user_id;
        $new_admin->save();
    }
}
