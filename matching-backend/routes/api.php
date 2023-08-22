<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Administrator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/signup', [AdminController::class, 'store']);
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');

Route::middleware('auth:administrator')->group(function () {
    Route::get('/index', [AdminController::class, 'index']);
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
