<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CustomerController;

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
    return view('welcome');
});

Route::get('/customerlogin', [CustomerController::class,'customerlogin'])->name('customerlogin');
Route::post('/customerlogin', [CustomerController::class,'customerlogininput'])->name('customerlogininput');

Route::get('/registration', [CustomerController::class,'registration'])->name('registration');
Route::post('/registration', [CustomerController::class,'registrationinput'])->name('registration');
Route::get('/sendmail',[MailController::class,'sendEmail']);