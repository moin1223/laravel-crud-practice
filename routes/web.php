<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ProductController;

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

// produts

Route::group(['prefix'=>'product'], function () {
    Route::get('/products' ,[ProductController::class, 'index'])->name('product');
    Route::get('/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit', [ProductController:: class, 'edit'])->name('product.edit');
    Route::post('/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/delete', [ProductController::class, 'destroy'])->name('product.delete');

});

