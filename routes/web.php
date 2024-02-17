<?php

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
Route::view('/dashboard', 'layouts.dashboard.dashboard');
Route::view('/dashboard/posts', 'layouts.dashboard.dashboard');
Route::view('/dashboard/posts/netlify', 'layouts.dashboard.dashboard');
