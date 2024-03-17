<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SobreController;
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
Route::get('/portfolio/clientes', [CustomerController::class, 'index'])->name('cliente.index');
Route::get('/portfolio/clientes/{customer:slug}', [CustomerController::class, 'show'])->name('cliente.view');
Route::get('/portfolio/clientes/{category:id}', [CustomerController::class, 'byCategory'])->name('cliente.category');
Route::get('/servicos/{category:slug}', [ServiceController::class, 'category'])->name('services.category');
Route::get('/servicos/{category:slug}/{service:slug}', [ServiceController::class, 'show'])->name('services.view');
Route::get('/projetos', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/portfolio/{category:slug}/{project:slug}', [ProjectController::class, 'show'])->name('projects.view');


Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::post('/contato', [ContatoController::class, 'send'])->name('contato.send');


