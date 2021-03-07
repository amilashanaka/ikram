<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;

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


Route::prefix('/about')->group(function () {
    Route::get('/', [FrontController::class, 'about'])->name('about');
    Route::get( '/background', [FrontController::class, 'background'])->name('background');
    Route::get( '/vision-mission', [FrontController::class, 'vision_mission'])->name('vision-mission');
    Route::get( '/organisation-chart', [FrontController::class, 'organisation_chart'])->name('organisation-chart');

});

Route::prefix('/services')->group(function () {
    Route::get( '/product-certification', [FrontController::class, 'product_certification'])->name('product-certification');
    Route::get( '/local-product-listing', [FrontController::class, 'local_product_listing'])->name('local-product-listing');
    Route::get( '/testing-services', [FrontController::class, 'testing_services'])->name('testing_services');

});

//certification

Route::prefix('/certification')->group(function () {
    Route::get( '/products', [FrontController::class, 'certified_product'])->name('products');
    Route::get( '/standard', [FrontController::class, 'certified_standard'])->name('standard');
    Route::get( '/relevant-acts-directives', [FrontController::class, 'relevant_acts_directives'])->name('relevant-acts-directives');

});

//Forms

Route::prefix('/forms')->group(function () {
    Route::get( '/products', [FrontController::class, 'certified_product'])->name('products');
    Route::get( '/standard', [FrontController::class, 'certified_standard'])->name('standard');
    Route::get( '/relevant-acts-directives', [FrontController::class, 'relevant_acts_directives'])->name('relevant-acts-directives');

});



Route::get('/blog', 'App\Http\Controllers\FrontController@blog');
Route::get('/career', 'App\Http\Controllers\FrontController@career');
Route::get('/contact', 'App\Http\Controllers\FrontController@contact');
Route::get('/projects', 'App\Http\Controllers\FrontController@about');
Route::get('/projectDetail', 'App\Http\Controllers\FrontController@projectDetail');
Route::get('/service', 'App\Http\Controllers\FrontController@service');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
