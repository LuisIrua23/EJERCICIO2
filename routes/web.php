<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Models\Product;


Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente/asociar/producto', [CustomerproductController::class, 'asociar']);
Route::post('cliente/store', [CustomerproductController::class, 'store'])->name('customer_product.store');

Route::get('producto/listar', [ProductController::class, 'listar'])->name('product.listar');
Route::get('producto/create', [ProductController::class, 'create'])->name('product.create');
Route::post('producto/store', [ProductController::class, 'store'])->name('product.store');
Route::get('producto/{dato}', [ProductController::class, 'show'])->name('product.show');
Route::put('producto/{dato}', [ProductController::class, 'update'])->name('product.update');
Route::delete('producto/{dato}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('producto/{dato}/edit', [ProductController::class, 'edit'])->name('product.edit');