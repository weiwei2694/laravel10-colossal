<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\Admin\UserController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);


Route::get('/auth/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/auth/login', [AuthController::class, 'store'])->name('login')->middleware('guest');
Route::post('/auth/logout', [AuthController::class, 'destroy'])->name('logout')->middleware('auth');

Route::prefix('dashboard')
    ->as('dashboard.')
    ->group(function () {
        Route::middleware(['auth'])->group(function () {
            Route::view('/', 'layouts.dashboard.dashboard')->name('index');
            Route::resource('posts', PostController::class);
        });

        Route::middleware(['is_admin', 'auth'])->group(function () {
            // ...
            Route::resource('users', UserController::class);
        });
    });
