<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\BlogController;
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

Route::name('page.')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('index');
    Route::get('/home', [PageController::class, 'home'])->name('home');
    Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/auto_pop', [PageController::class, 'auto_pop'])->name('auto_pop');
    Route::get('/test', [PageController::class, "test"])->name('test');
    Route::get('/admin', [BlogController::class, "admin"])->name('admin');
});

Route::prefix('ajax')->name('ajax.')->group(function () {
    Route::post("/catalog_filter", [CatalogController::class, "catalog_filter"])->name("catalog.filter");
    Route::get('/search', [PageController::class, "search"])->name('search');
    Route::post('/post_store', [BlogController::class, "post_store"])->name('post.store');
    Route::post('/post_add_img', [BlogController::class, "post_add_img"])->name('post.add_img');
});




