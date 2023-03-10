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



Route::post('auth/saveadmin',[AdminController::class,'saveadmin'])->name('auth.saveadmin');
Route::post('auth/checkadmin',[AdminController::class,'checkadmin'])->name('auth.checkadmin');
Route::get('auth/logoutadmin',[AdminController::class,'logoutadmin'])->name('auth.logoutadmin');



Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('auth/login',[AdminController::class,'login'])->name('auth.login');
    Route::get('auth/register',[AdminController::class,'register'])->name('auth.register');
});
