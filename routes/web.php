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
Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/blog', [FrontController::class, 'blog'])->name('blog');
Route::get('/career', [FrontController::class, 'career'])->name('career');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/feedback', [FrontController::class, 'feedback'])->name('feedback');


Route::prefix('/about')->group(function () {
    Route::get('/', [FrontController::class, 'about'])->name('about');
    Route::get( '/background', [FrontController::class, 'background'])->name('background');
    Route::get( '/vision-mission', [FrontController::class, 'vision_mission'])->name('vision-mission');
    Route::get( '/organisation-chart', [FrontController::class, 'organisation_chart'])->name('organisation-chart');

});

Route::prefix('/services')->group(function () {
    Route::get( '/', [FrontController::class, 'services'])->name('services');
    Route::get( '/product-certification', [FrontController::class, 'product_certification'])->name('product-certification');
    Route::get( '/local-product-listing', [FrontController::class, 'local_product_listing'])->name('local-product-listing');
    Route::get( '/testing-services', [FrontController::class, 'testing_services'])->name('testing_services');
    Route::get( '/directory', [FrontController::class, 'testing_services'])->name('testing_services');
    Route::get( '/guides', [FrontController::class, 'guides'])->name('guides');
});

//certification

Route::prefix('/certification')->group(function () {
    Route::get( '/products', [FrontController::class, 'certified_product'])->name('products');
    Route::get( '/standard', [FrontController::class, 'certified_standard'])->name('standard');
    Route::get( '/relevant-acts-directives', [FrontController::class, 'relevant_acts_directives'])->name('relevant-acts-directives');

});

//Forms

Route::prefix('/forms')->group(function () {
    Route::get( '/products', [FrontController::class, 'forms_product'])->name('products');
    Route::get( '/products-list', [FrontController::class, 'form_products_list'])->name('products-list');
    Route::get( '/consignments', [FrontController::class, 'form_consignments'])->name('consignments');

});


 //----- end pages ----------------------------------------------------------


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
