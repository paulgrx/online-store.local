<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', function () {return view('welcome');});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product', [App\Http\Controllers\ProductController::class, 'viewproduct'])->name('product');
Route::get('/basket', [App\Http\Controllers\BasketController::class, 'viewbasket'])->name('basket');
Route::get('/form', [App\Http\Controllers\FormController::class, 'form'])->name('form');
Route::get('/search', [App\Http\Controllers\HomeController::class, 'search'])->name('home');
