<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ProductController;

Route::post('register', [RegisterController::class, 'register']);
Route::post('products', [ProductController::class, 'addProduct']);
Route::get('products', [ProductController::class, 'showAll']);
Route::get('products/{id}', [ProductController::class, 'showById']);
Route::post('products/{id}', [ProductController::class, 'updateProduct']);
Route::delete('products/{id}', [ProductController::class, 'deleteProduct']);

