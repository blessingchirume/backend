<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'authenticate']);

Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/products', [ApplicationController::class, 'items']);
    
    Route::get('/order', [ApplicationController::class, 'orders']);  
    
    Route::post('/make-seamless-payment', [PaymentController::class, 'seamlessPayment']);

});

