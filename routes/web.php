<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Dashboard\Admin\{UserController, SponsorController, ProjectController as DashboardProjectController, TestimonialController, FaqController as DashboardFaqController, FaqCategoryController};
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\{AuthController, AboutController, HowWeWorkController, FaqController, PricingController, ProjectController, HomeController, QuoteController, ServiceController, TermOfServiceController, ContactController};
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
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/quote', [QuoteController::class, 'index'])->name('quote.index');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/service-detail', [ServiceController::class, 'show'])->name('services.show');
Route::get('/how-we-work', [HowWeWorkController::class, 'index'])->name('how-we-work.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing.index');
Route::get('/term-of-service', [TermOfServiceController::class, 'index'])->name('term-of-service.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::post('/blogs/{post}/create-comment', [BlogController::class, 'createComment'])->name('blogs.create-comment');
Route::get('/blogs/{post}', [BlogController::class, 'show'])->name('blogs.show');

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
            Route::resource('sponsors', SponsorController::class);
            Route::resource('projects', DashboardProjectController::class);
            Route::resource('testimonials', TestimonialController::class);
            Route::resource('faqs', DashboardFaqController::class);
            Route::resource('faq-categories', FaqCategoryController::class);
        });
    });
