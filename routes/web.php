<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Pest\Support\View;

Route::get('/',[ProductController::class , 'home']);
Route::get('/catalogue',[ProductController::class, 'list'])->name('mylist');

Route::get('/add',[ProductController::class, 'add']);
Route::post('/add',[ProductController::class, 'create']);

Route::get('/admin',[ProductController::class, 'admin'])->name('admin');;



Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/{id}/update', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);
Route::delete('/products/{id}/delete', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');





