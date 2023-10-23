<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [\App\Http\Controllers\WebController::class, 'index'])->name('index');
Route::get('/products', [\App\Http\Controllers\WebController::class, 'products'])->name('products');
Route::get('/product/{id}', [\App\Http\Controllers\WebController::class, 'product'])->name('product');
Route::get('/admin', [\App\Http\Controllers\WebController::class, 'admin'])->name('admin');
Route::get('/contacts', [\App\Http\Controllers\WebController::class, 'contacts'])->name('contacts');

Auth::routes();
Route::post('/category', [\App\Http\Controllers\WebController::class, 'addCategory'])->name('addCategory');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
