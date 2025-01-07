<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmkmController;
use App\Http\Controllers\CulinariesController;
use App\Http\Controllers\BatikController;
use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return view('home');
});
Route::get('/umkm', [UmkmController::class, 'index'])->name('umkm.umkm');

Route::get('/kuliner', [CulinariesController::class, 'index'])->name('culinary.culinary');

Route::get('/batik', [BatikController::class, 'index'])->name('batik.batik');

Route::get('/umkm/{id}', [UmkmController::class, 'getDetail'])->name('umkm.umkmDetail');

Route::get('/kuliner/{id}', [CulinariesController::class, 'getDetail'])->name('culinary.culinaryDetail');

Route::get('/batik/{id}', [BatikController::class, 'getDetail'])->name('batik.batikDetail');

Route::post('/umkm/{id}/comment', [ReviewController::class, 'storeReviewUmkm'])->name('umkmDetail.store');

Route::post('/kuliner/{id}/comment', [ReviewController::class, 'storeReviewCulinaries'])->name('culinaryDetail.store');

Route::post('/batik/{id}/comment', [ReviewController::class, 'storeReviewBatik'])->name('batikDetail.store');


