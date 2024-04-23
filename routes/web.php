<?php
namespace App\Http\Controllers;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('welcome');
});

Route::get('/dashboard', [PostController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::controller(PostController::class)->group(function() {
        Route::get('/posts/create', 'create')->name('posts.create');
        Route::post('/posts/create', 'store')->name('posts.store');
        Route::get('/posts', 'index')->name('posts');
        Route::get('/posts/{post}', 'show')->name('posts.show');
        Route::get('/user/{user_id}/posts', 'showUserPosts')->name('user.show');
    });
    
});

require __DIR__.'/auth.php';
