<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/db', function() {
    return view('Kategori');
});
Route::get('/tb', [KategoriController::class, 'index']);

Route::post('/post/store', [PostController::class, 'Store'])->name('post.store');

Route::get('/post', [PostController::class, 'index']);
