<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[DashboardController::class,'Dashboard']) ->name('dashboard');


Route::get('/product',[ProductdController::class,'product']) ->name('product.list');


Route::get('/brand',[BrandController::class,'brand']) ->name('brand.list');



Route::get('/category',[CategoryController::class,'category']) ->name('category.list');