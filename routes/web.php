<?php

use App\Http\Controllers\addController;
use App\Http\Controllers\carController;
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(addController::class)->group(function(){
    Route::get('add/{x}/{y}' , 'add');
    Route::get('sub/{x}/{y}' , 'sub');
});