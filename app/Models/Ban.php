<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'begin',
        'end',
        'admin',
        'reason',
        'ip'
    ];
}
