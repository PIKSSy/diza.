<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_reaction extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'message',
        'user',
        'reaction'
    ];

    protected $casts = [
        'reaction' => 'text'
    ];
}
