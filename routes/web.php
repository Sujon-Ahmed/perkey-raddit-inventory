<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\ProductCategoryController;
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
});
