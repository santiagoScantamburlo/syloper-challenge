<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/home', HomeController::class)->name('home');

Route::get('posts/browse', [PostController::class, 'browse'])->name('posts.browse');

// Route::get('posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('posts/{slug}', [PostController::class, 'show'])->name('posts.show');

// Route::get('posts/{search}', [PostController::class, 'browse'])->name('posts.browse');

Route::resource('posts', PostController::class);

Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');
