<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, "index"])->name("page.index");
Route::get('/home', [PageController::class, "home"])->name("page.home");
Route::get('/catalog', [PageController::class, "catalog"])->name("page.catalog");
Route::get('/blog', [PageController::class, "blog"])->name("page.blog");
Route::get('/auto_pop', [PageController::class, "auto_pop"])->name("page.auto_pop");
