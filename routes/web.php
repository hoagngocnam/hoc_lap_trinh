<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Users\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\ProductController as UserProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('users.home');
Route::get('/product', [UserProductController::class, 'detail'])->name('users.product.detail');

Route::prefix('admin')->group(function () {
    Route::prefix('category')->group(function () {
        Route::get('list', [CategoryController::class, 'getList'])->name('admin.category.getList');
        Route::get('detail', [CategoryController::class, 'getDetail'])->name('admin.category.getDetail');
        Route::get('get_add', [CategoryController::class, 'getAdd'])->name('admin.category.getAdd');
        Route::post('post_add', [CategoryController::class, 'postAdd'])->name('admin.category.postAdd');
        Route::get('get_update', [CategoryController::class, 'getUpdate'])->name('admin.category.getUpdate');
        Route::post('post_update', [CategoryController::class, 'postUpdate'])->name('admin.category.postUpdate');
        Route::get('delete', [CategoryController::class, 'getDelete'])->name('admin.category.getDelete');
    });

    Route::prefix('product')->group(function () {
        Route::get('list', [AdminProductController::class, 'getList'])->name('admin.product.getList');
        Route::get('detail', [AdminProductController::class, 'getDetail'])->name('admin.product.getDetail');
        Route::get('get_add', [AdminProductController::class, 'getAdd'])->name('admin.product.getAdd');
        Route::post('post_add', [AdminProductController::class, 'postAdd'])->name('admin.product.postAdd');
        Route::get('get_update', [AdminProductController::class, 'getUpdate'])->name('admin.product.getUpdate');
        Route::post('post_update', [AdminProductController::class, 'postUpdate'])->name('admin.product.postUpdate');
        Route::get('delete', [AdminProductController::class, 'getDelete'])->name('admin.product.getDelete');
    });

   
});
