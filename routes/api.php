<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products', ProductController::class);

Route::prefix('products')->group(function () {
    Route::apiResource('{product}/reviews', ReviewController::class);
    // Route::get('{product}', [ProductController::class, 'show'] );
    // Route::get('{/product}/reviews', [ReviewController::class, 'index'] )->name('reviews.index');
    // Route::get('{/product}/reviews', function($product){
    //     return $product;
    // })->name('reviews.index');
});
