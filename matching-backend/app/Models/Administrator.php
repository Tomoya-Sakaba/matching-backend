<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    protected $fillable = [
        'register_id',
        'name',
        'name_kana',
        'phone_number',
        'email_address',
        'password',
    ];

    protected $guarded = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $hidden = [
        'password',
    ];
}
