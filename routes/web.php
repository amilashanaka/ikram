<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
//--------- pages -------------
Route::get('/', 'App\Http\Controllers\FrontController@index');
Route::get('/about', 'App\Http\Controllers\FrontController@about');
Route::get('/blog', 'App\Http\Controllers\FrontController@blog');
Route::get('/career', 'App\Http\Controllers\FrontController@career');
Route::get('/contact', 'App\Http\Controllers\FrontController@contact');
Route::get('/projects', 'App\Http\Controllers\FrontController@about');
Route::get('/projectDetail', 'App\Http\Controllers\FrontController@projectDetail');
Route::get('/service', 'App\Http\Controllers\FrontController@service');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
