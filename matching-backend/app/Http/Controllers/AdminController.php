<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostSignupRequest;
use App\Models\Administrator;
use Illuminate\Support\Facades\Log;

class AdminController extends Controller
{
    public function store(PostSignupRequest $request)
    {
        Log::debug('success');
        $adminData = $request->only([
            'register_id',
            'name',
            'name_kana',
            'phone_number',
            'email_address',
            'password',
        ]);

        $adminData['password'] = bcrypt($adminData['password']);

        $admin = Administrator::create($adminData);

        return response()->json([
            'status' => true,
            'admin' => $admin,
        ]);
    }
}
