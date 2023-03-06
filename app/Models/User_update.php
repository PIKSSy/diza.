<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_update extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'birthday',
        'gender',
        'language',
    ];

    protected $hidden = [
        'password',
    ];

}
