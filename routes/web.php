<?php

use App\Http\Controllers\Admin\AdminComicController;
use App\Http\Controllers\Guest\UserComicController;
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

Route::get('/', [UserComicController::class, 'index'])->name('welcome');

Route::get('admin', function () {

    return view('admin');
})->name('admin');

Route::post('admin', [AdminComicController::class, 'create'])->name('admin.create');
