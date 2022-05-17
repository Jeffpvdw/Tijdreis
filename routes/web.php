<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ConfirmOrder;
use App\Mail\ContactForm;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrintListController;
use Illuminate\Support\Facades\App;

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contactsend', function () {
    return view('contactsend');
});

Route::get('/boek', function () {
    return view('bestel');
});

Route::get('/gegevens', [OrderController::class, 'get']);

Route::post('/gegevens', function () {
    return view('gegevens');
});

Route::get('/tour', function () {
    return view('tour');
});

Route::get('/thema', function () {
    return view('thema');
});

Route::get('/succes', function () {
    return view('succes');
});

Route::get('/fout', function () {
    return view('fout');
});

Route::get('/housekeeping', function () {
    return view('housekeeping');
});

Route::get('/housekeeping/home', function () {
    return view('housekeepinghome');
});

Route::get('/statistics', function () {
    return view('statistics');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/mollie', [\App\Http\Controllers\PaymentController::class, 'testPayment'])->name('mollie');
Route::get('/failedpayment', [\App\Http\Controllers\PaymentController::class, 'FailedPayment']);

require __DIR__.'/auth.php';

Route::get('/mail', function () {
    return view('mailtest');
});

Route::post('/confirmorder', [\App\Http\Controllers\ConfirmOrderController::class, 'sendMail'] )->name('confirmOrder');

Route::post('/contactform', [\App\Http\Controllers\ContactController::class, 'sendMail'] )->name('contactForm');