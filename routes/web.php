<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmOrder;
use App\Mail\ContactForm;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/mail', function () {
    return view('mailtest');
});

Route::post('/confirmorder', [\App\Http\Controllers\ConfirmOrderController::class, 'sendMail'] )->name('confirmOrder');

Route::get('/contact', function () {
    return view('contactTest');
});

Route::post('/contactform', [\App\Http\Controllers\ContactController::class, 'sendMail'] )->name('contactForm');


// Route::post('/contactform', function () {
//     Mail::to('test@demo.nl')->send(new ContactForm());
// })->name('appelmoes');