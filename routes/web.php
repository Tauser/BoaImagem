<?php

use App\Http\Controllers\ServiceController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\CustomerController;

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

Route::get('/sobre-nos', [SobreController::class, 'index'])->name('sobre');
Route::get('/blog', [PostController::class, 'index'])->name('post.index');
Route::get('/search', [PostController::class, 'search'])->name('post.search');
Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('post.view');
Route::get('/blog/{category:slug}', [PostController::class, 'byCategory'])->name('post.category');
Route::get('/cliente', [CustomerController::class, 'index'])->name('cliente.index');
Route::get('/cliente/{customer:slug}', [CustomerController::class, 'show'])->name('cliente.view');
Route::get('/cliente/{category:id}', [CustomerController::class, 'byCategory'])->name('cliente.category');
Route::get('/servicos/{category:slug}', [ServiceController::class, 'category'])->name('service.category');


Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'send'])->name('contato.send');


