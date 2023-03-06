<?php

namespace App\Http\Controllers;

use App\Models\Message_reaction;
use Illuminate\Http\Request;

class MsgReactController extends Controller
{
    public function index(){
        return Message_reaction::all();
    }
}
