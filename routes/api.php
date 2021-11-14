<?php

use App\Http\Controllers\insert_product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/product/add', [ProductController::class ,'insertproduct']);

Route::get('/product/add', [ProductController::class , 'index']);

Route::get('/product/{id}', [ProductController::class , 'info']);

Route::delete('/product/{id}/delete', [ProductController::class , 'destroy']);

Route::put('/product/{id}/change', [ProductController::class , 'change']);

Route::resource('test', ResourceController::class);





