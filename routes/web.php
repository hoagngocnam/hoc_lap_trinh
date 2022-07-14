<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

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
        Route::get('list', [ProductController::class, 'getList'])->name('admin.product.getList');
        Route::get('detail', [ProductController::class, 'getDetail'])->name('admin.product.getDetail');
        Route::get('get_add', [ProductController::class, 'getAdd'])->name('admin.product.getAdd');
        Route::post('post_add', [ProductController::class, 'postAdd'])->name('admin.product.postAdd');
        Route::get('get_update', [ProductController::class, 'getUpdate'])->name('admin.product.getUpdate');
        Route::post('post_update', [ProductController::class, 'postUpdate'])->name('admin.product.postUpdate');
        Route::get('delete', [ProductController::class, 'getDelete'])->name('admin.product.getDelete');
    });
});
