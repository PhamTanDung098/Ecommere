<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;

Route::apiResource('product', ProductController::class);
Route::prefix('products')->group(function () {
    Route::apiResource('{product}/reviews', ReviewsController::class);
});
