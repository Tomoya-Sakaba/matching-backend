<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostAdminLoginRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PostAdminSignupRequest;
use App\Models\Administrator;
use Illuminate\Support\Facades\Auth;

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

        Administrator::create($adminData);

        return response()->json([
            'status' => true,
        ]);
    }

    public function login(PostAdminLoginRequest $request)
    {
        $adminData = $request->only([
            'email_address',
            'password',
        ]);

        if (Auth::guard('administrator')->attempt($adminData)) {
            $admin = Administrator::whereEmail_address($request->email_address)->first();
            $admin->tokens()->delete();
            $token = $admin->createToken("login:admin{$admin->id}")->plainTextToken;
            return response()->json([
                'message' => 'ログイン成功',
                'admin' => Auth::guard('administrator')->user(),
                'token' => $token
            ]);
        }
        return response()->json([], 401);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(true);
    }
}
