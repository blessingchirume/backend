<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use Codevirtus\Payments\Pesepay;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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
    return view('guest-area.index');
})->name('guest.home');

Route::get('/about', function () {
    return view('guest-area.about');
})->name('guest.about');

Route::get('/services', function () {
    return view('guest-area.services');
})->name('guest.services');

Route::get('/contact', function () {
    return view('guest-area.contact');
})->name('guest.contact');

Route::get('/downloads', function () {

    //return Storage::download('public/downloads/Comex.apk'); 
    // Check if file exists in app/storage/file folder
    $path = public_path('storage/downloads');
    $file_path = $path . '/app-release.apk';

    if (file_exists($file_path)) {
        return response()->download($file_path);
    } else {
        return response(['error' => 'Requested file does not exist on server!' . $file_path]);
    }
})->name('guest.downloads');



Route::get('/create', [UserController::class, 'create'])->name('user.create');

Route::group(['middleware' => 'auth',], function () {

    Route::get('/make-payment', [PaymentController::class, 'seamlessPayment'])->name('make-payment');

    Route::get('/payment/result', [PaymentController::class, 'payment_result'])->name('payment-result');

    Route::get('/payment/return', [PaymentController::class, 'payment_return'])->name('payment-return');

    Route::get('/payments/error', [PaymentController::class, 'payment_error'])->name('payment-error');

    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::post('/', [UserController::class, 'store'])->name('user.store');
        Route::get('/{user}', [UserController::class, 'show'])->name('user.show');
        Route::post('/update/{user}', [UserController::class, 'update'])->name('user.update');
        Route::post('/delete/{user}', [UserController::class, 'destroy'])->name('user.delete');
    });

    Route::prefix('items')->group(function () {
        Route::get('/', [ItemController::class, 'index'])->name('item.index');
        Route::get('/create', [ItemController::class, 'create'])->name('item.create');
        Route::post('/', [ItemController::class, 'store'])->name('item.store');
    });

    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('order.index');
        Route::get('/{order}', [OrderController::class, 'show'])->name('order.show');
        Route::get('/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('/', [OrderController::class, 'store'])->name('order.store');
        Route::post('/update/{order}', [OrderController::class, 'update'])->name('order.update');
        Route::post('/delete/{order}', [OrderController::class, 'destroy'])->name('order.delete');
    });

    Route::prefix('payment')->group(function () {
        Route::get('/', [PaymentController::class, 'index'])->name('payment.index');
        Route::get('/poll/{payment}', [PaymentController::class, 'pollTransaction'])->name('payment.poll');
        Route::post('/', [PaymentController::class, 'index'])->name('payment.update');
        Route::post('/', [PaymentController::class, 'index'])->name('payment.delete');
    });

    Route::get('/privacy', function () {
        return view('modules.privacy');
    });

    Route::get('/home', [App\Http\Controllers\OrderController::class, 'index'])->name('home');
});

Auth::routes([
    // 'verify' => true
]);
