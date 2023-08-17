<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'name_kana',
        'register_code',
        'email_address',
        'password',
        'phone_number',
        'gender',
        'birthday',
        'profession_id',
        'code',
        'prefecture',
        'city',
        'address',
        'building',
        'movie_url',
    ];

    protected $hidden = [
        'password',
    ];
}
