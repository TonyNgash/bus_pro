<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::view("/admin","admin-login-form");
// Route::post("/login-admin",[AdminController::class, "login"]);
// // Route::get("/fakeuser",[AdminController::class,"fakeUser"]);

// Route::get('/admin/logout', [AdminController::class,"logout"]);
// Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->middleware('auth');

// Route::middleware('auth:admins')->group(function () {
//     Route::view('/admin/dashboard','admin/dashboard');
// });

Route::get('/admin/login', [AdminController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout']);

Route::middleware('auth:admins')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
});
