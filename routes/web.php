<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::post('/order/payment-process', 'PaymentController@processPayment')->name('process-payment');

Route::get('/order/payment-failed', 'PaymentController@paymentFailed')->name('payment-failed');

Route::get('/order/payment-completed', 'PaymentController@paymentCompleted')->name('payment-completed');
