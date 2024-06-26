<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\CustomerController;
use App\Http\Controllers\api\v1\InvoicesController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::group(['prefix'=>'v1'],function(){

Route::apiResource('customers',CustomerController::class);

Route::apiResource('invoices',InvoicesController::class);


});