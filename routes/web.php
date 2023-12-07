<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::resource("articles", "App\Http\Controllers\ArticleController");
Route::get('/article/{lang}', [\App\Http\Controllers\ArticleController::class, 'switch'])->name('article.switch');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
