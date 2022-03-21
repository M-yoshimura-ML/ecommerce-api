<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Node\CrapIndex;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('/products', ProductController::class);
Route::middleware('auth:api')->prefix('/products')->group(function(){
    Route::post('', [ProductController::class, 'store'])->name('products.store');
    Route::put('{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('{product}', [ProductController::class, 'destroy'])->name('products.destory');
    // Route::post('', function(Request $request){ return $request->user();})->name('products.store');
});


Route::prefix('products')->group(function () {
    Route::get('', [ProductController::class, 'index'] )->name(('products.index'));
    Route::get('{product}', [ProductController::class, 'show'] )->name(('products.show'));
    Route::apiResource('{product}/reviews', ReviewController::class);
    // Route::get('{product}', [ProductController::class, 'show'] );
    // Route::get('{/product}/reviews', [ReviewController::class, 'index'] )->name('reviews.index');
    // Route::get('{/product}/reviews', function($product){
    //     return $product;
    // })->name('reviews.index');
});
