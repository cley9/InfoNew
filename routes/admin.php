<?php

use App\Http\Controllers\admin\homeController;
use App\Http\Controllers\home\loginController;
use Illuminate\Support\Facades\Route;

// Route::get('/Login-admin/{email}/{password}', [loginController::class, 'loginAdmin'])->name('loginAdmin.admin.main');
// login admin
Route::get('/login/admin', [loginController::class, 'loginAdminRouter'])->name('login.admin.home');

Route::get('/login-admin/{email}/{password}', [loginController::class, 'loginAdmin'])->name('loginAdmin.admin.main');

Route::middleware('adminVerification')->group(function () {
    // home
    Route::get('/admin/home', [homeController::class, 'home'])->name('home.admin.home');
    
});

?>