<?php

use App\Http\Controllers\home\loginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
    // return "";
});

// // login admin
// Route::get('login/admin', [loginController::class, 'loginAdminRouter'])->name('login.admin.home');

// Route::get('/Login-admin/{email}/{password}', [loginController::class, 'loginAdmin'])->name('loginAdmin.admin.main');

// login user
Route::get('login/user', [loginController::class, 'loginUser'])->name('login.user.home');
// google
Route::get('login/google', [loginController::class, 'loginGoogle'])->name('login.user.home');
Route::get('login/google/callback', [loginController::class, 'callback']);
// Auth::routes();

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');
