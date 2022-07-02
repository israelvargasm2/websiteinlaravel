<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutmeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');

Route::get('about-me', [AboutmeController::class, 'index'])->name('aboutme');

Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::post('contact', [ContactController::class, 'store'])->name('store.contact');

Route::get('test', [PostController::class, 'index'])->name('test');

Route::get('lang/{locale}', [HomeController::class, 'lang'])->name('lang');
