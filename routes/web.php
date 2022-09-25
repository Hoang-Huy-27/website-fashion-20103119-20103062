<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/admin', [ProductController::class, 'hienthi'])->name('hienthi');
Route::get('/them', [ProductController::class, 'them'])->name('them');

Route::post('/save', [
    'as' => 'save',
    'uses' => 'App\Http\Controllers\ProductController@save'
]);
Route::post('/save2', [
    'as' => 'save2',
    'uses' => 'App\Http\Controllers\ProductController@save2'
]);
Route::get('/sua/{id}', [
    'as' => 'sua',
    'uses' => 'App\Http\Controllers\ProductController@sua'
]);
Route::get('/xoa/{id}', [
    'as' => 'xoa',
    'uses' => 'App\Http\Controllers\ProductController@xoa'
]);
Route::post('/admin', [
    'as' => 'admin',
    'uses' => 'App\Http\Controllers\ProductController@hienthi'
]);