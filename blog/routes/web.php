<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\FAQEntryController;

// Homepage route
Route::get('/', [HomeController::class,'homepage']);

// Homepage with auth middleware
route::get('/home', [HomeController::class,'index'])->middleware('auth')->name('home');

// Post page with auth and admin middleware
Route::get('post', [HomeController::class,'post'])->middleware(['auth','admin']);

// User profile routes with auth middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include auth routes
require __DIR__.'/auth.php';

// Admin routes for post management
Route::get('/post_page', [AdminController::class,'post_page']);
Route::post('/add_post', [AdminController::class,'add_post']);
Route::get('/show_post', [AdminController::class,'show_post']);
Route::get('/delete_post/{id}', [AdminController::class,'delete_post']);
Route::get('/edit_page/{id}', [AdminController::class,'edit_page']);
Route::post('/update_post/{id}', [AdminController::class,'update_post']);

// View post details
Route::get('/post_details/{id}', [HomeController::class,'post_details']);

// Create post route with auth middleware
Route::get('/create_post', [HomeController::class,'create_post']) ->middleware('auth')->name('create_post');

// Store user's post
Route::post('/user_post', [HomeController::class,'user_post']);

// Routes for contact, readme and faq
Route::get('/contact', [HomeController::class,'contact'])->name('contact');
Route::get('/readme', [HomeController::class,'readme']);
Route::get('/faqq', [FAQController::class, 'index'])->name('faqq');

Route::get('/faq', function () {
    return view('faqs.faqq');
});




Route::get('/faq_entries/create', [FAQEntryController::class, 'create'])->name('faq_entries.create');

Route::get('/faq', [FAQController::class, 'index'])->name('faq.index');
Route::get('/faq/create/category', [FAQController::class, 'createCategory'])->name('faq.create_category');
Route::post('/faq/store/category', [FAQController::class, 'storeCategory'])->name('faq.store_category');
Route::get('/faq/{category}/edit', [FAQController::class, 'editCategory'])->name('faq.edit_category');
Route::put('/faq/{category}', [FAQController::class, 'updateCategory'])->name('faq.update_category');
Route::delete('/faq/{category}', [FAQController::class, 'destroyCategory'])->name('faq.destroy_category');

Route::get('/faq/create/entry', [FAQController::class, 'createEntry'])->name('faq.create_entry');
Route::post('/faq/store/entry', [FAQController::class, 'storeEntry'])->name('faq.store_entry');
Route::get('/faq/{entry}/edit', [FAQController::class, 'editEntry'])->name('faq.edit_entry');
Route::put('/faq/{entry}', [FAQController::class, 'updateEntry'])->name('faq.update_entry');
Route::delete('/faq/{entry}', [FAQController::class, 'destroyEntry'])->name('faq.destroy_entry');




// routes for send email  
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('send.email');

