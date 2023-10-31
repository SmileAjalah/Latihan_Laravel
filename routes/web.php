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

Route::get('/', [PostController::class, 'index']);

Route::get('/kt', [KategoriController::class, 'index'])->name('kt');
Route::get('/kt/edit/{id}', [KategoriController::class, 'edit'])->name('kt.edit');
Route::put('/kt/update/{id}', [KategoriController::class, 'update'])->name('kt.update');

Route::post('/post/store', [PostController::class, 'Insert'])->name('post.store');
Route::get('/post', [PostController::class, 'form']);
Route::get('/post/list', [PostController::class, 'list'])->name('post.list');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/update/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
