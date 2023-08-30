<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductdController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
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
Route::get('/product/form',[ProductdController::class,'product_form']) ->name('product.form');
Route::post('/product/search',[ProductdController::class,'product_search']) ->name('product.search');

Route::get('/brand',[BrandController::class,'brand']) ->name('brand.list');
Route::get('/brand/form',[BrandController::class,'brand_form']) ->name('brand.form');
Route::post('/brand/search',[BrandController::class,'brand_search']) ->name('brand.search');

Route::get('/category',[CategoryController::class,'category']) ->name('category.list');
Route::get('/category/form',[CategoryController::class,'category_form']) ->name('category.form');
Route::post('/category/search',[CategoryController::class,'category_search']) ->name('category.search');
