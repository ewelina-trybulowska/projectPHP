<?php

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

Route::get('/', function () {
    return view('index');
})->name('mainpage');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware(['auth','admin'])->name('admin.dashboard');
Route::resource('/admin/users', \App\Http\Controllers\Admin\UsersController::class)->middleware(['auth','admin']);

require __DIR__.'/auth.php';

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::get('/women', '\App\Http\Controllers\ProductController@women')->name('products.women');
Route::get('/men', '\App\Http\Controllers\ProductController@men')->name('products.men');
Route::get('/search', '\App\Http\Controllers\ProductController@search')->name('products.search');
Route::post('/search', '\App\Http\Controllers\ProductController@search')->name('products.search');


Route::resource('/user', \App\Http\Controllers\UserController::class);

