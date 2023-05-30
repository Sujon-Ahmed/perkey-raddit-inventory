<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StockController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home');

    // product category
    Route::get('/product/category', [ProductCategoryController::class, 'index'])->name('product.category');
    Route::post('/product/category/store', [ProductCategoryController::class, 'store'])->name('product.category.store');
    Route::get('/product/category/status/{id}', [ProductCategoryController::class, 'status'])->name('product.category.status');
    Route::get('/product/category/edit/{id}', [ProductCategoryController::class, 'edit'])->name('product.category.edit');
    Route::post('/product/category/update/{id}', [ProductCategoryController::class, 'update'])->name('product.category.update');
    Route::get('/product/category/delete/{id}', [ProductCategoryController::class, 'delete'])->name('product.category.delete');

    // product
    Route::get('/manage/products', [ProductController::class, 'index'])->name('product.index');
    Route::post('/manage/products/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/manage/products/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::post('/manage/products/update/{id}', [ProductController::class, 'update'])->name('product.update');

    // Stock Routes
    Route::get('/manage/stock', [StockController::class, 'index'])->name('stock.index');
    Route::get('/manage/stock/create', [StockController::class, 'create'])->name('stock.create');
    Route::post('/manage/stock/store', [StockController::class, 'store'])->name('stock.store');
    Route::get('/manage/stock/delete/{id}', [StockController::class, 'delete'])->name('stock.delete');
    Route::post('/manage/stock/update/{id}', [StockController::class, 'update'])->name('stock.update');
});
