<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/search', [PostController::class, 'search'])->name('post.search');
Route::get('/post/{post:slug}', [PostController::class, 'show'])->name('post.view');
Route::get('/post/{category:slug}', [PostController::class, 'byCategory'])->name('post.category');
Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente.index');
// Route::get('/cliente/{cliente:id}', [ClienteController::class, 'show'])->name('cliente.view');
// Route::get('/cliente/{category:id}', [ClienteController::class, 'byCategory'])->name('cliente.category');
