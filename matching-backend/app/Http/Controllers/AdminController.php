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

        $admin = Administrator::create($adminData);

        return response()->json([
            'status' => true,
            'admin' => $admin,
        ]);
    }

    public function login(PostAdminLoginRequest $request)
    {
        $admin = $request->only([
            'email_address',
            'password',
        ]);

        $admin['password'] = bcrypt($admin['password']);

        if (Auth::guard('administrator')->attempt($admin)) {
            return response()->json([
                'message' => 'ログインに成功しました'
            ], 200);
        } else {
            return response()->json([
                'message' => 'ログインに失敗しました。メールアドレスかパスワードを確認してください。'
            ], 401);
        }
    }
}
