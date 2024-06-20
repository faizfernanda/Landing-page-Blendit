<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
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
    return view('main');
});

Route::get('/form', [App\Http\Controllers\PageController::class, 'showForm'])->name('form');
Route::get('/home', [App\Http\Controllers\PageController::class, 'showHome'])->name('home');
Route::post('/register', [App\Http\Controllers\RegisterController::class, 'postRegister'])->name('register');;

