<?php

use App\Http\Controllers\Admin\AdminComicController;
use App\Http\Controllers\Guest\UserComicController;
use App\Http\Controllers\trahController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserComicController::class, 'index'])->name('home');

Route::get('/admin', [AdminComicController::class, 'index'])->name('admin');

Route::post('/admin', [AdminComicController::class, 'create'])->name('admin.create');

//Route::get('/admin/{admin}')
//Route::get('admin/comic/{comic}', [AdminComicController::class, 'show'])->name('admin.comic.show');

Route::resource('admin/comic', AdminComicController::class);

Route::resource('admin/trash', trahController::class);
