<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
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

Route::get('/home', [MyController::class,'home'])->name('home');
Route::get('/product', [MyController::class,'product'])->name('product');
Route::get('/ourteams', [MyController::class,'ourteams'])->name('ourteams');
Route::get('/about', [MyController::class,'about'])->name('about');
Route::get('/contact', [MyController::class,'contact'])->name('contact');