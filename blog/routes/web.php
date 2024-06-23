<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FaqCategoryController;
use App\Http\Controllers\FaqEntryController;

// Public routes
Route::get('/', [HomeController::class, 'homepage']);
Route::get('/post_details/{id}', [HomeController::class, 'post_details']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/readme', [HomeController::class, 'readme']);
Route::get('/faq', [FaqCategoryController::class, 'index'])->name('faq.index');

// Auth routes
require __DIR__.'/auth.php';

// Routes protected by auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/create_post', [HomeController::class, 'create_post'])->name('create_post');
    Route::post('/user_post', [HomeController::class, 'user_post']);

    // User profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Route for sending emails
    Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');
});

// Routes protected by auth and admin middleware
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('post', [HomeController::class, 'post']);
    
    // Admin post management routes
    Route::get('/post_page', [AdminController::class, 'post_page']);
    Route::post('/add_post', [AdminController::class, 'add_post']);
    Route::get('/show_post', [AdminController::class, 'show_post']);
    Route::get('/delete_post/{id}', [AdminController::class, 'delete_post']);
    Route::get('/edit_page/{id}', [AdminController::class, 'edit_page']);
    Route::post('/update_post/{id}', [AdminController::class, 'update_post']);

    // Admin user management routes
    Route::get('/admin/promote', [AdminController::class, 'adminPromote'])->name('admin.promote');
    Route::post('/promote_user/{id}', [AdminController::class, 'promoteUser'])->name('promote.user');
    
    // Admin FAQ management routes
    Route::resource('faq/categories', FaqCategoryController::class)->except(['index', 'show']);
    Route::resource('faq/categories.entries', FaqEntryController::class)->shallow()->except(['show']);
});


