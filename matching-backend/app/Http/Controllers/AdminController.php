<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostAdminSignupRequest;
use App\Models\Administrator;

class AdminController extends Controller
{
    public function store(PostAdminSignupRequest $request)
    {
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
