<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('produk', [ProdukController::class, 'store'])->name('produk.store');
Route::get('produk', [ProdukController::class, 'index'])->name('produk.index');
