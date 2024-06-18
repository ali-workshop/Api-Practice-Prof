<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Services\V1\CustomerQuery;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/ali',[CustomerQuery::class,'transform']);