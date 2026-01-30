<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/intro', function () {
    return view('intro');
});

use App\Http\Controllers\CalculatorController;

// Calculator endpoints
Route::match(['get','post'], '/calc/add', [CalculatorController::class, 'add']);
Route::match(['get','post'], '/calc/subtract', [CalculatorController::class, 'subtract']);