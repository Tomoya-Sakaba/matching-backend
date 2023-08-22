<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostAdminLoginRequest;
use Illuminate\Http\Request;
use App\Http\Requests\PostAdminSignupRequest;
use App\Models\Administrator;
use App\Models\Counselor;
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
        $admin = $request->only([
            'email_address',
            'password',
        ]);

        if (Auth::guard('administrator')->check()) {
            return response()->json('ログイン済み', 200);
        }

        if (Auth::guard('administrator')->attempt($admin)) {
            $request->session()->regenerate();
            return response()->json([
                'message' => 'ログイン成功',
                'admin' => Auth::guard('administrator')->user(),
            ]);
        }
        return response()->json([], 401);
    }

    public function logout(Request $request)
    {
        Auth::guard('administrator')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json([
            'message' => 'ログアウトしました'
        ]);
    }

    public function index()
    {
        $counselors = Counselor::all();
        $loginUser = Auth::user();
        return response()->json([
            'loginUser' => $loginUser,
            'counselors' => $counselors,
        ]);
    }
}
