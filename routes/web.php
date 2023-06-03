<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\ArtikelController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/artikels', [ArtikelController::class, 'index'])->name('artikels.index');
Route::get('/artikels/create', [ArtikelController::class, 'create'])->name('artikels.create');
Route::post('/artikels', [ArtikelController::class, 'store'])->name('artikels.store');
Route::get('/artikels/{artikel}', [ArtikelController::class, 'show'])->name('artikels.show');
Route::get('/artikels/{artikel}/edit', [ArtikelController::class, 'edit'])->name('artikels.edit');
Route::put('/artikels/{artikel}', [ArtikelController::class, 'update'])->name('artikels.update');
Route::delete('/artikels/{artikel}', [ArtikelController::class, 'destroy'])->name('artikels.destroy');
Route::resource('artikels', ArtikelController::class);

Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
