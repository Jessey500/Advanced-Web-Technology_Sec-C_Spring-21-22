<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

/*

{   127.0.0.1:8000/api/update
    "customer_id":1,
    "name":"Annie",
    "dob":"02-03-2021",
    "email":"rahman@gmail.com",
    "phone":"01626980348",
    "password":666666
}
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::post("register",[UserController::class,'register']);
Route::get("list/{customer_id?}",[CustomerController::class,'list']);
Route::post("add",[CustomerController::class,'add']);
Route::put("update1",[CustomerController::class,'update1']);
Route::delete("delete/{customer_id}",[CustomerController::class,'delete']);
Route::get("search/{name}",[CustomerController::class,'search']);

