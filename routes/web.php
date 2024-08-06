<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BkashTokenizePaymentController;

//Route::get('/', function () {
//    return view('welcome');
//});


// Payment Routes for bKash
Route::get('/', [App\Http\Controllers\BkashTokenizePaymentController::class, 'index']);
Route::get('/bkash/create-payment', [App\Http\Controllers\BkashTokenizePaymentController::class, 'createPayment'])->name('bkash-create-payment');
Route::get('/bkash/callback', [App\Http\Controllers\BkashTokenizePaymentController::class, 'callBack'])->name('bkash-callBack');

//search payment
Route::get('/bkash/search/{trxID}', [App\Http\Controllers\BkashTokenizePaymentController::class, 'searchTnx'])->name('bkash-serach');

//refund payment routes
Route::get('/bkash/refund', [App\Http\Controllers\BkashTokenizePaymentController::class, 'refund'])->name('bkash-refund');
Route::get('/bkash/refund/status', [App\Http\Controllers\BkashTokenizePaymentController::class, 'refundStatus'])->name('bkash-refund-status');
