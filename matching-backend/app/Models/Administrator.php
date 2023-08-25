<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Administrator extends Authenticatable
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'register_id',
        'name',
        'name_kana',
        'phone_number',
        'email_address',
        'password',
    ];

    protected $hidden = [
        'password',
    ];
}
